<x-app-layout>
    <div
        class="max-w-2xl mx-auto bg-white dark:bg-gray-800 shadow-md dark:shadow-lg p-6 rounded-lg transition-colors duration-200">
        <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Request a Tarot Reading</h2>

        <form action="{{ route('readings.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Your Question</label>
                <input type="text" name="question"
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200"
                    required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Additional Details
                    (optional)</label>
                <textarea name="details" rows="4"
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200"></textarea>
            </div>
            <button type="submit"
                class="bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition-colors duration-200">
                Submit
            </button>
        </form>
    </div>
</x-app-layout>