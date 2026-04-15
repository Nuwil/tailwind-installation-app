<x-app-layout :title="'About - Tailwind Notes'">
    <section class="grid gap-10 rounded-[2rem] border border-white/10 bg-slate-900/85 p-8 shadow-2xl shadow-slate-950/20 sm:p-10 lg:grid-cols-[0.9fr_1.1fr]">
        <div>
            <span class="inline-flex rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-sky-300">About</span>
            <h1 class="mt-6 text-4xl font-semibold text-white sm:text-5xl">Modern notes with a thoughtful interface.</h1>
            <p class="mt-6 text-lg leading-8 text-slate-300">This project focuses on approachable layouts, strong contrast, and a structured experience that feels premium.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-950/70 p-6">
                    <h2 class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">Mission</h2>
                    <p class="mt-3 text-slate-300">Create interfaces that are easy to scan, enjoyable to use, and fast to navigate.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6">
                    <h2 class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-400">Approach</h2>
                    <p class="mt-3 text-slate-300">Use bold typography, spacious cards, and subtle motion to elevate the experience.</p>
                </div>
            </div>
        </div>
        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-inner shadow-slate-950/10">
            <div class="space-y-6">
                <div class="rounded-3xl bg-slate-950/90 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Design</p>
                    <p class="mt-3 text-white">Readable typography, balanced spacing, and intuitive color contrast.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/90 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-emerald-300">Function</p>
                    <p class="mt-3 text-white">Clear navigation, responsive layout, and polished content cards.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/90 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-fuchsia-300">Experience</p>
                    <p class="mt-3 text-white">A modern web presence with practical structure and memorable details.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
