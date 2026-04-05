<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Noel Gaddi - Full Stack Developer')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">NG</h1>
            <ul class="flex gap-8">
                <li><a href="#about" class="hover:text-blue-600 transition">About</a></li>
                <li><a href="#skills" class="hover:text-blue-600 transition">Skills</a></li>
                <li><a href="#education" class="hover:text-blue-600 transition">Education</a></li>
                <li><a href="#projects" class="hover:text-blue-600 transition">Projects</a></li>
                <li><a href="#contact" class="hover:text-blue-600 transition">Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 mt-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="mb-4">&copy; 2026 Noel J. Gaddi. All rights reserved.</p>
            <div class="flex justify-center gap-4">
                <a href="https://www.facebook.com/noel.gaddi.773" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="https://x.com/NoelGaddi" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
                <a href="https://www.instagram.com/nuwil._/" target="_blank" rel="noopener noreferrer" class="hover:text-pink-400 transition">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/noel-jugo-gaddi-391a29333/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 transition">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="https://github.com/Nuwil" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition">
                    <i class="fab fa-github text-2xl"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
