<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-16 h-16 fill-current text-gray-500" />
            </a>
            <div class="mt-4">
                <p class="text-2xl font-semibold">تسجيل الدخول</p>
            </div>
        </x-slot>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('الأيميل')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('كلمة السر')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 text-end">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="mr-2 text-sm text-secondary-400">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-primary-button class="">
                    {{ __('تسجيل دخول') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
