<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

set_time_limit(60);

class BotController extends Controller
{
    public function showChatForm()
    {
        return view('bot');
    }

    public function sendMessage(Request $request)
    {
        $userMessage = $request->input('message');
        $processAudio = $request->input('processAudio') === 'true'; // Capturar si debe procesar el audio

        Log::info("Usuario envió el mensaje: " . $userMessage);
        Log::info("Procesar audio: " . ($processAudio ? 'Sí' : 'No'));

        try {
            // Enviar el mensaje al bot en el backend (Node.js en este caso)
            $response = Http::timeout(60)->post('http://localhost:3000/send', [
                'message' => $userMessage,
            ]);

            Log::info("Respuesta del bot: " . $response->body());

            $responseData = $response->json();
            $botMessageText = $responseData['response']['text'] ?? 'No encontré una respuesta relacionada a tu pregunta, por favor reformúlala.';

            // Formatear la respuesta del bot con títulos
            $titles = ['Presenciales', 'Virtuales', 'Entrenamiento Especializado', 'Organismos Internacionales', 'Educativos'];
            $formattedResponse = '';

            foreach (explode("\n", $botMessageText) as $line) {
                $trimmedLine = trim($line);
                if (in_array($trimmedLine, $titles)) {
                    $formattedResponse .= '<strong>' . $trimmedLine . ':</strong><br>';
                } else {
                    $formattedResponse .= $trimmedLine . '<br>';
                }
            }

            if ($processAudio && config('app.activeaudio') == 'true') {
                // Conversión de texto a audio usando Eleven Labs API
                $api_key = config('app.eleventlab');
                $voice_id = 'XrExE9yKIg1WjnnlVkGX'; // ID de voz predefinido
                $url = "https://api.elevenlabs.io/v1/text-to-speech/{$voice_id}";

                $audioResponse = Http::timeout(60)->withHeaders([
                    'Content-Type' => 'application/json',
                    'xi-api-key' => $api_key
                ])->withOptions(['verify' => false])->post($url, [
                    'text' => $botMessageText,
                    'model_id' => "eleven_multilingual_v2",
                    'voice_settings' => [
                        'stability' => 0.9,
                        'similarity_boost' => 0.9
                    ]
                ]);

                // Verificar si la conversión de texto a audio fue exitosa
                if ($audioResponse->successful()) {
                    // Generar el nombre del archivo de audio
                    $audioFile = 'audio/output_audio_' . time() . '.mp3';
                    $saveSuccess = file_put_contents(public_path($audioFile), $audioResponse->body());

                    if ($saveSuccess !== false && file_exists(public_path($audioFile))) {
                        Log::info("Archivo de audio guardado en: " . public_path($audioFile));
                        return response()->json([
                            'response' => $formattedResponse,
                            'audioUrl' => asset($audioFile) // Retornar la URL del archivo de audio
                        ]);
                    } else {
                        Log::error("Error al guardar el archivo de audio.");
                        return response()->json([
                            'response' => $formattedResponse,
                            'audioUrl' => null
                        ]);
                    }
                } else {
                    Log::error("Error al convertir el texto a audio: " . $audioResponse->body());
                    return response()->json([
                        'response' => $formattedResponse,
                        'audioUrl' => null
                    ]);
                }
            } else {
                return response()->json([
                    'response' => $formattedResponse,
                    'audioUrl' => null
                ]);
            }
        } catch (\Exception $e) {
            Log::error("Error durante la ejecución: " . $e->getMessage());
            return response()->json(['error' => 'Ocurrió un error: ' . $e->getMessage()]);
        }
    }
}
