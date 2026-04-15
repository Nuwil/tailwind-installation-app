<x-app-layout :title="'About - Tailwind Notes'">
    <section class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
            <div>
                <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-sm font-semibold text-emerald-700">About me</span>
                <h1 class="mt-6 text-4xl font-semibold text-slate-900 sm:text-5xl">Hi, I’m the creator of Tailwind Notes.</h1>
                <p class="mt-6 text-lg leading-8 text-slate-600">I focus on clean web experiences with thoughtful layout, responsive design, and small interactive details that feel polished.</p>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl bg-slate-50 p-5">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-500">Mission</h2>
                        <p class="mt-3 text-slate-700">Build interfaces that are easy to scan, pleasant to use, and fast to iterate on.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-50 p-5">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-500">Approach</h2>
                        <p class="mt-3 text-slate-700">Use proven UI patterns, accessible design, and a calm color palette for better focus.</p>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-slate-900 p-8 text-white shadow-sm">
                <h2 class="text-2xl font-semibold">What you get</h2>
                <p class="mt-4 text-slate-300">A smart layout for a landing experience, plus quick access to notes and contact pages that feel cohesive.</p>
                <div class="mt-6 space-y-4">
                    <div class="rounded-3xl bg-white/10 p-5">
                        <p class="text-sm uppercase tracking-[0.2em] text-sky-300">Design</p>
                        <p class="mt-3 text-slate-100">Readable typography, strong visual hierarchy, and responsive spacing.</p>
                    </div>
                    <div class="rounded-3xl bg-white/10 p-5">
                        <p class="text-sm uppercase tracking-[0.2em] text-emerald-300">Function</p>
                        <p class="mt-3 text-slate-100">Accessible navigation, easy-to-find content, and a calm page structure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
