<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h3 class="font-bold text-center">Create your account</h3>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- First Name -->
            <div>
                <x-label for="fname" :value="__('First Name')" />

                <x-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus />
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="lname" :value="__('Last Name')" />

                <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus />
            </div>            



            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="items-center  mt-4">
               <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="items-center text-center mt-4">
                <a class="underline text-sm text-blue-400 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already have an account? Login') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
