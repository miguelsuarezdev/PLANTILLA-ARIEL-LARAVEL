<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <header>
        <nav class="relative flex items-center justify-between px-4 py-4 bg-white">


            <a href="javascript:void(0)"><img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="logo"
                    class='w-40 ml-7 max-lg:mr-5' />
            </a>

            <div class="lg:hidden">
                <button class="flex items-center p-3 text-blue-600 navbar-burger">
                    <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul
                class="absolute hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm font-bold hover:text-gray-500" href="#">Precios</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm font-bold" href="#">Nosotros</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm font-bold hover:text-gray-500" href="#">Servicios</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>

                <li><a class="text-sm font-bold hover:text-gray-500" href="#">Contacto</a></li>
            </ul>


            <a class="hidden px-6 py-2 text-sm font-bold text-gray-900 transition duration-200 lg:inline-block lg:ml-auto lg:mr-3 bg-gray-50 hover:bg-gray-100 rounded-xl"
                href="{{ url('login') }}">Iniciar sesion</a>


            <a class="hidden px-6 py-2 text-sm font-bold text-white transition duration-200 bg-blue-500 lg:inline-block hover:bg-blue-600 rounded-xl"
                href="{{ url('register') }}">Registrase</a>

        </nav>

        <div class="relative z-50 hidden navbar-menu">
            <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
            <nav
                class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-white border-r">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <a href="javascript:void(0)"><img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="logo"
                            class='w-40 ml-7 max-lg:mr-5' />
                    </a>
                    </a>
                    <button class="navbar-close">
                        <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600"
                                href="#">Home</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600"
                                href="#">Precios </a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600"
                                href="#">Nosotros</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600"
                                href="#">Servicios</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-blue-50 hover:text-blue-600"
                                href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="pt-6">
                        <a class="block px-4 py-3 mb-3 text-xs font-semibold leading-loose text-center bg-gray-50 hover:bg-gray-100 rounded-xl"
                            href="{{ url('login')  }}">Iniciar sesion</a>
                        <a class="block px-4 py-3 mb-2 text-xs font-semibold leading-loose text-center text-white bg-blue-600 hover:bg-blue-700 rounded-xl"
                            href="{{url('register')}}">Registrarse</a>
                    </div>
                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>Copyright © 2024</span>
                    </p>
                </div>
            </nav>
        </div>


        <script>
            // Burger menus
            document.addEventListener('DOMContentLoaded', function() {
                // open
                const burger = document.querySelectorAll('.navbar-burger');
                const menu = document.querySelectorAll('.navbar-menu');

                if (burger.length && menu.length) {
                    for (var i = 0; i < burger.length; i++) {
                        burger[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                // close
                const close = document.querySelectorAll('.navbar-close');
                const backdrop = document.querySelectorAll('.navbar-backdrop');

                if (close.length) {
                    for (var i = 0; i < close.length; i++) {
                        close[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                if (backdrop.length) {
                    for (var i = 0; i < backdrop.length; i++) {
                        backdrop[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }
            });
        </script>

    </header>





    {{-- HEADER --}}

    {{-- <header class='flex  py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[80px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center w-full gap-5'>
            <a href="javascript:void(0)"><img src="{{ asset('storage/imagenes/logo.svg') }}" alt="logo"
                    class='w-40 max-lg:mr-5' />
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!flex lg:ml-auto max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex gap-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='hidden mb-6 max-lg:block'>
                        <a href="javascript:void(0)"><img src="" alt="logo" class='w-40' />
                        </a>
                    </li>
                    <li class='px-3 max-lg:border-b max-lg:py-3'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[#333] font-semibold block text-[15px]'>Precios</a>
                    </li>
                    <li class='px-3 max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[#333] font-semibold block text-[15px]'>Nosotros</a>
                    </li>

                    <li class='px-3 max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[#333] font-semibold block text-[15px]'>Blog</a>
                    </li>


                </ul>
            </div>

            <div class='flex items-center space-x-6 max-lg:ml-auto'>
                <a href="{{ url('login') }}">
                    <button
                        class='px-4 py-2 text-[15px] rounded font-semibold text-[#333] bg-slate-400  hover:bg-[#007bff] transition-all ease-in-out duration-300 bg-transparent hover:text-white'>Iniciar
                        sesion</button>

                </a>


                <a href="{{ url('register') }}">
                    <button type="button"
                        class="px-5 py-2.5 rounded-lg text-white text-sm tracking-wider font-medium border border-current outline-none bg-gradient-to-tr hover:bg-gradient-to-tl from-blue-700 to-blue-300">Probar
                        Gratis</button>

                </a>

                <a href="{{ url('chat') }}">
                    <button type="button"
                        class="px-5 py-2.5 rounded-lg text-white text-sm tracking-wider font-medium border border-current outline-none bg-gradient-to-tr hover:bg-gradient-to-tl from-lime-600 to-slate-200">
                        Abrir chat</button>

                </a>

                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7" fill="#333" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header> --}}


    {{-- SECCION PRINCIPAL --}}
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[810px] text-center lg:mb-20">
                        <span class="block mb-2 text-lg font-semibold text-gray-400 text-primary">
                            Asistente legal con IA
                        </span>
                        <h2 class="mb-4 text-3xl font-semibold text-dark sm:text-4xl md:text-[55px] dark:text-white">
                            Conocimiento especializado
                        </h2>
                        <h2
                            class=" bg-gradient-to-r from-[#56c596] to-[#20aeda] bg-clip-text text-transparent mb-4 text-3xl font-semibold text-dark sm:text-4xl md:text-[50px] dark:text-white">
                            al alcance de todos
                        </h2>

                        <h2
                            class="  mb-4 text-1xl font-normal text-gray-500 sm:text-1xl md:text-[19px] dark:text-white">
                            Analiza e interpreta miles de regulaciones y documentos legales de todos los sectores en
                            Colombia, rápidamente y con total confianza.

                        </h2>
                        <div class="flex justify-center">
                            <button class="py-3 font-bold text-white bg-blue-500 rounded px-14 hover:bg-blue-700">
                                Probar Gratis
                            </button>
                        </div>

                        <video class="w-full h-full mt-12 rounded-lg" controls>
                            <source src="https://www.arielapp.co/assets/hero/videoDemo.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>




                    </div>
                </div>
            </div>


        </div>

    </section>

    {{-- SECCION DE CONFIANZA --}}
    <section>
        <div class="container mx-auto">
            <style>
                .logo-slider {
                    overflow: hidden;
                    position: relative;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .logo-track {
                    display: flex;
                    animation: slide-horizontal 15s linear infinite;
                }

                .logo-slider::before,
                .logo-slider::after {
                    content: '';
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    width: 100px;
                    /* Ajusta el ancho del desvanecimiento */
                    z-index: 1;
                }

                .logo-slider::before {
                    left: 0;
                    background: linear-gradient(to right, white, transparent);
                }

                .logo-slider::after {
                    right: 0;
                    background: linear-gradient(to left, white, transparent);
                }


                @keyframes slide-horizontal {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-35%);
                    }
                }

                .logo-item {
                    display: inline-block;
                    margin-right: 40px;
                    /* Espacio entre logos */
                    width: 250px;
                    /* Ajusta el tamaño según sea necesario */
                }

                .logo-item img {
                    width: 100%;
                    height: auto;
                }
            </style>
            <div class="max-w-lg p-4 mx-auto text-center">
                <h2 class="mb-6 text-4xl font-semibold text-gray-800">Ya confían en nosotros</h2>

            </div>
            <div class="logo-slider">
                <div class="logo-track">
                    <!-- Primera copia de logos -->
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 1" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/lineicons.svg" alt="Logo 2" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/uideck.svg" alt="Logo 3" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <!-- Segunda copia de logos para un ciclo continuo -->
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 1" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/lineicons.svg" alt="Logo 2" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/uideck.svg" alt="Logo 3" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- SECCION DE BRAND --}}
    <section class="mt-44">
        <div
            class="max-w-6xl mx-auto flex items-center bg-gradient-to-r from-[#1A2848] to-blue-900 px-8 py-8 rounded-2xl shadow-lg">
            <div class="flex-1">
                <h2 class="mb-4 text-3xl  text-white sm:text-4xl md:text-[30px] dark:text-white">
                    Creado por abogados para facilitar la toma de decisiones en cualquier organización que trabaje con
                    regulación especializada.
                </h2>
                <h2 class="  mb-4 text-1xl  text-[#9ca3af] sm:text-1xl md:text-[20px] dark:text-white">
                    Desarrollado con el respaldo de <a href="#"
                        class=" bg-gradient-to-r from-[#56c596] to-[#20aeda] bg-clip-text text-transparent mb-4  font-bold text-dark  dark:text-white">Pava
                        Díaz
                        Arana</a>, firma líder en Colombia en derecho punitivo y riesgos corporativo.

                </h2>



                <a href="#" class="text-blue-300 underline">Conocer más de PDA</a>
            </div>
            <div class="flex-shrink-0 ml-8">
                <img src="https://www.arielapp.co/assets/pda/pda-certified.svg" alt="PDA Badge"
                    class="w-32 h-auto" />
            </div>
        </div>
    </section>


    {{-- SECCION DE BENEFICIOS --}}
    <section class="mt-14">
        <div class="bg-white font-[sans-serif]">
            <div class="max-w-lg p-4 mx-auto text-center">
                <h2 class="mb-6 text-4xl font-bold text-gray-800">Beneficios y capacidades</h2>

            </div>
        </div>

        <div class="p-4 font-sans bg-white">
            <div class="max-w-5xl mx-auto max-lg:max-w-3xl max-md:max-w-sm">

                {{-- TARJETA #1 --}}
                <div class="grid grid-cols-1 gap-6 mt-10 md:grid-cols-2">
                    <div
                        class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                        <div class="h-64 lg:w-full">
                            <img src="https://www.arielapp.co/assets/benefits/card1.svg" alt="Blog Post 1"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800">Tecnología GPT Avanzada</h3>
                            <p class="mt-4 text-sm text-gray-500">Ahorra cientos de horas en investigación,
                                transcripción y análisis de documentos y audios.</p>
                        </div>
                    </div>
                    {{-- TARJETA #2 --}}
                    <div
                        class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                        <div class="h-64 lg:w-full">
                            <img src="https://www.arielapp.co/assets/benefits/card2.svg" alt="Blog Post 2"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800">Respuestas Específicas y Precisas</h3>
                            <p class="mt-4 text-sm text-gray-500">Ariel produce respuestas fundamentadas en el marco
                                legal colombiano.</p>
                        </div>
                    </div>

                    {{-- TARJETA #3 --}}
                    <div
                        class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                        <div class="h-64 lg:w-full">
                            <img src="https://www.arielapp.co/assets/benefits/card3.svg" alt="Blog Post 2"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800">Análisis Rápido de Fuentes Jurídicas</h3>
                            <p class="mt-4 text-sm text-gray-500">Capaz de procesar miles de documentos de multiples
                                fuentes, desde normativas, jurisprudencia hasta doctrinas. Desde la constitución, hasta
                                regulaciones locales. </p>
                        </div>
                    </div>
                    {{-- TARJETA #4 --}}
                    <div
                        class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                        <div class="h-64 lg:w-full">
                            <img src="https://www.arielapp.co/assets/benefits/card4.svg" alt="Blog Post 2"
                                class="object-cover w-full h-full" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800">Razonamiento jurídico complejo</h3>
                            <p class="mt-4 text-sm text-gray-500">Utiliza reglas de decisión estructuradas para
                                garantizar coherencia y precisión.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- SECCION DE CARACTERISTICAS --}}
    <section>
        <section class="mt-16">
            <div class="max-w-6xl mx-auto mb-12 text-center">
                <h2 class="text-3xl font-semibold text-gray-900">Características de Alena</h2>
            </div>
            <div class="flex flex-col items-center max-w-6xl mx-auto space-y-8 lg:flex-row lg:space-y-0 lg:space-x-8">
                <div class="flex-shrink-0 w-full lg:w-auto">
                    <img src="https://www.arielapp.co/assets/features/feature1/image.svg"
                        alt="Descripción de la imagen" class="w-full rounded-lg shadow-md lg:w-auto" />
                </div>
                <div class="flex-1 text-center lg:text-left">
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 text-sm font-medium text-blue-700 bg-blue-100 rounded-full">Regulación
                            Especializada</span>
                    </div>
                    <h3 class="mb-4 text-2xl font-semibold text-gray-900">Accede a una base de datos con miles de
                        documentos jurídicos</h3>
                    <p class="text-gray-700">Relevantes para la práctica del derecho en Colombia. Utilízala tanto para
                        investigaciones complejas como para consultas específicas sobre escenarios legales.</p>
                </div>
            </div>
        </section>

        <section class="mt-28">
            <div
                class="flex flex-col items-center max-w-6xl mx-auto space-y-8 lg:flex-row-reverse lg:space-y-0 lg:space-x-8">
                <div class="flex-shrink-0 w-full lg:w-auto">
                    <img src="https://www.arielapp.co/assets/features/feature2/image.svg"
                        alt="Descripción de la imagen" class="w-full rounded-lg shadow-md lg:w-auto" />
                </div>
                <div class="flex-1 text-center lg:text-left">
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 text-sm font-medium text-blue-700 bg-blue-100 rounded-full">Redacta
                            Documentos</span>
                    </div>
                    <h3 class="mb-4 text-2xl font-semibold text-gray-900">Genera documentos legales personalizados,
                        claros
                        y estructurados</h3>
                    <p class="text-gray-700">Dile a Ariel qué documento necesitas y él lo redactará por ti en base a la
                        información que le proporciones. Desde contratos hasta escritos legales de cualquier tipo.</p>
                </div>
            </div>
        </section>

        <section class="mt-28">
            <div class="flex flex-col items-center max-w-6xl mx-auto space-y-8 lg:flex-row lg:space-y-0 lg:space-x-8">
                <div class="flex-shrink-0 w-full lg:w-auto">
                    <img src="https://www.arielapp.co/assets/features/feature3/image.svg"
                        alt="Descripción de la imagen" class="w-full rounded-lg shadow-md lg:w-auto" />
                </div>
                <div class="flex-1 text-center lg:text-left">
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 text-sm font-medium text-blue-700 bg-blue-100 rounded-full">Transcripciones
                            Inteligentes</span>
                    </div>
                    <h2 class="mb-4 text-3xl font-semibold text-gray-900">Convierte audios en transcripciones</h2>
                    <p class="text-gray-700">Precisas y detalladas. Estas transcripciones se integran fácilmente en tu
                        Biblioteca Personal para una gestión y análisis eficientes.</p>
                </div>
            </div>

            <div class="flex justify-center mt-24">
                <button class="py-3 font-bold text-white bg-blue-500 rounded px-14 hover:bg-blue-700">
                    Probar Gratis
                </button>
            </div>
        </section>
    </section>


    {{-- SECCION DE NORMAS --}}
    <section class="hidden mt-16 text-center lg:block">
        <div class="max-w-4xl mx-auto">
            <h2 class="mb-4 text-3xl font-sans text-gray-900 sm:text-4xl md:text-[50px]">
                Ariel cuenta con miles de normas, conceptos y jurisprudencia
            </h2>
            <div class="flex flex-wrap justify-center gap-4 mb-6 mt-14">
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Constitucional</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Internacional
                    Público</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Internacional
                    Privado</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Penal</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Financiero</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Comercial</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Disciplinario</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Fiscal</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Transicional</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Diversidad, Género e
                    Inclusión</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Administrativo</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Civil</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Tributario</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Familia</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Sociedades</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Laboral</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Aduanero</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Servicios
                    Públicos</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Propiedad
                    Intelectual</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">Deporte</span>
                <span class="px-4 py-2 text-gray-700 bg-white border border-black rounded-full">...</span>
            </div>
            <a href="#" class="text-blue-500 underline">Ver áreas de conocimiento</a>
        </div>
    </section>





    {{-- TESTIMONIOS --}}
    <section class="hidden m-40 lg:block">
        <div class="mb-8 text-center">
            <h1 class="mb-2 text-3xl font-bold">Historias de éxito</h1>
            <p class="text-gray-600">Testimonios de nuestros usuarios.</p>
        </div>

        <div class="relative w-full max-w-6xl py-8 mx-auto mt-8 overflow-visible" x-data="carousel()">
            <!-- Flecha izquierda -->
            <button @click="prev"
                class="absolute z-20 p-4 transform -translate-y-1/2 bg-gray-200 rounded-full shadow-lg left-4 top-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a1 1 0 01-.707-.293l-7-7a1 1 0 010-1.414l7-7a1 1 0 111.414 1.414L4.414 10l6.293 6.293A1 1 0 0110 18z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Contenedor del carrusel -->
            <div class="relative flex items-center justify-center">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <!-- Tarjetas de testimonios -->
                    <div class="absolute w-full max-w-xl p-8 transition-all duration-500 transform bg-white shadow-xl rounded-xl"
                        :class="{
                            'scale-100 opacity-100 z-20': activeIndex === index,
                            'scale-90 opacity-50 z-10': activeIndex !== index && (index === prevIndex() || index ===
                                nextIndex()),
                            'scale-75 opacity-25 z-0': activeIndex !== index && (index !== prevIndex() && index !==
                                nextIndex())
                        }"
                        :style="getStyle(index)">
                        <!-- Imagen del usuario -->
                        <div class="flex justify-center -mt-8">
                            <img class="w-24 h-24 border-4 border-white rounded-full shadow-lg"
                                :src="testimonial.image" alt="User">
                        </div>
                        <!-- Testimonio -->
                        <p class="mt-6 text-lg italic text-gray-700" x-text="testimonial.text"></p>
                        <!-- Nombre del usuario -->
                        <p class="mt-6 text-lg font-semibold text-gray-800" x-text="testimonial.name"></p>
                        <!-- Título o cargo -->
                        <p class="text-sm text-gray-500" x-text="testimonial.position"></p>
                    </div>
                </template>
            </div>

            <!-- Flecha derecha -->
            <button @click="next"
                class="absolute z-20 p-4 transform -translate-y-1/2 bg-gray-200 rounded-full shadow-lg right-4 top-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a1 1 0 00.707-.293l7-7a1 1 0 000-1.414l-7-7a1 1 0 10-1.414 1.414L15.586 10l-6.293 6.293A1 1 0 0010 18z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Texto debajo del carrusel -->
        <div class="relative w-full max-w-2xl py-8 mx-auto mt-48 overflow-visible">
            <div class="relative flex items-center justify-center">
                <div class="mb-4 text-center">
                    <p class="text-gray-400 md:text-[15px]">*Las opiniones aquí expuestas solamente comprometen el
                        criterio de quien las expresa y, no así, el de las entidades en las que trabajan o han
                        trabajado.</p>
                </div>
            </div>
        </div>

        <script>
            function carousel() {
                return {
                    activeIndex: 1,
                    testimonials: [{
                            image: '{{ asset('storage/imagenes/logo.svg') }}',
                            text: 'Me ha sido muy útil la herramienta al agilizar mi trabajo resolviendo inquietudes jurídicas de forma rápida,  con fuentes del derecho claramente identificables y a la mano en caso de que uno necesite ahondar más en el tema de consulta. La he utilizado para investigaciones en derecho corporativo, estatuto del consumidor habeas data entre otros.',
                            name: 'Nayeth Fayad Maria',
                            position: 'Secretaria General, Banco Serfinanza'
                        },
                        {
                            image: '{{ asset('storage/imagenes/pda-certified.svg') }}',
                            text: 'Ariel ha sido una herramienta muy útil para nuestro equipo en la investigación jurídica, para redacción de documentos y para emitir conceptos al contar con una gran base de datos actualizada, precisa y confiable, aumentado así la eficacia, la gestión del tiempo y de los casos. Utilizando la herramienta se elaboran conceptos más rigurosos y precisos.',
                            name: 'Ana María Alvarez',
                            position: 'Directora Ejecutiva'
                        },
                        {
                            image: '{{ asset('storage/imagenes/pda-certified.svg') }}',
                            text: 'Ariel ha sido de gran ayuda en la búsqueda rapida de legislación que como Ips estamos obligados a cumplir. Ademas que nos arroja respuestas en lenguaje sencillo y fácil de comprender para quienes no somos abogados y debemos tomar decisiones fundamentadas en normatividad vigente. Me ha sido útil en redacción de protocolos, respuestas a PQRS y en investigación de normas. ¡100% recomendada!',
                            name: 'Nayeth Fayad Maria',
                            position: 'Secretaria General, Banco Serfinanza'
                        },
                        {
                            image: '{{ asset('storage/imagenes/logo.svg') }}',
                            text: 'Ariel constituye un instrumento indispensable para agilizar las labores a cargo de la Gerencia de Servicios Jurídicos de la empresa. Ofrece información actualizada en materia doctrinal y jurisprudencial, así como una importante guía para la atención oportuna de conceptos, elaboración de contratos y acciones judiciales y procedimientos administrativos.',
                            name: 'Ana María Alvarez',
                            position: 'Directora Ejecutiva'
                        },
                    ],
                    next() {
                        this.activeIndex = (this.activeIndex + 1) % this.testimonials.length;
                    },
                    prev() {
                        this.activeIndex = (this.activeIndex - 1 + this.testimonials.length) % this.testimonials.length;
                    },
                    prevIndex() {
                        return (this.activeIndex - 1 + this.testimonials.length) % this.testimonials.length;
                    },
                    nextIndex() {
                        return (this.activeIndex + 1) % this.testimonials.length;
                    },
                    getStyle(index) {
                        const offset = 120;
                        if (index === this.activeIndex) {
                            return `transform: translateX(0px)`;
                        } else if (index === this.prevIndex()) {
                            return `transform: translateX(-${offset}px) scale(0.9)`;
                        } else if (index === this.nextIndex()) {
                            return `transform: translateX(${offset}px) scale(0.9)`;
                        } else {
                            return `transform: translateX(0px) scale(0.75)`;
                        }
                    }
                }
            }
        </script>
    </section>




    {{-- SECCION DE SEGURIDAD DE DATOS --}}
    <section class="my-16 md:my-24">
        <div class="max-w-xl px-4 mx-auto text-center md:px-8">
            <img src="{{ asset('storage/imagenes/shield.svg') }}" alt="Escudo de Seguridad"
                class="w-24 h-24 mx-auto md:w-40 md:h-40">
            <h2 class="mt-6 mb-4 text-2xl font-semibold md:text-4xl md:mt-8">Seguridad de Datos</h2>
            <p class="text-sm text-center text-gray-600 md:text-lg">
                Ariel cuenta con una avanzada política de trata de datos, garantizando la seguridad
                y protección de los documentos privados que decidas cargar a nuestra plataforma.
                Tus documentos nunca serán accesibles fuera de tu organización.
            </p>
        </div>
    </section>





    {{-- SECCION DE PREGUNTAS FRECUENTES  --}}
    <section class="px-4 mt-16 md:mt-24">
        <div class="max-w-2xl mx-auto mb-8 text-center">
            <h2 class="text-2xl font-bold md:text-3xl">Preguntas frecuentes</h2>
        </div>

        <div class="max-w-2xl mx-auto">
            <div x-data="{ open: null }">
                <!-- Pregunta 1 -->
                <div class="mb-2 border-b">
                    <button @click="open === 1 ? open = null : open = 1"
                        class="flex items-center justify-between w-full p-4 text-left bg-white rounded-lg shadow-md">
                        <span>¿Ariel puede reemplazar a mi abogado o equipo jurídico?</span>
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full"
                            x-text="open === 1 ? '-' : '+'"></span>
                    </button>
                    <div x-show="open === 1" class="overflow-hidden transition-all duration-500 ease-out"
                        x-bind:style="open === 1 ? 'max-height: 150px;' : 'max-height: 0;'">
                        <p class="p-4 text-gray-600">
                            Ariel no está diseñado para reemplazar a un abogado o equipo jurídico, sino para
                            complementar su
                            trabajo.
                        </p>
                    </div>
                </div>

                <!-- Pregunta 2 -->
                <div class="mb-2 border-b">
                    <button @click="open === 2 ? open = null : open = 2"
                        class="flex items-center justify-between w-full p-4 text-left bg-white rounded-lg shadow-md">
                        <span>¿Puedo hacerle cualquier consulta, en cualquier tipo de ley?</span>
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full"
                            x-text="open === 2 ? '-' : '+'"></span>
                    </button>
                    <div x-show="open === 2" class="overflow-hidden transition-all duration-700 ease-out"
                        x-bind:style="open === 2 ? 'max-height: 150px;' : 'max-height: 0;'">
                        <p class="p-4 text-gray-600">
                            Ariel está diseñado para responder a una amplia variedad de consultas legales, aunque
                            algunas
                            áreas legales específicas pueden requerir consulta directa con un abogado.
                        </p>
                    </div>
                </div>

                <!-- Pregunta 3 -->
                <div class="mb-2 border-b">
                    <button @click="open === 3 ? open = null : open = 3"
                        class="flex items-center justify-between w-full p-4 text-left bg-white rounded-lg shadow-md">
                        <span>¿Cuál es la diferencia entre Ariel y asistentes como ChatGPT?</span>
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full"
                            x-text="open === 3 ? '-' : '+'"></span>
                    </button>
                    <div x-show="open === 3" class="overflow-hidden transition-all duration-700 ease-out"
                        x-bind:style="open === 3 ? 'max-height: 150px;' : 'max-height: 0;'">
                        <p class="p-4 text-gray-600">
                            Ariel está especializado en el ámbito jurídico, ofreciendo respuestas más precisas y
                            relevantes
                            para consultas legales.
                        </p>
                    </div>
                </div>

                <!-- Pregunta 4 -->
                <div class="mb-2 border-b">
                    <button @click="open === 4 ? open = null : open = 4"
                        class="flex items-center justify-between w-full p-4 text-left bg-white rounded-lg shadow-md">
                        <span>¿Necesito ser abogado para utilizar ARIEL?</span>
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full"
                            x-text="open === 4 ? '-' : '+'"></span>
                    </button>
                    <div x-show="open === 4" class="overflow-hidden transition-all duration-700 ease-out"
                        x-bind:style="open === 4 ? 'max-height: 150px;' : 'max-height: 0;'">
                        <p class="p-4 text-gray-600">
                            No es necesario ser abogado para utilizar ARIEL, pero tener conocimiento básico del ámbito
                            legal
                            puede ser beneficioso.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- FOOTER --}}
    <footer class="py-12 bg-gray-100">
        <div class="max-w-6xl px-4 mx-auto">
            <div class="flex flex-wrap justify-between gap-8">
                <!-- Sección Logo y Descripción -->
                <div class="w-full mb-6 md:w-1/3 md:mb-0">
                    <img src="{{ asset('storage/imagenes/logo.svg') }}" alt="Logo Ariel"
                        class="mx-auto mb-6 w-36 md:mx-0">
                    <p class="text-base text-center text-gray-600 md:text-left md:text-lg lg:text-xl">
                        Ariel es el Asistente legal con IA que trae el conocimiento especializado a tu alcance.
                    </p>
                </div>

                <!-- Sección Producto -->
                <div class="w-full mb-6 md:w-1/4 md:mb-0">
                    <h2 class="hidden mb-4 text-sm font-semibold text-gray-700 lg:block ">PRODUCTO</h2>
                    <ul class="text-center md:text-left">
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Iniciar sesión</a>
                        </li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Probar Gratis</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Precios</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Solicitar
                                documentos</a>
                        </li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Contactar soporte</a>
                        </li>
                    </ul>
                </div>

                <!-- Sección Legal -->
                <div class="w-full md:w-1/4">
                    <h2 class="hidden mb-4 text-sm font-semibold text-gray-700 lg:block ">LEGAL</h2>
                    <ul class="text-center md:text-left">
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Política de
                                tratamiento de
                                datos</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Política
                                relacionamiento
                                con servidores públicos</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-gray-700">Términos y
                                condiciones</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-between gap-4 mt-8">
                <!-- Derechos reservados -->
                <div class="w-full text-center md:w-auto md:text-left">
                    <p class="text-sm text-gray-500">
                        <strong>2024 Ariel © - Todos los derechos reservados</strong>
                    </p>
                </div>

                <!-- Redes sociales -->
                <div class="flex justify-center w-full space-x-4 md:w-auto md:justify-end">
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-xing"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Asegúrate de incluir Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- En tu archivo Blade antes de cerrar el body -->
    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>
