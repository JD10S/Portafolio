<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeffer Doria - Fullstack PHP Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/devicons@1.8.0/devicon.min.css">
</head>
<body class="bg-gray-900 text-gray-100" style="font-family: 'Inter', sans-serif;">

    
    <header class="fixed top-0 left-0 w-full bg-gray-900/90 backdrop-blur-md border-b border-gray-800 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-blue-500">Jeffer Doria</a>
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#acerca" class="text-gray-300 hover:text-blue-400 transition">Acerca de</a>
                <a href="#proyectos" class="text-gray-300 hover:text-blue-400 transition">Proyectos</a>
                <a href="#experiencia" class="text-gray-300 hover:text-blue-400 transition">Experiencia</a>
                <a href="#contacto" class="text-gray-300 hover:text-blue-400 transition">Contacto</a>
            </nav>
            <a href="{{ asset('cv/JefferDoriaCV.pdf') }}" download
               class="bg-blue-600 text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-blue-700 transition shadow-md hidden md:block">
                Descargar CV
            </a>
        </div>
    </header>

 
    <section class="min-h-screen flex items-center px-6 pt-20">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight">
                    Fullstack PHP Developer
                </h1>
                <p class="text-lg text-gray-400 mb-8 leading-relaxed max-w-xl">
                    Creando soluciones web modernas y eficientes desde el front-end hasta el back-end.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#proyectos" class="bg-blue-600 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-700 transition shadow-lg">
                        Ver Proyectos
                    </a>
                    <a href="#contacto" class="border border-gray-700 text-gray-300 px-6 py-3 rounded-full font-medium hover:bg-gray-800 transition">
                        Contáctame
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-gray-700 rounded-full blur-3xl opacity-60 scale-110"></div>
                    <img src="https://via.placeholder.com/300" alt="Jeffer Doria"
                         class="relative w-72 h-72 rounded-full object-cover border-8 border-gray-900 shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    
    <section id="acerca" class="py-24 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-8">Acerca de Mí</h2>
            <p class="text-gray-300 leading-relaxed mb-10 text-lg">
                Soy un apasionado desarrollador con experiencia en la creación de aplicaciones web robustas y escalables...
            </p>
            
        </div>
    </section>

 

    
    <style>
        .preserve-3d { transform-style: preserve-3d; }
        .rotate-y-12 { transform: rotateY(12deg); }
        .backface-hidden { backface-visibility: hidden; }
    </style>

</body>
</html>