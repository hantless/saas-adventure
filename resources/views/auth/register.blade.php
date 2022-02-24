<x-guest-layout>
    <x-auth-card-layout routeName="register" title="Register" subtitle="Signup for an Account">

        <h3 class="text-xl text-gray-700 font-bold mb-6">
            Register <span class="text-gray-400 font-light">for an account</span>
        </h3>

        <!-- Name -->
        <x-input id="name" type="text" name="name" :value="old('name')" required autofocus
                 placeholder="Name"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('name') ? ' border-red-500' : '' }}"
        />

        <!-- Email Address -->
        <x-input id="email" type="email" name="email" :value="old('email')" required
                 placeholder="Email Address"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red-500' : '' }}"
        />

        <!-- Password -->
        <x-input id="password" type="password" name="password" required autocomplete="new-password"
                 placeholder="Password"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red-500' : '' }}"
        />

        <!-- Confirm Password -->
        <x-input id="password_confirmation" type="password" name="password_confirmation" required
                 placeholder="Confirm Password"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4"
        />

        <div class="flex flex-wrap items-center">
            <div class="w-full sm:flex-1">
                <x-button value="Register"
                          class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded hover:bg-indigo-600 focus:outline-none cursor-pointer"
                >
                    {{ __('Register') }}
                </x-button>
            </div>
        </div>

        <p class="w-full text-xs text-left text-gray-700 mt-8">
            Already have an account?
            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                Login
            </a>
        </p>

    </x-auth-card-layout>
</x-guest-layout>








