<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src={{asset('user/img/logo_auth.png')}}  alt="Logo" class="w-30 h-20 fill-current text-gray-500">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('change-password') }}">
            @csrf

            <!-- old password -->
            <div>
                <x-label for="password" :value="__('Old Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="current_password" :value="old('password')" required autofocus />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('New Password')" />

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

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4">
                    {{ __('Change') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
