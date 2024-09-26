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

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <div class="w-1/2 flex justify-center rounded-2xl items-center p-8 mt-3 mb-80 ml-3 bg-white" style=" height: 700px; max-width: 800px; ">
            <div class="bg-white rounded-xl p-8 max-w-xl w-full ">
                <img src="{{ asset('storage/imagenes/logo.svg') }}" alt="Logo Ariel" class="w-48 mb-6">
                <h3 class="text-2xl font-semibold mb-2">Crear cuenta</h3>
                <p class="text-gray-600 mb-6">Con tu cuenta podrás acceder a Ariel y todas sus funcionalidades.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Mostrar mensajes de error globales -->
                    @if ($errors->any())
                        <div class="mb-4">
                            <div class="text-red-600 font-medium">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="relative mb-4">
                        <input type="text" id="name" name="name" placeholder="Nombre"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        @error('name')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="relative mb-4">
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        @error('email')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M4 5h16c0.55 0 1 0.45 1 1v12c0 0.55 -0.45 1 -1 1h-16c-0.55 0 -1 -0.45 -1 -1v-12c0 -0.55 0.45 -1 1 -1Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="24" stroke-dashoffset="24" d="M3 6.5l9 5.5l9 -5.5"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="24;0"/></path></g></svg>
                        </div>
                    </div>

                    <div class="relative mb-4">
                        <input type="password" id="password" name="password" placeholder="Contraseña"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        @error('password')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><circle cx="12" cy="12" r="0" fill="currentColor"><animate fill="freeze" attributeName="r" dur="0.2s" values="0;3"/></circle><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12c1.38 -0.77 4.42 -1.3 8 -1.3c3.58 0 6.62 0.53 8 1.3c-1.38 0.77 -4.42 1.3 -8 1.3c-3.58 0 -6.62 -0.53 -8 -1.3Z"><animate fill="freeze" attributeName="d" dur="0.5s" values="M4 12c1.38 -0.77 4.42 -1.3 8 -1.3c3.58 0 6.62 0.53 8 1.3c-1.38 0.77 -4.42 1.3 -8 1.3c-3.58 0 -6.62 -0.53 -8 -1.3Z;M2 12c1.72 -3.83 5.53 -6.5 10 -6.5c4.47 0 8.28 2.67 10 6.5c-1.72 3.83 -5.53 6.5 -10 6.5c-4.47 0 -8.28 -2.67 -10 -6.5Z"/></path></svg>
                        </div>
                    </div>

                    <div class="relative mb-6">
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                        @error('password_confirmation')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><circle cx="12" cy="12" r="0" fill="currentColor"><animate fill="freeze" attributeName="r" dur="0.2s" values="0;3"/></circle><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12c1.38 -0.77 4.42 -1.3 8 -1.3c3.58 0 6.62 0.53 8 1.3c-1.38 0.77 -4.42 1.3 -8 1.3c-3.58 0 -6.62 -0.53 -8 -1.3Z"><animate fill="freeze" attributeName="d" dur="0.5s" values="M4 12c1.38 -0.77 4.42 -1.3 8 -1.3c3.58 0 6.62 0.53 8 1.3c-1.38 0.77 -4.42 1.3 -8 1.3c-3.58 0 -6.62 -0.53 -8 -1.3Z;M2 12c1.72 -3.83 5.53 -6.5 10 -6.5c4.47 0 8.28 2.67 10 6.5c-1.72 3.83 -5.53 6.5 -10 6.5c-4.47 0 -8.28 -2.67 -10 -6.5Z"/></path></svg>

                        </div>
                    </div>

                    <!-- Reglas de contraseña -->
                    <ul class="text-sm text-gray-400 mb-4">
                        <li>8 o más caracteres</li>
                        <li>1 letra mayúscula</li>
                        <li>1 letra minúscula</li>
                        <li>1 número</li>
                        <li>1 símbolo</li>
                    </ul>

                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="terms" name="terms" class="mr-2" required />
                        <label for="terms" class="text-sm text-gray-700">Acepto los
                            <a href="{{ route('terms.show') }}" class="text-blue-600">Términos & Condiciones</a> y las
                            <a href="{{ route('policy.show') }}" class="text-blue-600">Políticas de Privacidad</a>.
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Ingresar</button>
                </form>

                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">¿Ya tienes cuenta?
                        <a href="{{ route('login') }}" class="text-blue-600">Inicia sesión</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Sección de formulario -->

        <!-- Sección de chat -->
        <div class="w-1/2 flex flex-col justify-center items-center bg-gray-100 p-8">
            <img src="https://www.arielapp.co/assets/forms/value-proposal.svg" alt="Chat preview"
                class="max-w-full max-h-full object-contain mb-4">
            <p class="text-center text-gray-600 text-lg font-semibold">Resuelve cualquier consulta legal <br> en
                segundos.</p>
        </div>

    </div>
</body>

</html>
