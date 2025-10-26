<x-app-layout>
    <section class="py-20 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold mb-12 text-center text-gray-900 dark:text-gray-100">Tarot Blog</h1>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($posts as $post)
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    @if($post->image)
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $post->excerpt }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}"
                            class="text-indigo-700 dark:text-indigo-400 font-medium hover:underline">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $posts->links() }}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="{{ route('blog.dashboard') }}"
                    class="bg-indigo-700 dark:bg-indigo-600 text-white rounded-lg p-6 text-center hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                    <h3 class="text-xl font-semibold mb-2">Manage Blog Posts</h3>
                    <p>View, edit, or delete your tarot blog posts here.</p>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
