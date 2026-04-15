<x-app-layout :title="'Home - Tailwind Notes'">
    <section class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <div class="max-w-3xl space-y-6">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-500">A simple note app</p>
            <h1 class="text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl">A clear, calm place for your notes.</h1>
            <p class="text-base leading-7 text-slate-600">Build and manage your notes in an interface that is easy to use, easy to read, and easy to improve.</p>
            <p class="text-lg font-medium text-slate-700">Built with 50% AI and 50% hand-crafted design.</p>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">View Notes</a>
                <a href="{{ route('about') }}" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-slate-50 px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">About</a>
            </div>
        </div>
    </section>

    <section class="mt-10 grid gap-6 sm:grid-cols-3">
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">No clutter</h2>
            <p class="mt-3 text-slate-600">A focused layout with clean spacing and readable type.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">Simple controls</h2>
            <p class="mt-3 text-slate-600">Easy actions for creating, editing, and deleting notes.</p>
        </article>
        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">Responsive</h2>
            <p class="mt-3 text-slate-600">Works well on desktop and mobile with a calm, consistent style.</p>
        </article>
    </section>
</x-app-layout>
