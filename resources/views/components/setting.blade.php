@props(['heading'])

<section {{ $attributes(['class' => 'mx-auto py-8']) }}>
    <nav class="md:flex md:justify-between md:items-center mb-8 pb-2 border-b">

        <h1 class="text-lg font-bold text-red-500">
            {{ $heading }}
        </h1>
        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <div class="space-x-2">
                    <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>

                    <a class="text-xs font-bold uppercase"
                       href="#"
                       x-data="{}"
                       @click.prevent="document.querySelector('#logout-form').submit();"
                    >Log Out</a>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </div>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-5 text-xs font-bold uppercase">Log In</a>
            @endauth

        </div>
    </nav>

    <div class="flex">
        <aside class="w-48 flex-shrink-0 pr-2">
            <div x-data="{ show: false }" @click.away="show = false">
                <button @click="show = ! show"
                        class="py-1 px-10 border border-gray-100 rounded-xl shadow w-36"
                >Links
                </button>

                <div class="absolute py-2 bg-gray-100 rounded-xl mt-1 w-36 space-y-0"
                     x-show="show"
                     x-transition:enter="transition duration-250 transform"
                     x-transition:enter-start="scale-80 opacity-50"
                     x-transition:leave="transition duration-200 transform"
                     x-transition:leave-end="scale-90 opacity-0"
                >
                    @auth
                        <a href="/people/create"
                            @class([
                                 'block hover:bg-green-600 hover:text-white text-sm px-4 py-1',
                                 'text-green-800 bg-green-50' => request()->is('people/create')
                             ])
                        >Create Person</a>
                    @endauth
                    <a href="{{ route('people.index') }}"
                        @class([
                             'block hover:bg-green-600 hover:text-white text-sm px-4 py-1',
                             'text-green-800 bg-green-50' => request()->is('people')
                         ])
                    >Manage People</a>
                    <a href="/dashboard"
                        @class([
                             'block hover:bg-green-600 hover:text-white text-sm px-4 py-1',
                             'text-green-800 bg-green-50' => request()->is('dashboard')
                         ])
                    >Dashboard</a>
                </div>
            </div>
        </aside>

        <main class="flex-1 pl-2">
            <x-panel>

                {{ $slot }}

            </x-panel>
        </main>
    </div>
</section>
