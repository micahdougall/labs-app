<!doctype html>

<title>CSF304 Web Apps with Laravel</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="/js/app.js"></script>


<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-center md:items-center">
        <div>
            <a href="/">
                <img src="/images/logomark.min.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
{{--        </div>--}}
{{--        <div class="mt-8 md:mt-0 flex items-center">--}}
{{--            @auth--}}
{{--                <x-dropdown>--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>--}}
{{--                    </x-slot>--}}

{{--                    @admin--}}
{{--                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Manage Posts--}}
{{--                    </x-dropdown-item>--}}
{{--                    <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post--}}
{{--                    </x-dropdown-item>--}}
{{--                    <x-dropdown-item href="/admin/dashboard">Dashboard</x-dropdown-item>--}}
{{--                    @endadmin--}}

{{--                    <x-dropdown-item href="#"--}}
{{--                                     x-data="{}"--}}
{{--                                     @click.prevent="document.querySelector('#logout-form').submit();"--}}
{{--                    >Log Out--}}
{{--                    </x-dropdown-item>--}}
{{--                    <form id="logout-form" method="POST" action="/logout" class="hidden">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </x-dropdown>--}}

{{--            @else--}}
{{--                <a href="/register" class="text-xs font-bold uppercase">Register</a>--}}
{{--                <a href="/login" class="ml-5 text-xs font-bold uppercase">Log In</a>--}}
{{--            @endauth--}}

{{--        </div>--}}
    </nav>

    {{ $slot }}

    <footer
        id="newsletter"
        class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <div class="flex-1">
            <p class="text-sm mb-0   text-gray-400">made with</p>
            <a href="/" class="inline-flex items-center">
                <img src="/images/logomark.min.svg" alt="Laravel" class="w-12" width="50" height="52">
                <img src="/images/logotype.min.svg" alt="Laravel" class="ml-5 sm:block" width="114" height="29">
            </a>
        </div>
        <x-flash/>

    </footer>
</section>
</body>
