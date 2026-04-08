<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Notes</h1>
            <a href="{{ route('notes.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blueg-700">New Note</a>
        </div>

        @if(session('success'))
            <div class="mb-6 rounded-lg bg-green-50 border border-green-200 p-4 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if($notes->isEmpty())
            <div class="rounded-lg bg-white border border-gray-200 p-6 text-gray-600">
                No notes yet. Create your first note.
            </div>
        @else
            <div class="space-y-4">
                @foreach($notes as $note)
                    <div class="rounded-lg bg-white border border-gray-200 p-6 shadow-sm">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900">{{ $note->title }}</h2>
                                <p class="mt-2 text-gray-700">{{ Illuminate\Support\Str::limit($note->content, 180) }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <a href="{{ route('notes.edit', $note) }}" class="px-3 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Edit</a>
                                <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-8">
            <a href="{{ route('home') }}" class="text-sm text-blue-600 hover:underline">Back to home</a>
        </div>
    </div>
</body>
</html>
