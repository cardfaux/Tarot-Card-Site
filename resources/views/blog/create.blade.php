<x-app-layout>
    <section class="py-20 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-8 text-gray-900 dark:text-gray-100 text-center">Create Blog Post
            </h1>

            @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 dark:bg-red-800 text-red-700 dark:text-red-200 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" required
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" required
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Excerpt (optional)</label>
                    <textarea name="excerpt" rows="3"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200">{{ old('excerpt') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                    <textarea name="content" rows="8" required
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200">{{ old('content') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Featured Image
                        (optional)</label>
                    <input type="file" name="image" class="mt-1 block w-full text-gray-700 dark:text-gray-200">
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-indigo-700 dark:bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
