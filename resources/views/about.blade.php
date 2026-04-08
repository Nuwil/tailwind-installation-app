<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center text-blue-600">About Us</h1>
        <p class="mt-4 text-gray-700 text-center">Learn more about our company and mission.</p>
    </div>
    <div class="mt-8">
            <a href="{{ route('home') }}" class="text-sm text-blue-600 hover:underline">Back to home</a>
    </div>
</body>
</html>