<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        /* Personalizando el scroll */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">

        <!-- Sección de formulario -->
        <div class="w-1/2 flex justify-center rounded-2xl items-center ml-3 mt-3 bg-white" style="height: 600px; max-width: 800px;">
            <div class="bg-white rounded-lg p-8" style="width: 100%; max-width: 800px;">
                <img src="{{ asset('storage/imagenes/logo.svg') }}" alt="Logo Ariel" class="w-24 mb-6">
                <h3 class="text-2xl font-bold mb-1">Iniciar sesión</h3>
                <p class="text-gray-600 text-base mt-4 mb-5">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-blue-600">Crea una cuenta</a></p>

                <!-- Mostrar mensajes de error -->
                @if ($errors->any())
                    <div class="mb-4">
                        <ul class="list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required autofocus autocomplete="username"/>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required autocomplete="current-password"/>
                    </div>
                    <div class="flex items-center justify-end mb-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-blue-600 text-sm">Recuperar contraseña</a>
                        @endif
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Ingresar</button>
                </form>
            </div>
        </div>

        <!-- Sección de chat -->
        <div class="w-1/2 flex flex-col justify-center items-center bg-gray-100">
            <img src="https://www.arielapp.co/assets/forms/value-proposal.svg" alt="Chat preview" class="max-w-full max-h-full object-contain mb-4">
            <p class="text-center text-gray-600 text-lg font-semibold">Resuelve cualquier consulta legal <br> en segundos.</p>
        </div>

    </div>
</body>

</html>
