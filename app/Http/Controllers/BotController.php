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
        $response = Http::post('http://localhost:3000/send', [
            'message' => $request->input('message'),
        ]);

        $responseData = $response->json();

        // Extrae el texto y separa las preguntas
        $botMessageText = $responseData['response']['text'] ?? 'Error in response';

        // Crear variables para los títulos y el contenido
        $titles = ['Presenciales', 'Virtuales', 'Entrenamiento Especializado', 'Organismos Internacionales', 'Educativos'];
        $formattedResponse = '';

        // Buscar los títulos y formatearlos en negrita, el resto dejarlo normal
        foreach (explode("\n", $botMessageText) as $line) {
            $trimmedLine = trim($line);
            // Verificar si la línea es un título
            if (in_array($trimmedLine, $titles)) {
                $formattedResponse .= '<strong>' . $trimmedLine . ':</strong><br>';
            } else {
                // Añadir contenido normal
                $formattedResponse .= $trimmedLine . '<br>';
            }
        }

        // Devuelve la respuesta como JSON
        return response()->json(['response' => $formattedResponse]);
    }
}
