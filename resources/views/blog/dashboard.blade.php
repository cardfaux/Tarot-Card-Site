<x-app-layout>
    <section class="py-20 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold mb-8 text-gray-900 dark:text-gray-100 text-center">Blog Dashboard
            </h1>

            @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 dark:bg-green-800 text-green-700 dark:text-green-200 rounded">
                {{ session('success') }}
            </div>
            @endif

            <div class="mb-6 text-right">
                <a href="{{ route('blog.create') }}"
                    class="bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                    + New Post
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                            <th class="px-6 py-3 text-left font-semibold">Title</th>
                            <th class="px-6 py-3 text-left font-semibold">Published</th>
                            <th class="px-6 py-3 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            <td class="px-6 py-4">{{ $post->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('blog.edit', $post) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-400 transition">
                                    Edit
                                </a>

                                <form action="{{ route('blog.destroy', $post) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500 transition"
                                        onclick="return confirm('Are you sure you want to delete this post?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-600 dark:text-gray-300">No posts yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-6">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
