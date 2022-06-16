<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Додати
                    </button>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-auto border text-center w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 border-r">
                                    Номер
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 border-r">
                                    Прізвище
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 border-r">
                                    Ім'я
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 border-r">
                                    Стать
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 border-r">
                                    Вік
                                </th>
                                <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 border-r">
                                    Дія
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr class="border-b">
                                <td class="text-sm font-bold text-gray-900 px-6 py-4 border-r whitespace-nowrap">
                                    {{ $student->id }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ $student->last_name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ $student->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    @if ($student->sex === config('student.sex.male'))
                                        {{ config('student.display.male') }}
                                    @else
                                        {{ config('student.display.female') }}
                                    @endif
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    {{ date('Y') - $student->birth }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
