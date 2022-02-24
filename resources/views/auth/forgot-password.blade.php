<x-guest-layout>
    <x-auth-card-layout routeName="password.email" title="Reset Password" subtitle="Forgotten Password? No prob!">

        <h3 class="text-xl text-gray-700 font-bold mb-6">
            Enter <span class="text-gray-400 font-light">your email below</span>
        </h3>

        <!-- Email Address -->
        <x-input id="email" type="email" autofocus
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red' : '' }}"
                 name="email" value="" required placeholder="Email Address"
        />

        <x-button value="Send Password Reset Link"
                  class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded hover:bg-indigo-600 focus:outline-none cursor-pointer">
            {{ __('Email Password Reset Link') }}
        </x-button>

        <p class="w-full text-normal text-left text-grey-dark mt-8">
            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                Back to login
            </a>
        </p>

    </x-auth-card-layout>
</x-guest-layout>
