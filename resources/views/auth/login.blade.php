<div style="background-image: url('{{ asset('img/login.jpg') }}'); background-size: 100% 100%; background-position: center;" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <x-guest-layout style="background-image: url('.\resources\img\login.jpg'); background-size: cover; background-repeat: no-repeat;">
        <x-authentication-card>
            <x-slot name="logo">
            </x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Contraseña') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recordarme') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">

                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                            {{ __('No estas registrado?') }}
                        </a>
                    

                    <x-button class="ml-4">
                        {{ __('Acceder') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>
    </div>
<script src="{{ asset('assets/js/app.js') }}"></script>
    

