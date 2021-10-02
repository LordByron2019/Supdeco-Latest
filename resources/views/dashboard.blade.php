<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    <div class="flex justify-between items-center">
                        <x-link href="{{route('parcours.create')}}">
                            ajouter un parcour
                        </x-link>
                        <x-link href="{{route('filieres.create')}}">
                            ajouter une filière
                        </x-link>
                    </div>
                    <x-table>
                        <x-slot name="header">
                            <x-table.header>
                                {{ __('Liste de parcours') }}
                            </x-table.header>
                        </x-slot>
                        <x-slot name="head">
                            <x-table.row class="bg-gray-300">
                                <th class="w-1/4 py-3 px-5 text-left">Nom</th>
                                <th class="w-1/2 py-3 px-5 ">description</th>
                                <th class="w-1/4 py-3 px-5 text-right">Actions</th>
                            </x-table.row>
                        </x-slot>
                        <tbody>
                        @forelse($parcours as $parcour)
                            <x-table.row class="bg-gray-100">
                                <x-table.ceil>{{$parcour->name}}</x-table.ceil>
                                <x-table.ceil>{{$parcour->description}}</x-table.ceil>
                                <x-table.ceil class="flex items-center justify-end space-x-2">
                                    <x-link href="{{route('parcours.edit', $parcour)}}" class="bg-blue-500 hover:bg-blue-600">
                                        up
                                    </x-link>
                                    <x-link href="{{route('parcours.show', $parcour)}}" class="bg-green-500 hover:bg-green-600">
                                        up
                                    </x-link>
                                    <x-link href="{{route('parcours.destroy', $parcour)}}" class="bg-red-500 hover:bg-red-600">
                                        up
                                    </x-link>
                                </x-table.ceil>
                            </x-table.row>
                        @empty
                            <x-table.row class="bg-gray-100">
                                <x-table.ceil>Intro to CSS</x-table.ceil>
                                <x-table.ceil>Adam</x-table.ceil>
                                <x-table.ceil class="flex items-center justify-end space-x-2">
                                    <x-link href="/dashboard" class="bg-blue-500 hover:bg-blue-600">
                                        up
                                    </x-link>
                                    <x-link href="/dashboard" class="bg-green-500 hover:bg-green-600">
                                        up
                                    </x-link>
                                    <x-link href="/dashboard" class="bg-red-500 hover:bg-red-600">
                                        up
                                    </x-link>
                                </x-table.ceil>
                            </x-table.row>
                        @endforelse
                        </tbody>
                    </x-table>

                    <div class="">
                        <x-table>
                            <x-slot name="header">
                                <x-table.header>
                                    {{ __('Liste de Filières') }}
                                </x-table.header>
                            </x-slot>
                            <x-slot name="head">
                                <x-table.row class="bg-gray-300">
                                    <th class="w-1/4 py-3 px-5 text-left">Nom</th>
                                    <th class="w-1/2 py-3 px-5 ">description</th>
                                    <th class="w-1/4 py-3 px-5 text-left">Parcour</th>
                                    <th class="w-1/4 py-3 px-5 text-right">Actions</th>
                                </x-table.row>
                            </x-slot>
                            <tbody>
                            @forelse($filieres as $filiere)
                                <x-table.row class="bg-gray-100">
                                    <x-table.ceil>{{$filiere->name}}</x-table.ceil>
                                    <x-table.ceil>{{$filiere->description}}</x-table.ceil>
                                    <x-table.ceil>{{$filiere->parcour->name}}</x-table.ceil>
                                    <x-table.ceil class="flex items-center justify-end space-x-2">
                                        <x-link href="{{route('filieres.edit', $filiere)}}" class="bg-blue-500 hover:bg-blue-600">
                                            up
                                        </x-link>
                                        <x-link href="{{route('filieres.show', $filiere)}}" class="bg-green-500 hover:bg-green-600">
                                            up
                                        </x-link>
                                        <x-link href="{{route('filieres.destroy', $filiere)}}" class="bg-red-500 hover:bg-red-600">
                                            up
                                        </x-link>
                                    </x-table.ceil>
                                </x-table.row>
                            @empty
                                <x-table.row class="bg-gray-100">
                                    <x-table.ceil>Intro to CSS</x-table.ceil>
                                    <x-table.ceil>Adam</x-table.ceil>
                                    <x-table.ceil class="flex items-center justify-end space-x-2">
                                        <x-link href="/dashboard" class="bg-blue-500 hover:bg-blue-600">
                                            up
                                        </x-link>
                                        <x-link href="/dashboard" class="bg-green-500 hover:bg-green-600">
                                            up
                                        </x-link>
                                        <x-link href="/dashboard" class="bg-red-500 hover:bg-red-600">
                                            up
                                        </x-link>
                                    </x-table.ceil>
                                </x-table.row>
                            @endforelse
                            </tbody>
                        </x-table>
                        <div class="my-2 py-3">
                            {{ $filieres->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
