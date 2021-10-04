<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    <div class="">
                        <x-table>
                            <x-slot name="header">
                                <x-table.header>
                                    {{ __('Liste des Admissions') }}
                                </x-table.header>
                            </x-slot>
                            <x-slot name="head">
                                <x-table.row class="bg-gray-300">
                                    <th class="w-1/4 py-3 px-5 text-left capitalize">Nom</th>
                                    <th class="w-1/2 py-3 px-5  capitalize text-left">email</th>
                                    <th class="w-1/2 py-3 px-5  capitalize text-left">phone</th>
                                    <th class="w-1/4 py-3 px-5 text-left capitalize">date</th>
                                    <th class="w-1/4 py-3 px-5 text-right capitalize">Actions</th>
                                </x-table.row>
                            </x-slot>
                            <tbody>
                            @forelse($admissions as $admission)
                                <x-table.row class="bg-gray-100">

                                    <x-table.ceil>{{$admission->last_name}}</x-table.ceil>
                                    <x-table.ceil>{{$admission->email}}</x-table.ceil>
                                    <x-table.ceil>{{$admission->phone}}</x-table.ceil>
                                    <x-table.ceil>{{$admission->created_at->diffForHumans()}}</x-table.ceil>
                                    <x-table.ceil class="flex items-center justify-end space-x-2">
                                        <x-link href="{{route('dashboard.admission.show', $admission)}}" class="bg-green-500 hover:bg-green-600">
                                            up
                                        </x-link>
                                    </x-table.ceil>
                                </x-table.row>
                            @empty
                                <x-table.row class="bg-gray-100">
                                    <th class="w-1/4 py-3 px-5 text-left capitalize">Nom</th>
                                    <th class="w-1/2 py-3 px-5  capitalize">email</th>
                                    <th class="w-1/2 py-3 px-5  capitalize">phone</th>
                                    <th class="w-1/4 py-3 px-5 text-left capitalize">date</th>
                                    <th class="w-1/4 py-3 px-5 text-right capitalize">Actions</th>
                                </x-table.row>
                            @endforelse
                            </tbody>
                        </x-table>
                        <div class="my-2 py-3">
                            {{ $admissions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
