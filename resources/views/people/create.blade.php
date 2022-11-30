<x-layout>
    <x-setting heading="Create New Person" class="max-w-3xl">
        <form method="POST" action="/people" enctype="multipart/form-data"
            x-data="{
                nationalities: {{ $nationalities }}
            }"
        >
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="first_name"/>
            <x-form.input name="surname"/>
            <x-form.input name="address"/>

            <x-form.field>
                <x-form.label name="Nationalities"/>
                <div class="flex space-x-2">
                    @foreach($nationalities as $nationality)
                        <x-form.nationality-select :nationality="$nationality"/>
                    @endforeach
                </div>
            </x-form.field>

            <x-form.button>Add</x-form.button>
        </form>
    </x-setting>
</x-layout>

