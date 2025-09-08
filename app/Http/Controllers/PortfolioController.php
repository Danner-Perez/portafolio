<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    // Datos reutilizables
    private $about = [
        'name' => 'Danner',
        'description' => 'Desarrollador web especializado en Laravel, JavaScript y diseño moderno. Me apasiona crear experiencias digitales interactivas y eficientes.',
    ];

    private $skills = [
        'Laravel', 'JavaScript', 'Tailwind CSS', 'React', 'Git', 'HTML', 'CSS'
    ];

    private $projects = [
        [
            'title' => 'Sistema de Restaurante',
            'description' => 'Aplicación web completa con Laravel y Vue, roles, pedidos, y carrito.',
            'image' => 'restaurante.jpg',
            'link' => 'https://github.com/tuusuario/restaurante',
        ],
        [
            'title' => 'Landing Page Animada',
            'description' => 'Landing moderna creada con Tailwind CSS y animaciones JavaScript.',
            'image' => 'landing.png',
            'link' => 'https://github.com/tuusuario/landing-page',
        ],
        [
            'title' => 'Blog Personal',
            'description' => 'Blog creado con Laravel y Markdown para contenidos y publicaciones.',
            'image' => 'blog.jpeg',
            'link' => 'https://github.com/tuusuario/blog-laravel',
        ],
    ];

    public function home()
    {
        return view('home', [
            'about' => $this->about,
            'skills' => $this->skills,
            'projects' => $this->projects,
        ]);
    }



    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'mensaje' => 'required|string|max:1000',
        ]);

        // Aquí podrías usar Mail::send(...) si configuras correo
        return redirect()->route('contact')->with('success', '¡Mensaje enviado correctamente!');
    }
}
