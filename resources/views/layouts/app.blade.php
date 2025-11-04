{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jeffer Doria - Fullstack Developer')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/skillicons-dev/skill-icons@latest/skill-icons.min.css">
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen" style="font-family: 'Inter', sans-serif;">
    
    @yield('content')

    <!-- 3D CSS -->
    <style>
        .preserve-3d { transform-style: preserve-3d; }
        .rotate-y-12 { transform: rotateY(12deg); }
        .backface-hidden { backface-visibility: hidden; }
    </style>
</body>
</html>