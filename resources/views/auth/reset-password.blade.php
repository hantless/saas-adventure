<x-guest-layout>
    <x-auth-card-layout routeName="password.update" title="Reset Password" subtitle="Reset Your Password">

        <h3 class="text-xl text-gray-700 font-bold mb-6">
            Reset <span class="text-gray-400 font-light">your password below</span>
        </h3>

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <x-input id="email" type="email"  name="email" :value="old('email')"
                 required autofocus placeholder="Email Address"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red' : '' }}"
        />

        <!-- Password -->
        <x-input id="password" type="password"
                 name="password" required placeholder="Password"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red' : '' }}"
        />

        <!-- Confirm Password -->
        <x-input id="password-confirm" type="password"
                 name="password_confirmation" required placeholder="Confirm Password"
                 class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 "
        />

        <div class="flex flex-wrap items-center">
            <div class="w-full sm:flex-1">
                <x-button value="Reset Password"
                          class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded hover:bg-indigo-600 focus:outline-none cursor-pointer"
                >
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </div>

    </x-auth-card-layout>
</x-guest-layout>