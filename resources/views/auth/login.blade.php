<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('images/fine_wood.png') }}" alt="Your Custom Logo" width="50" height="50">
        </x-slot>

        <div class="mb-4 text-gray-800 font-semibold text-xl">
            {{ __('Log In') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email Address') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="form-checkbox h-5 w-5 text-indigo-600" />
                    <span class="ml-2 text-gray-600 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-900 focus:outline-none focus:ring ring-indigo-500 rounded-md" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring ring-indigo-500 rounded-md">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
