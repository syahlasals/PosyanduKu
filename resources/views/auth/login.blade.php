{{-- <link rel="stylesheet" href="login-style.css"> --}}

<x-guest-layout style="position:absolute; z-index: 5; background-image:url('template/img/wave-vector.svg');">
    <x-jet-authentication-card style="position:absolute; z-index: 6; box-shadow: ;">
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <h1 class="text-center mb 2">Welcome !</h1>
        <h1 class="text-center mb-3">Please Login to Your Account</h1>
        <div class="logo">
            <img style="height: 50%; width: 50%; display:block; margin-left: auto; margin-right: auto;"
                src="{{ asset('template/img/posyandu-welcome.svg') }}" alt="logo">
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="block mt-4">
                    <a href="/register">Register</a>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Create Your Account Now!') }}
                    </a>
                    <x-jet-button class="ml-4 items-center">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>

            </form>
        </div>

    </x-jet-authentication-card>

    {{-- <div>
        <img style="display:block; bottom: 0; position:absolute; z-index: 0;"
            src="{{ asset('template/img/wave.png') }}" alt="logo">
    </div> --}}

</x-guest-layout>
