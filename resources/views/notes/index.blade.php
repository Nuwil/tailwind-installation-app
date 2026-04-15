<x-app-layout :title="'Notes - Tailwind Notes'">
    <div class="space-y-6">
        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-500">Notes</p>
                    <h1 class="mt-3 text-3xl font-semibold text-slate-900">Your notes in one place</h1>
                    <p class="mt-2 text-slate-600">Create, edit, and manage notes with a simple clean interface.</p>
                </div>
                <a href="{{ route('notes.create') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">New note</a>
            </div>
        </div>

        @if(session('success'))
            <div class="rounded-3xl border border-emerald-200 bg-emerald-50 px-6 py-4 text-emerald-900 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        @if($notes->isEmpty())
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm text-slate-600">
                No notes yet. Start by creating one.
            </div>
        @else
            <div class="grid gap-5">
                @foreach($notes as $note)
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                            <div>
                                <h2 class="text-2xl font-semibold text-slate-900">{{ $note->title }}</h2>
                                <p class="mt-3 text-slate-600">{{ Illuminate\Support\Str::limit($note->content, 180) }}</p>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ route('notes.edit', $note) }}" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Edit</a>
                                <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-rose-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-rose-400">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
