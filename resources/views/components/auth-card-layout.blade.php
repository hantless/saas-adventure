@props(['routeName', 'title', 'subtitle'])

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<div class="flex h-screen bg-gray-200 p-4 rotate">
    <div class="sm:max-w-xl md:max-w-2xl w-full m-auto">
        <form method="POST" action="{{ route($routeName) }}" class="flex items-stretch bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-indigo-500 sm:border-0">
            @csrf
            <div class="flex hidden overflow-hidden relative sm:block w-5/12 md:w-6/12 bg-gray-600 text-gray-300 py-4 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
                <div class="flex-1 absolute bottom-0 text-white p-10">
                    <h3 class="text-4xl font-bold inline-block">{{ $title }}</h3>
                    <p class="text-gray-500 whitespace-no-wrap">
                        {{ $subtitle }}
                    </p>
                </div>
                <svg class="absolute animate h-full w-4/12 sm:w-2/12 right-0 inset-y-0 fill-current text-white" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <polygon points="0,0 100,100 100,0">
                </svg>
            </div>
            <div class="flex-1 p-6 sm:p-10 sm:py-12">
                {{ $slot }}
            </div>
        </form>
    </div>
</div>
