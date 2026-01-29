<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" x-data="registerForm()">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" x-model="email" required />
                <p class="text-red-500 text-sm mt-1" x-show="email && !validEmail" x-cloak>
                    Please enter a valid email.
                </p>
            </div>

            <!-- Password -->
            <div class="mt-4 relative" x-data="{ tooltip: false }">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         x-model="password"
                         @focus="tooltip = true"
                         @blur="tooltip = false"
                         @mouseenter="tooltip = true"
                         @mouseleave="tooltip = false"
                         required />

                <!-- Tooltip / Popover -->
                <div x-show="tooltip" x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-2"
                     class="absolute z-10 left-0 top-full mt-2 w-full bg-white border border-gray-300 rounded shadow-lg p-4 text-sm space-y-1">

                    <!-- Arrow -->
                    <div class="absolute -top-2 left-4 w-3 h-3 bg-white border-l border-t border-gray-300 rotate-45"></div>

                    <p class="flex items-center" :class="minLength ? 'text-green-600' : 'text-red-500'">
                        <span class="mr-2" x-html="minLength ? '&#10004;' : '&#10006;'"></span>
                        Minimum 8 characters
                    </p>
                    <p class="flex items-center" :class="uppercase ? 'text-green-600' : 'text-red-500'">
                        <span class="mr-2" x-html="uppercase ? '&#10004;' : '&#10006;'"></span>
                        At least 1 uppercase letter
                    </p>
                    <p class="flex items-center" :class="lowercase ? 'text-green-600' : 'text-red-500'">
                        <span class="mr-2" x-html="lowercase ? '&#10004;' : '&#10006;'"></span>
                        At least 1 lowercase letter
                    </p>
                    <p class="flex items-center" :class="number ? 'text-green-600' : 'text-red-500'">
                        <span class="mr-2" x-html="number ? '&#10004;' : '&#10006;'"></span>
                        At least 1 number
                    </p>
                    <p class="flex items-center" :class="special ? 'text-green-600' : 'text-red-500'">
                        <span class="mr-2" x-html="special ? '&#10004;' : '&#10006;'"></span>
                        At least 1 special character (@$!%*?&)
                    </p>
                </div>

                <!-- Password Strength Bar -->
                <div class="mt-2 w-full h-3 bg-gray-200 rounded overflow-hidden">
                    <div class="h-3 transition-all duration-300 rounded"
                         :style="`width: ${strengthPercent}%`"
                         :class="strengthClass">
                    </div>
                </div>
                <p class="text-sm mt-1 font-semibold" x-text="strengthLabel" :class="strengthLabelClass"></p>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation"
                         x-model="passwordConfirmation"
                         required />
                <p class="text-red-500 text-sm mt-1" x-show="passwordConfirmation && password !== passwordConfirmation" x-cloak>
                    Passwords do not match.
                </p>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4" :disabled="!canSubmit">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

    <script>
        function registerForm() {
            return {
                email: '',
                password: '',
                passwordConfirmation: '',

                get validEmail() {
                    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email);
                },

                get minLength() { return this.password.length >= 8; },
                get uppercase() { return /[A-Z]/.test(this.password); },
                get lowercase() { return /[a-z]/.test(this.password); },
                get number() { return /\d/.test(this.password); },
                get special() { return /[@$!%*?&]/.test(this.password); },

                get validPassword() {
                    return this.minLength && this.uppercase && this.lowercase && this.number && this.special;
                },

                get strengthPercent() {
                    let rules = [this.minLength, this.uppercase, this.lowercase, this.number, this.special];
                    let passed = rules.filter(Boolean).length;
                    return (passed / rules.length) * 100;
                },

                get strengthClass() {
                    if(this.strengthPercent === 100) return 'bg-gradient-to-r from-green-400 to-green-600';
                    if(this.strengthPercent >= 60) return 'bg-gradient-to-r from-yellow-400 to-yellow-600';
                    if(this.strengthPercent > 0) return 'bg-gradient-to-r from-red-400 to-red-600';
                    return 'bg-gray-200';
                },

                get strengthLabel() {
                    if(this.strengthPercent === 100) return 'Strong';
                    if(this.strengthPercent >= 60) return 'Medium';
                    if(this.strengthPercent > 0) return 'Weak';
                    return '';
                },

                get strengthLabelClass() {
                    if(this.strengthPercent === 100) return 'text-green-600';
                    if(this.strengthPercent >= 60) return 'text-yellow-600';
                    if(this.strengthPercent > 0) return 'text-red-600';
                    return '';
                },

                get canSubmit() {
                    return this.validEmail && this.validPassword && this.password === this.passwordConfirmation;
                }
            }
        }
    </script>
</x-guest-layout>
