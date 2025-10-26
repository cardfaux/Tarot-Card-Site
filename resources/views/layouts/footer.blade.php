<footer class="bg-indigo-900 dark:bg-gray-900 text-white py-12 mt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 md:flex md:justify-between md:items-start">
    <!-- About / Branding -->
    <div class="mb-8 md:mb-0 md:w-1/3">
      <h3 class="text-2xl font-bold mb-2">Indigo Fernn Tarot</h3>
      <p class="text-gray-200 dark:text-gray-400">
        Guiding you through love, career, and spiritual clarity with personalized tarot readings.
      </p>
    </div>

    <!-- Quick Links -->
    <div class="mb-8 md:mb-0 md:w-1/3">
      <h4 class="text-xl font-semibold mb-2">Quick Links</h4>
      <ul class="space-y-1 text-gray-200 dark:text-gray-400">
        <li><a href="{{ route('readings') }}"
            class="hover:text-indigo-300 dark:hover:text-indigo-500 transition">Readings</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-indigo-300 dark:hover:text-indigo-500 transition">About</a>
        </li>
        <li><a href="{{ route('contact') }}"
            class="hover:text-indigo-300 dark:hover:text-indigo-500 transition">Contact</a></li>
        <li><a href="{{ route('blog.index') }}"
            class="hover:text-indigo-300 dark:hover:text-indigo-500 transition">Blog</a></li>
      </ul>
    </div>

    <!-- Contact / Social -->
    <div class="md:w-1/3">
      <h4 class="text-xl font-semibold mb-2">Connect</h4>
      <p class="text-gray-200 dark:text-gray-400 mb-4">
        Email us at <a href="mailto:info@indigofern.com"
          class="underline hover:text-indigo-300 dark:hover:text-indigo-500 transition">info@indigofern.com</a>
      </p>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-indigo-300 dark:hover:text-indigo-500 transition" aria-label="Facebook">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path
              d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5.03 3.66 9.2 8.44 9.88v-6.99H7.9v-2.89h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.77l-.44 2.89h-2.33v6.99C18.34 21.27 22 17.1 22 12.07z" />
          </svg>
        </a>
        <a href="#" class="hover:text-indigo-300 dark:hover:text-indigo-500 transition" aria-label="Instagram">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path
              d="M12 2.2c3.2 0 3.584.012 4.85.07 1.17.055 1.96.24 2.418.403a4.92 4.92 0 011.79 1.17 4.92 4.92 0 011.17 1.79c.163.458.348 1.248.403 2.418.058 1.266.07 1.65.07 4.85s-.012 3.584-.07 4.85c-.055 1.17-.24 1.96-.403 2.418a4.92 4.92 0 01-1.17 1.79 4.92 4.92 0 01-1.79 1.17c-.458.163-1.248.348-2.418.403-1.266.058-1.65.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.055-1.96-.24-2.418-.403a4.92 4.92 0 01-1.79-1.17 4.92 4.92 0 01-1.17-1.79c-.163-.458-.348-1.248-.403-2.418C2.212 15.584 2.2 15.2 2.2 12s.012-3.584.07-4.85c.055-1.17.24-1.96.403-2.418a4.92 4.92 0 011.17-1.79 4.92 4.92 0 011.79-1.17c.458-.163 1.248-.348 2.418-.403C8.416 2.212 8.8 2.2 12 2.2zm0-2.2C8.736 0 8.332.013 7.053.072 5.772.131 4.843.296 4.052.558a7.115 7.115 0 00-2.6 1.514 7.115 7.115 0 00-1.514 2.6c-.262.79-.427 1.718-.486 2.999C.013 8.332 0 8.736 0 12c0 3.264.013 3.668.072 4.947.059 1.281.224 2.209.486 2.999a7.115 7.115 0 001.514 2.6 7.115 7.115 0 002.6 1.514c.79.262 1.718.427 2.999.486C8.332 23.987 8.736 24 12 24s3.668-.013 4.947-.072c1.281-.059 2.209-.224 2.999-.486a7.115 7.115 0 002.6-1.514 7.115 7.115 0 001.514-2.6c.262-.79.427-1.718.486-2.999.059-1.279.072-1.683.072-4.947s-.013-3.668-.072-4.947c-.059-1.281-.224-2.209-.486-2.999a7.115 7.115 0 00-1.514-2.6A7.115 7.115 0 0019.946.558c-.79-.262-1.718-.427-2.999-.486C15.668.013 15.264 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="mt-12 border-t border-indigo-700 dark:border-gray-700 pt-6 text-center text-gray-400 text-sm">
    &copy; {{ date('Y') }} Indigo Fernn Tarot. All rights reserved.
  </div>
</footer>
