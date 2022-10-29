@props(['heading'])

<section class="min-w-4xl max-w-6xl mx-auto py-8">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b text-red-500">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0 pr-2">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/people/create"
                       class="{{ request()->is('people/create') ? 'text-green-700' : '' }}"
                    >Create Person</a>
                </li>
                <li>
                    <a href="/people"
                       class="{{ request()->is('people') ? 'text-green-700' : '' }}"
                    >Manage People</a>
                </li>
                <li>
                    <a href="/dashboard"
                       class="{{ request()->is('dashboard') ? 'text-green-700' : '' }}"
                    >Dashboard</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>

                {{ $slot }}

            </x-panel>
        </main>
    </div>
</section>
