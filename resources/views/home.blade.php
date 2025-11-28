@extends('layouts.app')

@section('content')

{{-- Home --}}
<div class="absolute inset-0 z-0 overflow-hidden">
    <video autoplay muted loop playsinline class="w-full h-full object-cover brightness-75">
        <source src="{{ asset('videos/bg.mp4') }}" type="video/mp4">
        Tu navegador no soporta el video.
    </video>
</div>
<div id="particles-js" class="absolute inset-0 -z-10"></div>

<section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-center bg-white px-6 py-12 gap-10">

    {{-- Columna izquierda --}}
    
    <div class="text-center md:text-left max-w-xl">
        <p class="text-sm uppercase tracking-wide text-gray-500 mb-2">¡Hola mundo!</p>

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Hi, I'm <span class="text-cyan-500 typed-name" data-name="{{ $about['name'] }}"></span>
        </h1>

        <p class="text-2xl font-semibold text-black mb-4">
            <span class="typed-role"></span>
        </p>

        <p class="text-gray-600 text-lg mb-6">
            {{ $about['description'] }}
        </p>

        {{-- Encuéntrame aquí --}}
        <div class="mb-6">
            <h2 class="text-sm font-semibold text-gray-700 uppercase mb-2">Encuéntrame aquí</h2>
            <div class="flex justify-center md:justify-start gap-4">
                <a href="https://github.com/" target="_blank" class="text-gray-700 hover:text-black text-2xl">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://linkedin.com/" target="_blank" class="text-blue-700 hover:text-blue-900 text-2xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://facebook.com/" target="_blank" class="text-blue-600 hover:text-blue-800 text-2xl">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>

        {{-- Aprendiendo --}}
        <div>
            <h2 class="text-sm font-semibold text-gray-700 uppercase mb-2">Aprendiendo</h2>
            <div class="flex justify-center md:justify-start gap-5">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" 
         alt="Laravel Logo" class="w-10 h-10">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" 
         alt="Python Logo" class="w-10 h-10">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" 
         alt="JavaScript Logo" class="w-10 h-10">
</div>



        </div>
    </div>

    {{-- Columna derecha: imagen --}}
    <div class="mt-10 md:mt-0 max-w-md">
        <img src="{{ asset('storage/images/dev.svg') }}" alt="Desarrollador" class="w-full h-auto">
    </div>

</section>



{{-- Sobre mí --}}
<section id="about" class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-600 mb-4">Sobre mí</h2>
        <p class="mb-6">{{ $about['description'] }}</p>
        <h3 class="text-xl font-semibold mb-2">Habilidades</h3>
        <ul class="flex flex-wrap justify-center gap-4 text-sm">
            @foreach ($skills as $skill)
                <li class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</section>

{{-- Proyectos --}}
<section id="projects" class="py-16">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-600 mb-8">Proyectos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <div class="border rounded-lg p-4 shadow hover:shadow-lg transition">
                    <img src="{{ asset('storage/images/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-40 object-cover rounded">
                    <h3 class="text-xl font-semibold mt-4">{{ $project['title'] }}</h3>
                    <p class="text-sm mt-2">{{ $project['description'] }}</p>
                    <a href="{{ $project['link'] }}" target="_blank" class="text-blue-500 mt-2 inline-block">Ver más</a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contacto --}}
<section id="contact" class="py-16 bg-gray-50">
    <div class="max-w-xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-600 mb-6">Contacto</h2>
        @if(session('success'))
            <p class="text-green-600 mb-4">{{ session('success') }}</p>
        @endif
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4 text-left">
            @csrf
            <div>
                <label for="nombre" class="block text-sm font-medium">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium">Correo</label>
                <input type="email" name="email" id="email" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div>
                <label for="mensaje" class="block text-sm font-medium">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="4" class="w-full border px-3 py-2 rounded" required></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Enviar</button>
        </form>
    </div>
</section>

@endsection
