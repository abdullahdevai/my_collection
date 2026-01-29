<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('login') }}" x-data="loginForm()">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" x-model="email" required autofocus />
                <p class="text-red-500 text-sm mt-1" x-show="email && !validEmail" x-cloak>
                    Please enter a valid email.
                </p>
            </div>

            <!-- Password -->
            <div class="mt-4 relative">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" x-model="password" required />
                <p class="text-red-500 text-sm mt-1" x-show="password === '' && attempted" x-cloak>
                    Password cannot be empty.
                </p>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button type="submit" class="ml-4" :disabled="!canSubmit">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

    <script>
        function loginForm() {
            return {
                email: '',
                password: '',
                attempted: false,

                // Email validation
                get validEmail() {
                    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email);
                },

                // Can submit if email valid and password not empty
                get canSubmit() {
                    this.attempted = this.email !== '' || this.password !== '';
                    return this.validEmail && this.password.length > 0;
                }
            }
        }
    </script>
</x-guest-layout>
