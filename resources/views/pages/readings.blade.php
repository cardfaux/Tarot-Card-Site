<x-app-layout>
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold mb-6 text-gray-900 dark:text-gray-100 text-center">
            Tarot Readings
        </h1>

        <p class="text-gray-700 dark:text-gray-300 mb-6 text-center">
            Welcome to our tarot reading services. Discover guidance, insight, and clarity with a personalized reading.
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center transition-colors duration-200">
                <h2 class="text-2xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Love & Relationships</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Get insight into your love life and relationships.</p>
                <a href="{{ route('readings.create') }}"
                    class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                    Request a Reading
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center transition-colors duration-200">
                <h2 class="text-2xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Career & Finances</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Gain clarity about work, money, and life direction.</p>
                <a href="{{ route('readings.create') }}"
                    class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                    Request a Reading
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center transition-colors duration-200">
                <h2 class="text-2xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Personal Growth</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Explore your spiritual path and inner guidance.</p>
                <a href="{{ route('readings.create') }}"
                    class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                    Request a Reading
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center transition-colors duration-200">
                <h2 class="text-2xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Custom Reading</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Ask a specific question and get a tailored reading.</p>
                <a href="{{ route('readings.create') }}"
                    class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                    Request a Reading
                </a>
            </div>
        </div>
    </div>
</x-app-layout>