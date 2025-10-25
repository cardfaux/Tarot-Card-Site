<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}"
        class="mt-6 space-y-6 bg-white dark:bg-gray-700 p-6 sm:rounded-lg shadow dark:shadow-md">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')"
                class="dark:text-gray-100" />
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-1 block w-full bg-white dark:bg-gray-600 text-gray-900 dark:text-gray-100 border-gray-300 dark:border-gray-500 placeholder-gray-400 dark:placeholder-gray-300"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')"
                class="mt-2 text-red-600 dark:text-red-400" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" class="dark:text-gray-100" />
            <x-text-input id="update_password_password" name="password" type="password"
                class="mt-1 block w-full bg-white dark:bg-gray-600 text-gray-900 dark:text-gray-100 border-gray-300 dark:border-gray-500 placeholder-gray-400 dark:placeholder-gray-300"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')"
                class="mt-2 text-red-600 dark:text-red-400" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')"
                class="dark:text-gray-100" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full bg-white dark:bg-gray-600 text-gray-900 dark:text-gray-100 border-gray-300 dark:border-gray-500 placeholder-gray-400 dark:placeholder-gray-300"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2 text-red-600 dark:text-red-400" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button
                class="bg-blue-600 dark:bg-blue-700 text-white dark:text-gray-100 hover:bg-blue-700 dark:hover:bg-blue-600">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-300">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>