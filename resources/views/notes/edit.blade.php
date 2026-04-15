<x-app-layout :title="'Edit Note - Tailwind Notes'">
    <div class="mx-auto max-w-3xl rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
        <div class="space-y-3">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-500">Edit note</p>
            <h1 class="text-3xl font-semibold text-slate-900">Update your note.</h1>
            <p class="text-slate-600">Keep your note content clean and easy to revisit.</p>
        </div>

        <form action="{{ route('notes.update', $note) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">Title</label>
                <input type="text" name="title" value="{{ old('title', $note->title) }}" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:ring-4 focus:ring-slate-200" required>
                @error('title')
                    <p class="text-sm text-rose-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">Content</label>
                <textarea name="content" rows="8" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:ring-4 focus:ring-slate-200" required>{{ old('content', $note->content) }}</textarea>
                @error('content')
                    <p class="text-sm text-rose-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('notes.index') }}" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-slate-50 px-5 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Cancel</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Update note</button>
            </div>
        </form>
    </div>
</x-app-layout>
