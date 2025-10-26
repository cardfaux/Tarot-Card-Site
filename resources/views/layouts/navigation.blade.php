<nav x-data="{ open: false, darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', value => {
         localStorage.setItem('darkMode', value);
         document.documentElement.classList.toggle('dark', value);
     })" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-22">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-13 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-gray-900 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('readings.index')" :active="request()->routeIs('readings.index')"
                        class="text-gray-900 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300">
                        {{ __('Readings') }}
                    </x-nav-link>
                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')"
                        class="text-gray-900 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300">
                        {{ __('Blog') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode"
                    class="p-2 rounded-md bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                    <template x-if="darkMode">
                        <!-- Sun Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M6.05 17.95l-1.414 1.414M18.364 18.364l-1.414-1.414M6.05 6.05L4.636 7.464M12 8a4 4 0 100 8 4 4 0 000-8z" />
                        </svg>
                    </template>
                    <template x-if="!darkMode">
                        <!-- Moon Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                        </svg>
                    </template>
                </button>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md
                                       text-gray-500 dark:text-gray-300
                                       bg-white dark:bg-gray-800
                                       hover:text-gray-700 dark:hover:text-gray-100
                                       focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name ?? 'Guest' }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Add dark:bg-gray-800 to the panel -->
                            <div class="bg-white dark:bg-gray-800">
                                <x-dropdown-link :href="route('profile.edit')"
                                    class="text-gray-900 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-900">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="text-gray-900 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-900">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-700">
            <div class="px-4">
                @auth
                <div class="font-medium text-base text-gray-800 dark:text-gray-100">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500 dark:text-gray-300">{{ Auth::user()->email }}</div>
                @endauth
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="dark:text-gray-100">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();" class="dark:text-gray-100">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
