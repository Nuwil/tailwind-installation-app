<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tailwind Notes' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
    <div class="min-h-screen bg-slate-50">
        <header class="border-b border-slate-200 bg-white shadow-sm">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="text-lg font-semibold text-slate-900">Tailwind Notes</a>
                <nav class="flex flex-wrap items-center gap-4 text-sm font-medium text-slate-600">
                    <a href="{{ route('home') }}" class="transition hover:text-slate-900">Home</a>
                    <a href="{{ route('about') }}" class="transition hover:text-slate-900">About</a>
                    <a href="{{ route('contact') }}" class="transition hover:text-slate-900">Contact</a>
                    <a href="{{ route('notes.index') }}" class="rounded-full bg-slate-900 px-4 py-2 text-white transition hover:bg-slate-700">Notes</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>

        <footer class="border-t border-slate-200 bg-white py-6">
            <div class="mx-auto max-w-7xl px-4 text-center text-sm text-slate-500 sm:px-6">
                Built with Laravel and Tailwind, crafted for clarity and ease.
            </div>
        </footer>
    </div>
</body>
</html>
