<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }

        /* Transición para mostrar/ocultar el sidebar */
        .sidebar {
            transition: transform 0.3s ease;
        }

        /* Estado cerrado del sidebar */
        .closed {
            transform: translateX(-100%);
        }

    </style>
</head>

<body class="body bg-white dark:bg-[#0F172A]">

    <aside class="fixed z-50 hidden h-screen transition duration-1000 ease-in-out transform -translate-x-48 w-60 bg-slate-100 md:flex">
     <!-- open sidebar button -->
        <div
            class="max-toolbar translate-x-24 scale-x-0 w-full transition transform ease-in duration-300 flex items-center justify-between dark:border-[#0F172A] bg-slate-100 absolute top-2 h-12">
            <div class="flex items-center pl-4 space-x-2">
                <div>
                    <div onclick="setDark('light')"
                        class="sun hidden text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div onclick="openNav()"
            class="-right-0 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-[#1E293B] dark:hover:bg-blue-500 hover:bg-purple-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>
        <!-- MAX SIDEBAR-->
        <div class="max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
            {{-- Logo --}}
            <div class="mb-8 ml-9">
                <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="Logo Ariel" class="w-40">
            </div>
            {{-- Consultas --}}
            <div
                class="hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                <div>Consultas</div>
            </div>
        {{-- Transcripciones --}}
        <div
            class="hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
            <div>Transcripciones</div>
        </div>
        <!-- Prueba gratis -->
        {{-- <div class="absolute left-0 w-full px-6 bottom-24">
            <div class="p-4 bg-white rounded-lg shadow">
                <p class="text-sm text-gray-500">El tiempo de acceso gratis terminará dentro de 3 días.</p>
                <button class="w-full px-4 py-2 mt-4 text-white bg-blue-500 rounded-md">Ver planes</button>

            </div>
        </div> --}}
        <!-- Perfil de usuario -->
        <div class="absolute w-full px-6 bottom-4">
            <div class="flex items-center">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario"
                    class="w-10 h-10 mr-3 rounded-full">
                <div>
                    <p class="font-medium text-gray-700">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full px-4 py-2 mt-4 text-white bg-blue-500 rounded-md">Cerrar Sesion</button>

            </form>
        </div>
        </div>
        <!-- MINI SIDEBAR-->
        <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3  transform ease-in-out duration-300 flex">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
            </div>
            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3  transform ease-in-out duration-300 flex">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <div
                class="absolute bottom-0 left-0 hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3  transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
            </div>
        </div>
    </aside>


    <header>
        <nav class="relative flex justify-between px-4 py-4 bg-white place-items-end">



            <br>
            <div class="lg:hidden">
                <button class="flex items-end p-3 text-black navbar-burger">
                    <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>

            <div class="relative z-50 hidden navbar-menu">


                <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
                <nav
                    class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-white border-r">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#">
                            <a href="javascript:void(0)"><img src="{{ asset('storage/imagenes/logo.svg') }}" alt="logo"
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
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario"
                                    class="w-10 h-10 ml-10 mr-3 rounded-full">
                                <div>
                                    <p class="font-medium text-gray-700">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="w-full px-4 py-2 mt-4 font-semibold leading-loose text-center text-white bg-blue-600 rounded-xl">Cerrar Sesion</button>

                            </form>


                        </div>
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright © 2024</span>
                        </p>
                    </div>

                    <div class="absolute w-full px-6 bottom-4">


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

        </nav>






    </header>




    <!-- CONTENT -->
    <div class="flex flex-col items-center justify-start min-h-screen overflow-hidden bg-white shadow-2xl content logo">
        <!-- Contenedor principal que ocupa todo el espacio -->
        <div class="flex flex-col items-center flex-grow w-full h-full overflow-y-auto" id="mainContainer">
            <!-- Contenedor de conversación con SimpleBar -->


            <!-- Contenido del chat dinámico -->

            <div class="w-full max-w-4xl mt-24 text-center" id="chatContent">
                <div id="legal" class="tabContent">
                    <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="Imagen Ariel" class="w-40 mx-auto mb-4">
                    <h1 class="text-2xl font-bold text-gray-800">Alena - Asistente Legal</h1>
                    <p class="mt-2 text-base text-gray-600">Analiza miles de normas, jurisprudencia y doctrina legal
                        especializada. No te limites a hacer preguntas, formula casos y pide que analice situaciones de
                        la vida real.</p>
                </div>

                <div id="preguntas" class="flex flex-col mt-4 space-y-2">
                    <button class="px-2 py-1 text-black border border-cyan-500 rounded-3xl">¿Qué diferencia a Alena de
                        otros chatbots inteligentes?</button>
                    <button class="px-2 py-1 text-black border border-cyan-500 rounded-3xl">¿Cómo puedo empezar a usar
                        Alena?</button>
                    <button class="px-2 py-1 text-black border border-cyan-500 rounded-3xl">¿En qué áreas del derecho
                        puede asistirme Alena?</button>
                </div>
            </div>

            <div class="flex-grow w-full max-w-4xl pt-20 overflow-y-auto pb-36" id="conversationContainer" data-simplebar>
                <div class="w-full conversation" id="conversation"></div>
            </div>
        </div>

        <!-- Caja de entrada de mensajes estilizada -->
        <div class="fixed bottom-0 w-full max-w-full px-2 mx-auto mb-4 sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-4xl" id="chatBox">
            <div class="flex items-end w-full bg-gray-800 shadow-lg rounded-2xl focus-within:ring-2 focus-within:ring-blue-500">
                <textarea placeholder="Type your message here..." class="flex-grow h-16 px-4 py-5 text-white bg-gray-800 border-none resize-none focus:outline-none rounded-l-2xl max-h-32" id="userMessage" required></textarea>
                <button class="flex items-center justify-center p-3 mb-2 mr-1 text-white bg-gray-700 rounded-md hover:bg-gray-600" onclick="sendMessage()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const textarea = document.getElementById('userMessage');
                const conversationContainer = document.querySelector('[data-simplebar]');
                const conversation = document.getElementById('conversation');

                // Inicializar SimpleBar
                const simpleBarInstance = new SimpleBar(conversationContainer);

                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    const newHeight = Math.min(this.scrollHeight, 128);
                    this.style.height = newHeight + 'px';
                });

                function scrollToBottom() {
                    const scrollElement = simpleBarInstance.getScrollElement();
                    scrollElement.scrollTop = scrollElement.scrollHeight;
                }

                function formatBotResponse(response) {
                    const lines = response.split('\n');
                    let formattedResponse = '';

                    lines.forEach(line => {
                        if (line.match(/^\d+\./)) {
                            // Detecta las listas numeradas
                            formattedResponse += `<li>${line.substring(line.indexOf(' ') + 1).trim()}</li>`;
                        } else if (line.startsWith('Preguntas de seguimiento:')) {
                            formattedResponse += `<h4 class="mt-4 font-bold">${line.trim()}</h4>`;
                        } else {
                            formattedResponse += `<p>${line.trim()}</p>`;
                        }
                    });

                    if (formattedResponse.includes('<li>')) {
                        formattedResponse = `<ol class="ml-6 list-decimal">${formattedResponse}</ol>`;
                    }

                    return `
                        <div class="flex justify-start mb-2">
                            <div class="flex inline-flex items-start p-2 text-black bg-gray-300 rounded-lg">
                                <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="Bot Icon" class="w-8 h-8 mr-2">
                                <div>${formattedResponse}</div>
                            </div>
                        </div>
                    `;
                }

                function sendMessage() {
                    const userMessage = document.getElementById('userMessage').value;
                    const chatContent = document.getElementById('chatContent');
                    chatContent.style.display = 'none';
                    conversationContainer.style.display = 'flex';

                    conversation.innerHTML +=
                        '<div class="flex justify-end mb-2"><div class="max-w-xs p-2 text-white bg-blue-500 rounded-lg"><strong>Usuario:</strong> ' +
                        userMessage + '</div></div>';

                    const typingMessage = document.createElement('div');
                    typingMessage.className = 'flex justify-start mb-2 typing';
                    typingMessage.innerHTML =
                        '<div class="flex inline-flex items-start p-2 text-black bg-gray-300 rounded-lg"><img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="Bot Icon" class="w-8 h-8 mr-2"><div id="typingIndicator">Escribiendo...</div></div>';
                    conversation.appendChild(typingMessage);

                    scrollToBottom(); // Asegúrate de hacer scroll justo después de agregar la respuesta del usuario

                    document.getElementById('userMessage').value = '';
                    fetch('/chat', {
                            method: 'POST'
                            , headers: {
                                'Content-Type': 'application/json'
                                , 'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                            , body: JSON.stringify({
                                message: userMessage
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            conversation.removeChild(typingMessage);

                            // Formatear y mostrar la respuesta del bot
                            const formattedResponse = formatBotResponse(data.response);
                            conversation.innerHTML += formattedResponse;


                            scrollToBottom(); // Hacer scroll después de que la respuesta del bot se haya añadido
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            conversation.removeChild(typingMessage);
                        });
                }

                document.getElementById('userMessage').addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        sendMessage();
                    }
                });
            });

        </script>

        <!-- JavaScript para cambiar el contenido dinámico -->
        <script>
            const sidebar = document.querySelector("aside");
            const maxSidebar = document.querySelector(".max")
            const miniSidebar = document.querySelector(".mini")
            const maxToolbar = document.querySelector(".max-toolbar")
            const logo = document.querySelector('.logo')
            const content = document.querySelector('.content')
            const moon = document.querySelector(".moon")
            const sun = document.querySelector(".sun")

            function setDark(val) {
                if (val === "dark") {
                    document.documentElement.classList.add('dark')
                    moon.classList.add("hidden")
                    sun.classList.remove("hidden")
                } else {
                    document.documentElement.classList.remove('dark')
                    sun.classList.add("hidden")
                    moon.classList.remove("hidden")
                }
            }

            function openNav() {
                if (sidebar.classList.contains('-translate-x-48')) {
                    // max sidebar
                    sidebar.classList.remove("-translate-x-48")
                    sidebar.classList.add("translate-x-none")
                    maxSidebar.classList.remove("hidden")
                    maxSidebar.classList.add("flex")
                    miniSidebar.classList.remove("flex")
                    miniSidebar.classList.add("hidden")
                    maxToolbar.classList.add("translate-x-0")
                    maxToolbar.classList.remove("translate-x-24", "scale-x-0")
                    logo.classList.remove("ml-12")
                    content.classList.remove("ml-12")
                    content.classList.add("ml-12", "md:ml-60")
                } else {
                    // mini sidebar
                    sidebar.classList.add("-translate-x-48")
                    sidebar.classList.remove("translate-x-none")
                    maxSidebar.classList.add("hidden")
                    maxSidebar.classList.remove("flex")
                    miniSidebar.classList.add("flex")
                    miniSidebar.classList.remove("hidden")
                    maxToolbar.classList.add("translate-x-24", "scale-x-0")
                    maxToolbar.classList.remove("translate-x-0")
                    logo.classList.add('ml-12')
                    content.classList.remove("ml-12", "md:ml-60")
                    content.classList.add("ml-12")
                }
            }

        </script>

</body>

</html>
