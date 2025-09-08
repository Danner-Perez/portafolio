<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <title> Portafolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 scroll-smooth font-[Poppins]">


    <!-- Navbar -->
     

    <header class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <a href="#home" class="flex items-center space-x-3">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>

            <!-- Desktop menu -->
            <ul class="hidden md:flex space-x-6 font-medium text-gray-700">
                <li><a href="#home" class="hover:text-blue-600 transition">Inicio</a></li>
                <li><a href="#about" class="hover:text-blue-600 transition">Sobre mí</a></li>
                <li><a href="#projects" class="hover:text-blue-600 transition">Proyectos</a></li>
                <li><a href="#contact" class="hover:text-blue-600 transition">Contacto</a></li>
            </ul>

            <!-- Mobile menu icon -->
            <button id="menu-toggle" class="md:hidden text-2xl text-gray-700">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile dropdown menu -->
        <div id="mobile-menu" class="md:hidden px-6 pb-4 hidden">
            <ul class="flex flex-col space-y-2 text-gray-700 font-medium">
                <li><a href="#home" class="hover:text-blue-600">Inicio</a></li>
                <li><a href="#about" class="hover:text-blue-600">Sobre mí</a></li>
                <li><a href="#projects" class="hover:text-blue-600">Proyectos</a></li>
                <li><a href="#contact" class="hover:text-blue-600">Contacto</a></li>
            </ul>
        </div>
    </header>


    <main class="pt-24 px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-100 mt-10">
        <p class="text-sm">&copy; {{ date('Y') }} Mi Danny. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
