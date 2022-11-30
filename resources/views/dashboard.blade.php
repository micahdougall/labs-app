<x-layout>
    <li>
        @foreach(\App\Models\Person::all() as $person)
            <p>{{ $person->first_name }}</p>
        @endforeach
    </li>
</x-layout>
