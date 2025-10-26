<x-app-layout>
  <!-- Hero Section -->
  <section class="relative overflow-hidden bg-gradient-to-b from-indigo-900 via-purple-900 to-black text-white">
    <div class="relative z-10 flex flex-col items-center justify-center text-center py-24 px-6">
      <h1 class="text-5xl md:text-6xl font-bold mb-6">About Indigo Fernn</h1>
      <p class="max-w-2xl text-lg md:text-xl text-gray-200 mb-8">
        Discover the story behind our gifted tarot reader and her journey into the mystical world of cards and
        intuition.
      </p>
    </div>
  </section>

  <!-- About Indigo Section -->
  <section class="py-20 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <div>
        <picture>
          <!-- WebP for modern browsers -->
          <source srcset="/images/indigo-fern.webp" type="image/webp">
          <!-- Fallback JPEG -->
          <img src="/images/indigo-fern-min.jpg" alt="Indigo Fernn"
            class="rounded-lg shadow-md w-full object-cover h-80 md:h-full">
        </picture>
      </div>
      <div class="text-gray-800 dark:text-gray-200">
        <h2 class="text-3xl font-bold mb-4">Meet Indigo Fernn</h2>
        <p class="mb-4">
          Indigo Fernn is a seasoned tarot reader with over a decade of experience guiding individuals on their
          spiritual and personal journeys.
          Her intuitive readings provide clarity, insight, and empowerment for those seeking guidance in love,
          career, and personal growth.
        </p>
        <p class="mb-4">
          Indigo blends traditional tarot techniques with her own intuitive wisdom, creating a unique and
          personalized experience for each client.
          Her mission is to help people embrace their inner truth and navigate life with confidence and
          clarity.
        </p>
        <p>
          Whether you’re new to tarot or a seasoned seeker, Indigo Fernn offers compassionate and insightful
          readings that illuminate your path.
        </p>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="bg-indigo-900 dark:bg-indigo-800 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">Ready to Connect With Indigo?</h2>
    <p class="mb-8 text-gray-200">Book your personalized tarot reading and gain clarity on your journey today.</p>
    <a href="{{ route('readings.create') }}"
      class="bg-white text-indigo-800 px-6 py-3 rounded-lg text-lg font-medium hover:bg-gray-100 transition">
      Request a Reading
    </a>
  </section>

  <!-- Contact Form -->
  <section class="py-20 px-6 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl  font-bold mb-8 text-gray-900 dark:text-gray-100 text-center">
        Get in Touch
      </h2>
      @if (session('success'))
      <div
        class="bg-green-100 dark:bg-green-800 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-200 p-4 rounded mb-6 text-center transition-colors duration-200">
        {{ session('success') }}
      </div>
      @endif
      <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
        @csrf
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
          <input type="text" name="name" required
            class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
          <input type="email" name="email" required
            class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
          <textarea name="message" rows="5" required
            class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500 transition-colors duration-200"></textarea>
        </div>
        <div class="text-center">
          <button type="submit"
            class="bg-indigo-700 dark:bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-indigo-600 dark:hover:bg-indigo-500 transition">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>
</x-app-layout>
