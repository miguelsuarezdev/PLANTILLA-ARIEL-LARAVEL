<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/chat', function () {
        return view('chat');
    })->name('dashboard');
});





// Ruta para mostrar los términos de servicio
Route::get('/terms', function () {
    return view('terms'); // Asegúrate de tener una vista 'terms.blade.php' en resources/views
})->name('terms.show');

// Ruta para mostrar la política de privacidad
Route::get('/privacy-policy', function () {
    return view('privacy'); // Asegúrate de tener una vista 'privacy.blade.php' en resources/views
})->name('policy.show');
