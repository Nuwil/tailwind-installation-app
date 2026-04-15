<x-app-layout :title="'Home - Tailwind Notes'">
    <section class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-slate-900/95 px-6 py-16 shadow-2xl shadow-slate-950/20 sm:px-10 lg:px-14">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(56,189,248,0.22),transparent_28%),radial-gradient(circle_at_bottom_right,_rgba(168,85,247,0.16),transparent_24%)]"></div>
        <div class="relative mx-auto max-w-4xl text-center">
            <span class="inline-flex rounded-full bg-slate-800 px-4 py-2 text-xs uppercase tracking-[0.35em] text-sky-300">Modern web experience</span>
            <h1 class="mt-8 text-5xl font-semibold tracking-tight text-white sm:text-6xl">A premium landing experience for notes and ideas.</h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-300">Designed to feel light, fast, and polished with soft gradients, spacious layouts, and modern UI patterns.</p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/20 transition hover:bg-sky-400">View Notes</a>
                <a href="{{ route('about') }}" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/5 px-7 py-3 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10">Learn more</a>
            </div>
        </div>
    </section>

    <section class="mt-12 grid gap-6 lg:grid-cols-3">
        <article class="rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-xl shadow-slate-950/40 transition hover:-translate-y-1 hover:border-sky-500/40">
            <h2 class="text-xl font-semibold text-white">Fast setup</h2>
            <p class="mt-4 text-slate-400">Start with a clean structure and build your notes app with confidence.</p>
        </article>
        <article class="rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-xl shadow-slate-950/40 transition hover:-translate-y-1 hover:border-fuchsia-500/40">
            <h2 class="text-xl font-semibold text-white">Polished styling</h2>
            <p class="mt-4 text-slate-400">Modern spacing, subtle shadows, and refined typography for a premium feel.</p>
        </article>
        <article class="rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-xl shadow-slate-950/40 transition hover:-translate-y-1 hover:border-emerald-500/40">
            <h2 class="text-xl font-semibold text-white">Responsive design</h2>
            <p class="mt-4 text-slate-400">Layouts adapt gracefully across devices for a seamless user experience.</p>
        </article>
    </section>

    <section class="mt-12 grid gap-8 lg:grid-cols-2">
        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/20 backdrop-blur-xl">
            <h2 class="text-3xl font-semibold text-white">Bring your ideas to life.</h2>
            <p class="mt-5 text-slate-300">A thoughtful starting point for a notes-driven app, with a stylish homepage, clear navigation, and an inviting interface.</p>
            <ul class="mt-8 space-y-4 text-slate-400">
                <li class="flex items-start gap-3"><span class="mt-1 h-2.5 w-2.5 rounded-full bg-sky-400"></span>Elevated hero section with crisp CTA buttons.</li>
                <li class="flex items-start gap-3"><span class="mt-1 h-2.5 w-2.5 rounded-full bg-fuchsia-400"></span>Support pages that feel consistent and modern.</li>
                <li class="flex items-start gap-3"><span class="mt-1 h-2.5 w-2.5 rounded-full bg-emerald-400"></span>Notes pages designed for readability and speed.</li>
            </ul>
        </div>
        <div class="rounded-[2rem] border border-white/10 bg-slate-900/85 p-8 shadow-2xl shadow-slate-950/20">
            <h3 class="text-2xl font-semibold text-white">Designed for action</h3>
            <p class="mt-5 text-slate-400">Use this app as a base for a modern web project and refine it with your own brand voice.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-950/70 p-5">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Focus</p>
                    <p class="mt-3 text-white">Clean content-first layouts.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-5">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Speed</p>
                    <p class="mt-3 text-white">Fast loading with minimal overhead.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
