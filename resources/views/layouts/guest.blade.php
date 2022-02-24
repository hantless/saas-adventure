<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <div class="font-sans bg-gray-100 antialiased flex justify-end">
    <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 px-4 py-2">Login</a>
    <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 px-4 py-2">Register</a>
  </div>
  <div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
  </div>
</body>
</html>