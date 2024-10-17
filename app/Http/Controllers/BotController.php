<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; // Importar Log
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
        Log::info("Usuario envió el mensaje: " . $userMessage);

        try {
            $response = Http::timeout(60)->post('http://localhost:3000/send', [
                'message' => $userMessage,
            ]);

            Log::info("Respuesta del bot: " . $response->body());

            $responseData = $response->json();
            $botMessageText = $responseData['response']['text'] ?? 'No encontre una respuesta relacionada a tu pregunta, puedes reformularla.';

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
            if (config('app.activeaudio')) {
                // Conversión de texto a audio
                $api_key = config('app.eleventlab');
                $voice_id = 'XrExE9yKIg1WjnnlVkGX';
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

                // Manejar la respuesta del audio
                if ($audioResponse->successful()) {
                    $audioFile = 'audio/output_audio_' . time() . '.mp3';
                    $saveSuccess = file_put_contents(public_path($audioFile), $audioResponse->body());

                    if ($saveSuccess !== false && file_exists(public_path($audioFile))) {
                        Log::info("Archivo de audio guardado en: " . public_path($audioFile));
                        return response()->json([
                            'response' => $formattedResponse,
                            'audioUrl' => asset($audioFile)
                        ]);
                    } else {
                        Log::error("Error al guardar el archivo de audio.");
                        // Devolver solo la respuesta de texto si el audio falla
                        return response()->json([
                            'response' => $formattedResponse,
                            'audioUrl' => null
                        ]);
                    }
                } else {
                    Log::error("Error al convertir el texto a audio: " . $audioResponse->body());
                    // Devolver solo la respuesta de texto si el audio falla
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
            // Registrar cualquier excepción
            Log::error("Error durante la ejecución: " . $e->getMessage());
            return response()->json(['error' => 'Ocurrió un error: ' . $e->getMessage()]);
        }
    }
}
