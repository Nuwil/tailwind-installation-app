<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tailwind Notes' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top_left,_rgba(56,189,248,0.14),transparent_16%),radial-gradient(circle_at_bottom_right,_rgba(168,85,247,0.1),transparent_20%)]">
        <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/90 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="text-lg font-semibold tracking-tight text-white">Tailwind Notes</a>
                <nav class="flex flex-wrap items-center gap-3 text-sm font-semibold text-slate-300">
                    <a href="{{ route('home') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10 hover:text-white">Home</a>
                    <a href="{{ route('about') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10 hover:text-white">About</a>
                    <a href="{{ route('contact') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10 hover:text-white">Contact</a>
                    <a href="{{ route('notes.index') }}" class="rounded-full bg-sky-500 px-4 py-2 text-white transition hover:bg-sky-400">Notes</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>

        <footer class="border-t border-white/10 bg-slate-950/90 py-6">
            <div class="mx-auto max-w-7xl px-4 text-center text-sm text-slate-500 sm:px-6">
                Built with Laravel and Tailwind for a clean, modern experience.
            </div>
        </footer>
    </div>
</body>
</html>
