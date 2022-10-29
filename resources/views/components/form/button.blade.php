<x-form.field>
    <div class="flex space-x-2 justify-center">
        <button
            type="submit"
            class="px-6 py-2 text-xs rounded shadow-md
            text-white font-semibold uppercase
            bg-green-600 hover:bg-green-700 focus:outline-none focus:ring hover:shadow-lg"
        >
            {{ $slot }}
        </button>
    </div>
</x-form.field>

