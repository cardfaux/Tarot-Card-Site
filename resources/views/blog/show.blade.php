<x-app-layout>
    <section class="py-20 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto">
            @if($post->image)
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-lg mb-6">
            @endif
            <h1 class="text-4xl font-bold mb-4 text-gray-900 dark:text-gray-100">{{ $post->title }}</h1>
            <p class="text-gray-600 dark:text-gray-400 mb-8">Published on {{ $post->created_at->format('F j, Y') }}</p>
            <div class="prose dark:prose-invert max-w-full">
                {!! $post->content !!}
            </div>
        </div>
    </section>
</x-app-layout>
