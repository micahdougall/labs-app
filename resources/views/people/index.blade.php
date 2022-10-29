<x-layout>
    <x-setting heading="Manage People" class="max-w-6xl">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($people as $person)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-semibold text-gray-500 hover:text-gray-900">
                                                <a href="/people/{{ $person->id }}">
                                                    {{ $person->title . ' ' . $person->first_name . ' ' . $person->surname }}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2">
{{--                                            <div class="flex text-sm font-medium text-gray-900 space-x-1">--}}
                                                @foreach($person->nationalities as $nationality)
                                                    <x-nationality-button :nationality="$nationality"/>

{{--                                                <a href="/?category={{ $person->nationalities->first() }}">--}}
{{--                                                        {{ $loop->last ? $nationality->name : $nationality->name . '/' }}--}}
                                                @endforeach
{{--                                                </a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </td>
{{--                                    <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                            <span--}}
{{--                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">--}}
{{--                                                Live--}}
{{--                                            </span>--}}
{{--                                    </td>--}}
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="/people/{{ $person->id }}/edit"
                                           class="px-4 py-1 text-xs leading-5 font-semibold rounded shadow-sm
                                           text-gray-800 bg-gray-100 uppercase
                                           hover:bg-green-700 hover:text-white focus:ring hover:shadow-lg">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/people/{{ $person->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="inline-flex px-3 text-xs leading-5 font-semibold uppercase
                                                    text-gray-400 hover:text-red-800 hover:font-extrabold">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>
