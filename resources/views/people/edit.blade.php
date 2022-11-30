<x-layout>
    <x-setting :heading="'Edit ' . $person->title . ' ' . $person->first_name . ' ' . $person->surname" class="max-w-3xl">
        <form method="POST" action="/people/{{ $person->id }}" enctype="multipart/form-data"
            x-data="{
                nationalities: {{ $nationalities }},

                oldNationalities: {{ $person->nationalities }},

                name: 'test'
            }"
              x-modelable="name"
        >
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $person->title)"/>
            <x-form.input textarea name="First Name" :value="old('first_name', $person->first_name)"/>
            <x-form.input textarea name="Surname" :value="old('surname', $person->surname)"/>
            <x-form.input textarea name="Address" :value="old('address', $person->address)"/>


            <x-form.field>
                <x-form.label name="Nationalities"/>
                <div class="flex space-x-2">
                    @foreach($nationalities as $nationality)
                        <x-form.nationality-select :nationality="$nationality"/>
                    @endforeach
                </div>
            </x-form.field>

            <x-form.error name="nationality"/>

            <x-form.button>Update</x-form.button>
        </form>

    </x-setting>
</x-layout>
