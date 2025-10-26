<x-app-layout>
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-b from-indigo-900 via-purple-900 to-black text-white">
        <picture>
            <source srcset="/images/tarot-bg.webp" type="image/webp">
            <img src="/images/tarot-bg.jpg" alt="Tarot Background"
                class="absolute inset-0 w-full h-full object-cover opacity-20">
        </picture>
        <div class="relative z-10 flex flex-col items-center justify-center text-center py-24 px-6">
            <h1 class="text-5xl md:text-6xl font-serif font-bold mb-6">Discover Your Path Through The Cards</h1>
            <p class="max-w-2xl text-lg md:text-xl text-gray-200 mb-8">
                Unlock clarity and guidance through intuitive tarot readings tailored to your energy and journey.
            </p>
            <a href="{{ route('readings') }}"
                class="bg-indigo-700 hover:bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-medium transition">
                Explore Readings
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-serif font-bold mb-4 text-gray-900 dark:text-gray-100">Meet Your Reader</h2>
            <p class="text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                With over a decade of experience reading tarot and channeling intuitive messages,
                our gifted reader connects deeply with spirit to offer insights on love, career, and destiny.
                Every session is crafted to help you embrace your truth and move forward with confidence.
            </p>
        </div>
    </section>

    <!-- Reading Types -->
    <section
        class="py-20 px-6 bg-gradient-to-b from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors duration-300">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-serif font-bold text-center mb-10 text-gray-900 dark:text-gray-100">
                Popular Readings
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Love Reading -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition">
                    <picture>
                        <source srcset="/images/love-reading.webp" type="image/webp">
                        <img src="/images/love-reading.jpg" alt="Love Reading"
                            class="rounded-md mb-4 mx-auto w-full h-48 object-cover">
                    </picture>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">Love & Relationships</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Understand your connections, open your heart, and find balance in relationships.
                    </p>
                    <a href="{{ route('readings.create') }}"
                        class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                        Request Reading
                    </a>
                </div>

                <!-- Career Reading -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition">
                    <picture>
                        <source srcset="/images/career-reading.webp" type="image/webp">
                        <img src="/images/career-reading.jpg" alt="Career Reading"
                            class="rounded-md mb-4 mx-auto w-full h-48 object-cover">
                    </picture>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">Career & Finances</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Gain clarity on your life path, professional direction, and financial opportunities.
                    </p>
                    <a href="{{ route('readings.create') }}"
                        class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                        Request Reading
                    </a>
                </div>

                <!-- Spiritual Reading -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center hover:shadow-lg transition">
                    <picture>
                        <source srcset="/images/spiritual-reading.webp" type="image/webp">
                        <img src="/images/spiritual-reading.jpg" alt="Spiritual Reading"
                            class="rounded-md mb-4 mx-auto w-full h-48 object-cover">
                    </picture>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">Spiritual Guidance</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Connect with your higher self and uncover spiritual messages from the universe.
                    </p>
                    <a href="{{ route('readings.create') }}"
                        class="inline-block bg-indigo-700 dark:bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
                        Request Reading
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-indigo-900 dark:bg-indigo-800 text-white py-16 text-center">
        <h2 class="text-3xl font-serif font-bold mb-4">Ready to Reveal What the Cards Hold?</h2>
        <p class="mb-8 text-gray-200">Book your personalized tarot reading today and step into your clarity.</p>
        <a href="{{ route('readings.create') }}"
            class="bg-white text-indigo-800 px-6 py-3 rounded-lg text-lg font-medium hover:bg-gray-100 transition">
            Book a Reading
        </a>
    </section>
</x-app-layout>
