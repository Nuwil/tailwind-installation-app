<x-app-layout :title="'Create Note - Tailwind Notes'">
    <div class="mx-auto max-w-3xl space-y-8 rounded-[2rem] border border-white/10 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/20 sm:p-10">
        <div class="space-y-3">
            <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Create note</p>
            <h1 class="text-3xl font-semibold text-white">Capture your next idea.</h1>
            <p class="text-slate-400">A crisp form with plenty of breathing room so writing notes feels effortless.</p>
        </div>

        <form action="{{ route('notes.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label class="block text-sm font-semibold text-slate-200">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-3xl border border-white/10 bg-slate-950 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required>
                @error('title')
                    <p class="text-sm text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label class="block text-sm font-semibold text-slate-200">Content</label>
                <textarea name="content" rows="8" class="w-full rounded-3xl border border-white/10 bg-slate-950 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-sm text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-200 transition hover:bg-white/10">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-sky-400">Save note</button>
            </div>
        </form>
    </div>
</x-app-layout>
