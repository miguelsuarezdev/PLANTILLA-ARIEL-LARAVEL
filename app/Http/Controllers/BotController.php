<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BotController extends Controller
{
    public function showChatForm()
    {
        return view('bot');
    }

    public function sendMessage(Request $request)
    {
        // Obtener el mensaje del usuario
        $userMessage = $request->input('message');

        // Enviar el mensaje al bot y obtener la respuesta
        $response = Http::post('http://localhost:3000/send', [
            'message' => $userMessage,
        ]);

        $responseData = $response->json();

        // Extrae el texto de la respuesta del bot
        $botMessageText = $responseData['response']['text'] ?? 'Error in response';

        // Formatear la respuesta del bot para mostrarla en el chat
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

        // Convertir el texto de la respuesta del bot a audio usando la API de ElevenLabs
        $api_key = "sk_cf430a6e35b4f537a3a6324805bb8255bbe18a10d16bbfb1"; // Coloca tu API key en .env
        $voice_id = 'JBFqnCBsd6RMkjVDRZzb'; // ID de la voz
        $url = "https://api.elevenlabs.io/v1/text-to-speech/{$voice_id}";

        $audioResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'xi-api-key' => $api_key
        ])->withOptions(['verify' => false])->post($url, [
            'text' => $botMessageText,
            'voice_settings' => [
                'stability' => 0.5,
                'similarity_boost' => 0.5
            ]
        ]);

        if ($audioResponse->successful()) {
            // Guardar el archivo de audio en la carpeta public/audio
            $audioFile = 'audio/output_audio_' . time() . '.mp3';
            $saveSuccess = file_put_contents(public_path($audioFile), $audioResponse->body());

            if ($saveSuccess !== false && file_exists(public_path($audioFile))) {
                // Retornar el texto formateado y la URL del audio
                return response()->json([
                    'response' => $formattedResponse,
                    'audioUrl' => asset($audioFile)
                ]);
            } else {
                return response()->json(['error' => 'No se pudo guardar el archivo de audio.']);
            }
        } else {
            return response()->json(['error' => 'Error al convertir el texto a audio: ' . $audioResponse->body()]);
        }
    }
}
