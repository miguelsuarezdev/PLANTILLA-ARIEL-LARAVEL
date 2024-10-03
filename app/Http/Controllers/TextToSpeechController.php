<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  // Para hacer la solicitud HTTP

class TextToSpeechController extends Controller
{
    public function convertTextToAudio(Request $request)
    {
        // Validamos la entrada
        $request->validate([
            'text' => 'required|string|max:1000',
        ]);

        // Datos para la solicitud a la API
        $text = $request->input('text');
        $api_key = "sk_cf430a6e35b4f537a3a6324805bb8255bbe18a10d16bbfb1";  // Asegúrate de colocar tu API Key en el archivo .env
        $voice_id = 'JBFqnCBsd6RMkjVDRZzb';   // ID de la voz
        $url = "https://api.elevenlabs.io/v1/text-to-speech/{$voice_id}";

        // Realizamos la solicitud a la API de ElevenLabs
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'xi-api-key' => $api_key
        ])->withOptions(['verify' => false])->post($url, [
            'text' => $text,
            'voice_settings' => [
                'stability' => 0.5,
                'similarity_boost' => 0.5
            ]
        ]);

        // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            // Nombre del archivo con timestamp para evitar sobrescribir archivos
            $audioFile = 'audio/output_audio_' . time() . '.mp3';

            // Intentar guardar el archivo en la carpeta public/audio
            $saveSuccess = file_put_contents(public_path($audioFile), $response->body());

            // Verificar si el archivo se guardó correctamente
            if ($saveSuccess === false) {
                return back()->with('error', 'No se pudo guardar el archivo de audio.');
            }

            // Verificar si el archivo realmente existe
            if (file_exists(public_path($audioFile))) {
                // Retornar un enlace para descargar el archivo
                return response()->download(public_path($audioFile))->deleteFileAfterSend();
            } else {
                return back()->with('error', 'El archivo de audio no fue creado.');
            }
        } else {
            // Manejar el error de respuesta de la API
            return back()->with('error', 'Error al convertir el texto a audio: ' . $response->body());
        }
    }



}
