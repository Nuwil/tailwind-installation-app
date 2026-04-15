<x-app-layout :title="'Notes - Tailwind Notes'">
    <div class="space-y-6">
        <div class="rounded-[2rem] border border-white/10 bg-slate-900/85 p-8 shadow-2xl shadow-slate-950/20 sm:p-10">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Notes dashboard</p>
                    <h1 class="mt-3 text-3xl font-semibold text-white">Your notes, reimagined.</h1>
                    <p class="mt-2 text-slate-400">Create, update, and manage notes with a cleaner, more modern interface.</p>
                </div>
                <a href="{{ route('notes.create') }}" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-sky-400">New Note</a>
            </div>
        </div>

        @if(session('success'))
            <div class="rounded-3xl border border-emerald-400/30 bg-emerald-500/10 px-6 py-4 text-emerald-200 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        @if($notes->isEmpty())
            <div class="rounded-[2rem] border border-white/10 bg-slate-900/85 p-8 shadow-2xl shadow-slate-950/20 text-slate-400">
                No notes yet. Start by creating your first note.
            </div>
        @else
            <div class="grid gap-6">
                @foreach($notes as $note)
                    <div class="rounded-[2rem] border border-white/10 bg-slate-900/85 p-6 shadow-2xl shadow-slate-950/20 transition hover:-translate-y-1 hover:border-sky-500/30">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                            <div>
                                <h2 class="text-2xl font-semibold text-white">{{ $note->title }}</h2>
                                <p class="mt-3 text-slate-400">{{ Illuminate\Support\Str::limit($note->content, 180) }}</p>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ route('notes.edit', $note) }}" class="inline-flex items-center justify-center rounded-full bg-slate-100 px-4 py-2 text-sm font-semibold text-slate-950 transition hover:bg-white">Edit</a>
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
