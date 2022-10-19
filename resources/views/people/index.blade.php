<x-layout>
    <x-setting heading="Manage People">
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
                                        <a href="/admin/posts/{{ $person->id }}/edit"
                                           class="text-xs leading-5 font-semibold text-gray-800 rounded-lg bg-gray-100 hover:text-green-700 hover:bg-green-50 px-3 py-1">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form method="POST" action="/admin/posts/{{ $person->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="inline-flex text-xs leading-5 font-semibold text-gray-400 hover:text-red-800 px-2">
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
