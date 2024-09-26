<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
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
<!-- component -->
<!-- full tailwind config using javascript -->
<!-- https://github.com/neurolinker/popice -->

<body class = "body bg-slate-300 dark:bg-[#0F172A]">

    <aside
        class = "fixed z-50 flex h-screen transition duration-1000 ease-in-out transform -translate-x-48 w-60 bg-slate-100 ">
        <!-- open sidebar button -->
        <div class = "max-toolbar translate-x-24 scale-x-0 w-full  transition transform ease-in duration-300 flex items-center justify-between  dark:border-[#0F172A] bg-slate-100  absolute top-2  h-12">

            <div class="flex items-center pl-4 space-x-2 ">
                <div>

                    <div onclick="setDark('light')"
                        class = "sun hidden text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
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
            class = "-right-0 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-[#1E293B] dark:hover:bg-blue-500 hover:bg-purple-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>
        <!-- MAX SIDEBAR-->
        <div class= "max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">

            {{-- Logo --}}
            <div class="mb-8 ml-9">
                <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg" alt="Logo Ariel"
                    class="w-40">
            </div>

            {{-- Consultas --}}
            <div
                class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                <div>
                    Consultas
                </div>
            </div>

            {{-- Transcripciones --}}
            <div
                class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <div>
                    Transcripciones
                </div>
            </div>




            <!-- Prueba gratis -->
            <div class="absolute left-0 w-full px-6 bottom-24">
                <div class="p-4 bg-white rounded-lg shadow">
                    <p class="text-sm text-gray-500">El tiempo de acceso gratis terminará dentro de 3 días.</p>
                    <button class="w-full px-4 py-2 mt-4 text-white bg-blue-500 rounded-md">Ver planes</button>
                </div>
            </div>
            <!-- Perfil de usuario -->
            <div class="absolute w-full px-6 bottom-4">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario"
                        class="w-10 h-10 mr-3 rounded-full">
                    <div>
                        <p class="font-medium text-gray-700">Arturo Vidal</p>
                        <p class="text-xs text-gray-500">cofosa7744@exweme.com</p>
                    </div>
                </div>
            </div>



        </div>
        <!-- MINI SIDEBAR-->
        <div class= "mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <div
                class= "hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
            </div>
            <div
                class= "hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>


            <div
                class= "absolute bottom-0 left-0 hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
            </div>





        </div>

    </aside>
    <!-- CONTENT -->
    <div class = "px-2 pt-2 pb-4 ml-12 duration-500 ease-in-out transform content md:px-5 ">







        {{-- Tarjeta d chat --}}
        <div class="flex flex-col items-center justify-center flex-1 pb-6 bg-white shadow-2xl logo rounded-2xl">

            <!-- Barra de navegación superior centrada y ocupando todo el ancho -->
            <div class="flex justify-center w-full py-2 bg-white border-b border-gray-300 rounded-t-3xl ">
                <div class="flex justify-center space-x-8">
                    <button id="legalTab"
                        class="px-6 py-2 font-medium text-gray-700 focus:outline-none hover:text-blue-500"
                        onclick="showTab('legal')">Legal</button>
                    <button id="empresarialTab"
                        class="px-6 py-2 font-medium text-gray-700 focus:outline-none hover:text-blue-500"
                        onclick="showTab('empresarial')">Empresarial</button>
                    <button id="redaccionTab"
                        class="px-6 py-2 font-medium text-gray-700 focus:outline-none hover:text-blue-500"
                        onclick="showTab('redaccion')">Redacción</button>
                </div>
            </div>



            <!-- Contenido del chat dinámico -->
            <div class="w-full max-w-3xl mt-6 text-center" id="chatContent">
                <!-- Aquí se mostrará el contenido dinámico basado en el tab seleccionado -->
                <div id="legal" class="tabContent">
                    <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg"
                        alt="Imagen Ariel" class="mx-auto mb-6 w-80">
                    <h1 class="text-4xl font-bold text-gray-800">Ariel - Asistente Legal</h1>
                    <p class="mt-4 text-lg text-gray-600">Analiza miles de normas, jurisprudencia y doctrina legal
                        especializada.
                        No te limites a hacer preguntas, formula casos y pide que analice situaciones de la vida real.
                    </p>
                </div>
                <div id="empresarial" class="hidden tabContent">
                    <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg"
                        alt="Imagen Ariel" class="mx-auto mb-6 w-80">
                    <h1 class="text-4xl font-bold text-gray-800">Ariel - Asistente Empresarial</h1>
                    <p class="mt-4 text-lg text-gray-600">Brinda soporte en temas empresariales como estrategia,
                        operaciones, y
                        cumplimiento normativo. Puedes realizar preguntas específicas sobre la gestión empresarial y
                        recibir
                        asistencia inmediata.</p>
                </div>
                <div id="redaccion" class="hidden tabContent">
                    <img src="https://app.proderi.com/img/Logo%20Alena%20-%201.svg"
                        alt="Imagen Ariel" class="mx-auto mb-6 w-80">
                    <h1 class="text-4xl font-bold text-gray-800">Ariel - Asistente en Redacción</h1>
                    <p class="mt-4 text-lg text-gray-600">Asiste en la creación y edición de documentos jurídicos,
                        empresariales o
                        técnicos. Solicita revisiones de texto o genera nuevos documentos en base a tus necesidades.</p>
                </div>


                <div id="preguntas" class="flex flex-col mt-6 space-y-4">
                    <button class="px-4 py-2 text-black border border-cyan-500 rounded-3xl">¿Qué diferencia a Ariel de
                        otros chatbots inteligentes?</button>
                    <button class="px-4 py-2 text-black border border-cyan-500 rounded-3xl">¿Cómo puedo empezar a usar
                        Ariel?</button>
                    <button class="px-4 py-2 text-black border border-cyan-500 rounded-3xl">¿En qué áreas del derecho
                        puede asistirme Ariel?</button>

                </div>




                <!-- Caja de preguntas -->
                <div class="w-full max-w-2xl mt-10 ml-10">
                    <div class="flex items-center px-4 py-2 bg-white border-2 rounded-lg ">
                        <input type="text" placeholder="Empieza a escribir tu pregunta aquí"
                               class="w-full px-2 py-2 border-none focus:outline-none">
                        <button class="ml-4 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Script para el cambio de tabs -->
            <script>
                function showTab(tab) {
                    // Ocultar todo el contenido
                    document.querySelectorAll('.tabContent').forEach(function(content) {
                        content.classList.add('hidden');
                    });
                    // Mostrar el contenido seleccionado
                    document.getElementById(tab).classList.remove('hidden');
                }
            </script>








        </div>
    </div>

          {{-- SCRIPT DE SIDEBAR --}}
          <script>
            const sidebar = document.querySelector("aside");
            const maxSidebar = document.querySelector(".max")
            const miniSidebar = document.querySelector(".mini")
            const roundout = document.querySelector(".roundout")
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


        <!-- JavaScript para cambiar el contenido dinámico -->
        <script>
            function showTab(tab) {
                // Ocultar todos los contenidos de las pestañas
                document.querySelectorAll('.tabContent').forEach(content => {
                    content.classList.add('hidden');
                });

                // Mostrar el contenido correspondiente a la pestaña seleccionada
                document.getElementById(tab).classList.remove('hidden');

                // Resaltar la pestaña activa
                document.querySelectorAll('button').forEach(button => {
                    button.classList.remove('bg-gray-200');
                });
                document.getElementById(tab + 'Tab').classList.add('bg-gray-200');
            }

            // Mostrar la pestaña "Legal" al inicio
            showTab('legal');
        </script>

    <script>
        const sidebar = document.querySelector("aside");
        const maxSidebar = document.querySelector(".max")
        const miniSidebar = document.querySelector(".mini")
        const roundout = document.querySelector(".roundout")
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

</html>
