<x-app-layout :title="'About - Tailwind Notes'">
    <section class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr]">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">About</span>
            <h1 class="mt-6 text-4xl font-semibold text-slate-900 sm:text-5xl">A thoughtfully designed note experience.</h1>
            <p class="mt-6 text-slate-600">This app is built with clear structure, gentle spacing, and a calm page flow so your notes feel easy to use.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <h2 class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-500">Mission</h2>
                    <p class="mt-3 text-slate-700">Make note-taking simple and approachable without unnecessary visual noise.</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <h2 class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-500">Approach</h2>
                    <p class="mt-3 text-slate-700">Focus on readable typography, natural spacing, and straightforward controls.</p>
                </div>
            </div>
        </div>
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <div class="space-y-6">
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Design</p>
                    <p class="mt-3 text-slate-700">Neutral colors and soft shadows keep the focus on your content.</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Interaction</p>
                    <p class="mt-3 text-slate-700">Buttons and cards feel gentle, familiar, and easy to use.</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Content</p>
                    <p class="mt-3 text-slate-700">Well-spaced sections make it easy to read and scan the page.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
