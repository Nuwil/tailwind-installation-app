<x-app-layout :title="'Edit Note - Tailwind Notes'">
    <div class="mx-auto max-w-3xl space-y-8 rounded-[2rem] border border-white/10 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/20 sm:p-10">
        <div class="space-y-3">
            <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Edit note</p>
            <h1 class="text-3xl font-semibold text-white">Keep your note updated.</h1>
            <p class="text-slate-400">A clean editing experience with clear labels and spacious input areas.</p>
        </div>

        <form action="{{ route('notes.update', $note) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="space-y-2">
                <label class="block text-sm font-semibold text-slate-200">Title</label>
                <input type="text" name="title" value="{{ old('title', $note->title) }}" class="w-full rounded-3xl border border-white/10 bg-slate-950 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required>
                @error('title')
                    <p class="text-sm text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label class="block text-sm font-semibold text-slate-200">Content</label>
                <textarea name="content" rows="8" class="w-full rounded-3xl border border-white/10 bg-slate-950 px-4 py-3 text-white shadow-sm outline-none transition focus:border-sky-400 focus:ring-4 focus:ring-sky-400/10" required>{{ old('content', $note->content) }}</textarea>
                @error('content')
                    <p class="text-sm text-rose-400">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-200 transition hover:bg-white/10">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-sky-400">Update note</button>
            </div>
        </form>
    </div>
</x-app-layout>
