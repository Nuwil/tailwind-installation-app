<x-app-layout :title="'Home - Tailwind Notes'">
    <section class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 px-6 py-16 text-white shadow-2xl sm:px-10 lg:px-14">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(56,189,248,0.25),_transparent_30%),radial-gradient(circle_at_bottom_right,_rgba(59,130,246,0.18),_transparent_25%)]"></div>
        <div class="relative mx-auto max-w-4xl text-center">
            <p class="mb-4 inline-flex rounded-full bg-slate-700/70 px-4 py-2 text-sm uppercase tracking-[0.3em] text-sky-300">Modern notes & pages</p>
            <h1 class="text-4xl font-semibold tracking-tight sm:text-5xl">A clean Laravel landing page with productivity built in.</h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-200">Create notes, explore the app, and enjoy a polished UI designed for clarity and flow.</p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/20 transition hover:bg-sky-400">View Notes</a>
                <a href="{{ route('about') }}" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-7 py-3 text-sm font-semibold text-white transition hover:border-white hover:bg-white/15">Learn More</a>
            </div>
        </div>
    </section>

    <section class="mt-12 grid gap-6 lg:grid-cols-3">
        <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
            <span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">Fast setup</span>
            <h2 class="mt-5 text-2xl font-semibold text-slate-900">Ready in minutes</h2>
            <p class="mt-3 text-slate-600">A simple, modern experience with Tailwind and Laravel for any small project.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-800">Built for clarity</span>
            <h2 class="mt-5 text-2xl font-semibold text-slate-900">Easy navigation</h2>
            <p class="mt-3 text-slate-600">A focused layout that guides users through your app without clutter.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
            <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-sm font-semibold text-emerald-700">Interactive</span>
            <h2 class="mt-5 text-2xl font-semibold text-slate-900">Smart interactions</h2>
            <p class="mt-3 text-slate-600">Subtle animations and responsive layouts make every page feel premium.</p>
        </article>
    </section>

    <section class="mt-12 grid gap-8 lg:grid-cols-2">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
            <h3 class="text-xl font-semibold text-slate-900">Your next idea starts here</h3>
            <p class="mt-4 text-slate-600">Explore the notes manager and keep your thoughts organized in a calm, readable interface.</p>
            <ul class="mt-6 space-y-3 text-slate-600 sm:mt-8">
                <li class="flex items-start gap-3"><span class="mt-1 h-2.5 w-2.5 rounded-full bg-slate-900"></span>Clear page structure for fast browsing.</li>
                <li class="flex items-start gap-3"><span class="mt-1 h-2.5 w-2.5 rounded-full bg-slate-900"></span>Responsive hero section with strong CTA.</li>
                <li class="flex items-start gap-3"><span class="mt-1 h-2.5 w-2.5 rounded-full bg-slate-900"></span>Simple note management and easy page access.</li>
            </ul>
        </div>
        <div class="rounded-3xl border border-slate-200 bg-slate-950 p-8 text-white shadow-sm">
            <h3 class="text-xl font-semibold">A better landing experience</h3>
            <p class="mt-4 text-slate-300">This page is designed to feel modern, spacious, and professional, while staying light and fast.</p>
            <div class="mt-6 space-y-3">
                <div class="rounded-3xl bg-slate-900/80 p-5">
                    <p class="text-sm uppercase tracking-[0.2em] text-sky-300">Designed for</p>
                    <p class="mt-3 text-lg font-medium">Creators, builders, small teams.</p>
                </div>
                <div class="rounded-3xl bg-slate-900/80 p-5">
                    <p class="text-sm uppercase tracking-[0.2em] text-emerald-300">Fast to use</p>
                    <p class="mt-3 text-lg font-medium">Minimal setup, maximum polish.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
