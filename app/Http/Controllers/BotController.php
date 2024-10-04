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

        $userMessage = $request->input('message');


        $response = Http::post('http://localhost:3000/send', [
            'message' => $userMessage,
        ]);

        $responseData = $response->json();


        $botMessageText = $responseData['response']['text'] ?? 'Error in response';


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


        $api_key = "sk_084c7e15bc4c6a8c8ae7fdaeeb7214b86368453e5f746071";
        $voice_id = 'XrExE9yKIg1WjnnlVkGX';
        $url = "https://api.elevenlabs.io/v1/text-to-speech/{$voice_id}";

        $audioResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'xi-api-key' => $api_key
        ])->withOptions(['verify' => false])->post($url, [
            'text' => $botMessageText,
             'model_id' =>"eleven_multilingual_v2",
            'voice_settings' => [
                'stability' => 0.9,
                'similarity_boost' => 0.9
            ]
        ]);

        if ($audioResponse->successful()) {

            $audioFile = 'audio/output_audio_' . time() . '.mp3';
            $saveSuccess = file_put_contents(public_path($audioFile), $audioResponse->body());

            if ($saveSuccess !== false && file_exists(public_path($audioFile))) {

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
