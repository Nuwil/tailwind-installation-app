<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600">Hello, Laravel + Tailwind!</h1>
        <p class="mt-4 text-gray-600">Routes and Tailwind CSS are working.</p>
        <a href="{{ route('notes.index') }}" class="mt-6 inline-block px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700">Go to Notes CRUD</a>
    </div>
</body>
</html>