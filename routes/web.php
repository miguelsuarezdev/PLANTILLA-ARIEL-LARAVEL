<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\BotController;
use App\Http\Controllers\TextToSpeechController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('bot');
    })->name('bot');


    Route::get('/chat', [BotController::class, 'showChatForm']);
    Route::post('/chat', [BotController::class, 'sendMessage']);



    Route::post('/send-message', function (Request $request) {
        $message = $request->input('message');

        $chatUrl = env('BOTPRESS_WEBHOOK');

        $response = Http::withOptions(['verify' => false])->post($chatUrl, [
            'type' => 'text',
            'text' => $message,
        ]);

        \Log::info($response->body());

        $botResponse = $response->json();

        return response()->json(['reply' => $botResponse['responses'][0]['text'] ?? 'Sin respuesta del bot']);
    });



    Route::get('/convert-text', function () {
        return view('convert_text');
    });

    Route::post('/convert-text-to-audio', [TextToSpeechController::class, 'convertTextToAudio'])
        ->name('convert.text.to.audio');
});















// Ruta para mostrar los términos de servicio
Route::get('/terms', function () {
    return view('terms'); // Asegúrate de tener una vista 'terms.blade.php' en resources/views
})->name('terms.show');

// Ruta para mostrar la política de privacidad
Route::get('/privacy-policy', function () {
    return view('privacy'); // Asegúrate de tener una vista 'privacy.blade.php' en resources/views
})->name('policy.show');
