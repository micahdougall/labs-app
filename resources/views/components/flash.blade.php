@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed py-2 px-4 rounded bg-blue-500 text-white rounded-xl text-sm bottom-3 right-3">
        <p>{{ session('success') }}</p>
    </div>
@endif
