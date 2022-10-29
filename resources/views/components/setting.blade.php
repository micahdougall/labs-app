@props(['heading'])

<section {{ $attributes(['class' => 'mx-auto py-8']) }}>
    <h1 class="text-lg font-bold mb-8 pb-2 border-b text-red-500">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0 pr-2">
            <div x-data="{ show: false }" @click.away="show = false">
                <button @click="show = ! show"
                        class="py-1 px-10 border border-gray-100 rounded-xl shadow w-36"
                >Links</button>

                <div class="absolute py-2 bg-gray-100 rounded-xl mt-1 w-36 space-y-0"
                     x-show="show"
                     x-transition:enter="transition duration-250 transform"
                     x-transition:enter-start="scale-80 opacity-50"
                     x-transition:leave="transition duration-200 transform"
                     x-transition:leave-end="scale-90 opacity-0"
                 >
                    <a href="/people/create"
                       @class([
                            'block hover:bg-green-600 hover:text-white text-sm px-4 py-1',
                            'text-green-800 bg-green-50' => request()->is('people/create')
                        ])
                    >Create Person</a>
                    <a href="/people"
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
