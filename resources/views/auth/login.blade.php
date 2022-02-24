<x-guest-layout>
    <x-auth-card-layout routeName="login" title="Login" subtitle="Welcome back!">

      <h3 class="text-xl text-gray-700 font-bold mb-6">
        Login <span class="text-gray-400 font-light">to your account</span>
      </h3>

      <!-- Email Address -->
      <x-input id="email" type="email" :value="old('email')"
               placeholder="Email" name="email"
               class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('email') ? ' border-red-500' : '' }}"
               required autofocus
      />

      <!-- Password -->
      <x-input id="password" type="password"
               name="password" required placeholder="Password"
               class="px-3 w-full py-2 bg-gray-200 border border-gray-200 rounded focus:border-gray-400 focus:outline-none focus:bg-white mb-4 {{ $errors->has('password') ? ' border-red-500' : '' }}"
      />

      <!-- Remember Me -->
      <div class="block">
        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
          <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
      </div>

      <div class="flex flex-wrap items-center">
        <div class="w-full sm:flex-1">
          <x-button class="w-full sm:w-auto bg-indigo-500 text-indigo-100 px-6 py-2 rounded hover:bg-indigo-600 focus:outline-none cursor-pointer">
            {{ __('Log in') }}
          </x-button>
        </div>
        <div class="text-sm text-gray-500 hover:text-gray-700 pt-4 sm:p-0">
          <a href="{{ route('password.request') }}">Forgot password?</a>
        </div>
      </div>

      <p class="w-full text-xs text-left text-gray-700 mt-8">
        Don't have an account?
        <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
          Register
        </a>
      </p>

    </x-auth-card-layout>
</x-guest-layout>
