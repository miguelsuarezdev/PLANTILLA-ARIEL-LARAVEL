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

<body class="font-sans bg-gray-100">

    <div class="flex flex-col h-screen p-4 lg:flex-row lg:p-0">
        <!-- Sección de formulario -->
        <div class="flex items-center justify-center p-8 bg-white shadow-lg lg:w-1/2 lg:h-full rounded-2xl lg:m-3">
            <div class="w-full max-w-xl p-8 bg-transparent rounded-xl">
                <img src="{{ asset('storage/imagenes/logo.svg') }}" alt="Logo Ariel" class="mt-2 w-44">
                <h3 class="mb-2 text-2xl font-semibold">Crear cuenta</h3>
                <p class="mb-4 text-gray-600">Con tu cuenta podrás acceder a Ariel y todas sus funcionalidades.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Mostrar mensajes de error globales -->
                    @if ($errors->any())
                    <div class="mb-4">
                        <div class="font-medium text-red-600">
                            {{ __('Whoops! Something went wrong.') }}
                        </div>
                        <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="relative mb-4">
                        <input type="text" id="name" name="name" placeholder="Nombre"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required />
                        @error('name')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative mb-4">
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required />
                        @error('email')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <div class="absolute inset-y-0 flex items-center pointer-events-none right-3">
                            <!-- Icono de email -->
                        </div>
                    </div>

                    <div class="relative mb-4">
                        <input type="password" id="password" name="password" placeholder="Contraseña"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required />
                        @error('password')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <div class="absolute inset-y-0 flex items-center pointer-events-none right-3">
                            <!-- Icono de contraseña -->
                        </div>
                    </div>

                    <div class="relative mb-6">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Confirmar contraseña"
                            class="w-full px-4 py-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required />
                        @error('password_confirmation')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <div class="absolute inset-y-0 flex items-center pointer-events-none right-3">
                            <!-- Icono de confirmación de contraseña -->
                        </div>
                    </div>

                    <!-- Reglas de contraseña -->
                    <ul class="mb-4 text-sm text-gray-400">
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
                        class="w-full py-2 text-white transition bg-blue-600 rounded-md hover:bg-blue-700">Ingresar</button>
                </form>

                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">¿Ya tienes cuenta?
                        <a href="{{ route('login') }}" class="text-blue-600">Inicia sesión</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Sección de chat -->
        <div class="flex-col items-center justify-center hidden p-8 bg-gray-100 lg:w-1/2 lg:flex">
            <img src="https://www.arielapp.co/assets/forms/value-proposal.svg" alt="Chat preview"
                class="object-contain max-w-full max-h-full mb-4">
            <p class="text-lg font-semibold text-center text-gray-600">Resuelve cualquier consulta legal <br> en
                segundos.</p>
        </div>
    </div>

</body>

</html>
