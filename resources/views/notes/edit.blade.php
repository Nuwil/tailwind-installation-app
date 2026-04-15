<x-app-layout :title="'Edit Note - Tailwind Notes'">
    <div class="mx-auto max-w-3xl space-y-6 rounded-3xl bg-white px-6 py-8 shadow-sm sm:px-10 sm:py-10">
        <div class="space-y-2">
            <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Notes</p>
            <h1 class="text-3xl font-semibold text-slate-900">Edit note</h1>
            <p class="text-slate-600">Update the note content and save your latest thoughts.</p>
        </div>

        <form action="{{ route('notes.update', $note) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-slate-700">Title</label>
                <input type="text" name="title" value="{{ old('title', $note->title) }}" class="mt-2 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm focus:border-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-100" required>
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700">Content</label>
                <textarea name="content" class="mt-2 h-40 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 shadow-sm focus:border-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-100" required>{{ old('content', $note->content) }}</textarea>
                @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-center gap-3">
                    <button type="submit" class="inline-flex rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Update Note</button>
                    <a href="{{ route('notes.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
