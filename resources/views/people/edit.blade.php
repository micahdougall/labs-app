<x-layout>
    <x-setting :heading="'Edit Person' . $person->title">
        {{--        slot--}}
        <form method="POST" action="/people/{{ $person->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $person->title)"/>

            <x-form.input textarea name="First Name">{{ old('first_name', $person->firstName) }}</x-form.input>
            <x-form.input textarea name="Surname">{{ old('surname', $person->surname) }}</x-form.input>

            <x-form.field name="nationality">
            <x-form.label name="nationality"/>

{{--                <select name="nationality_id" id="nationality_id">--}}
{{--                    @foreach(App\Models\Nationality::all() as $nationality)--}}
{{--                        <option--}}
{{--                            value="{{ $nationality->id  }}"--}}
{{--                            {{ old('nationality_id', $person->nationality) == $nationality->id ? 'selected' : ''  }}--}}
{{--                        >{{ ucwords($nationality->name) }}--}}
{{--                        </option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}

                <x-form.error name="nationality"/>
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>

    </x-setting>
</x-layout>
