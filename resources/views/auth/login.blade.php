<!doctype html>
<html lang="es">

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

<body class="h-screen overflow-hidden bg-gray-100">

    <div class="flex flex-col h-full p-4 overflow-hidden lg:flex-row lg:p-0">
        <!-- Sección de formulario -->
        <div class="flex items-center justify-center h-full p-8 bg-white shadow-lg lg:w-1/2 rounded-2xl lg:m-3">
            <div class="w-full max-w-xl p-8 bg-white rounded-lg">
                <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="Logo Ariel" class="w-24 mb-6">
                <h3 class="mb-1 text-2xl font-bold">Iniciar sesión</h3>
                <p class="mt-4 mb-5 text-base text-gray-600">¿No tienes cuenta?
                    <a href="{{ route('register') }}" class="text-blue-600">Crea una cuenta</a>
                </p>

                <!-- Mostrar mensajes de error -->
                @if ($errors->any())
                <div class="mb-4">
                    <ul class="text-sm text-red-600 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required autofocus autocomplete="username"/>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-semibold text-gray-700">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required autocomplete="current-password"/>
                    </div>

                    <div class="flex items-center justify-end mb-6">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-600">Recuperar contraseña</a>
                        @endif
                    </div>

                    <button type="submit" class="w-full py-2 text-white transition bg-blue-600 rounded-md hover:bg-blue-700">Ingresar</button>
                </form>
            </div>
        </div>

        <!-- Sección de chat -->
        <div class="flex-col items-center justify-center hidden h-full p-8 bg-gray-100 lg:w-1/2 lg:flex">
            <img src="https://www.arielapp.co/assets/forms/value-proposal.svg" alt="Chat preview" class="object-contain max-w-full max-h-full mb-4">
            <p class="text-lg font-semibold text-center text-gray-600">Resuelve cualquier consulta legal <br> en segundos.</p>
        </div>
    </div>

</body>

</html>
