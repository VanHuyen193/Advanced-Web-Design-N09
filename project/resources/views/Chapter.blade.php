<x-layout>
    <x-slot:heading>
        Chapter
    </x-slot:heading>
    
    <h2 class="font-bold text-lg">{{ $chapter->title }}</h2>
    <p>{{ $chapter->content }}</p>

    <div class="mt-4 flex justify-between">
        @if($previousChapter)
            <a href="{{ url('/books/' . $bookId . '/chapters/' . $previousChapter->id) }}" class="px-4 py-2 bg-gray-200 rounded">
                ← Previous
            </a>

        @else
            <span class="px-4 py-2 text-gray-400">← Previous</span>
        @endif

        @if($nextChapter)
            <a href="{{ url('/books/' . $bookId . '/chapters/' . $nextChapter->id) }}" class="px-4 py-2 bg-gray-200 rounded">
                Next →
            </a>
        @else
            <span class="px-4 py-2 text-gray-400">Next →</span>
        @endif
    </div>
</x-layout>
