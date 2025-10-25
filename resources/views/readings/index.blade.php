<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Your Tarot Readings</h2>

        @if (session('success'))
        <div
            class="bg-green-100 dark:bg-green-800 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-200 p-4 rounded mb-4 transition-colors duration-200">
            {{ session('success') }}
        </div>
        @endif

        @forelse ($readings as $reading)
        <div class="bg-white dark:bg-gray-800 shadow dark:shadow-lg p-4 rounded-lg mb-4 transition-colors duration-200">
            <h3 class="font-semibold text-lg text-gray-900 dark:text-gray-100">{{ $reading->question }}</h3>
            <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $reading->details }}</p>
            <p class="mt-3 text-sm text-gray-500 dark:text-gray-400">
                Status: <span class="font-medium">{{ ucfirst($reading->status) }}</span>
            </p>

            @if ($reading->response)
            <div class="mt-3 bg-indigo-50 dark:bg-indigo-900 p-3 rounded transition-colors duration-200">
                <strong class="text-gray-900 dark:text-gray-100">Reader’s Response:</strong>
                <p class="text-gray-700 dark:text-gray-200 mt-1">{{ $reading->response }}</p>
            </div>
            @endif
        </div>
        @empty
        <p class="text-gray-800 dark:text-gray-200">
            No readings yet.
            <a href="{{ route('readings.create') }}" class="text-indigo-600 dark:text-indigo-400 underline">Request one
                now.</a>
        </p>
        @endforelse
    </div>
</x-app-layout>