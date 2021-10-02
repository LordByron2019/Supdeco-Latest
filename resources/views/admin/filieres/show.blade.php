<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Filiere') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    <div class="text-center shadow py-5 space-y-2">
                        <h2 class="text-2xl font-extrabold text-blue-600">{{$filiere->name}}</h2>
                        <h5 class="uppercase font-bold">{{$filiere->years}} an(s)</h5>
                    </div>
                    <div class="px-20">
                        <p class="text-lg text-gray-500">
                            {{$filiere->description}}
                        </p>
                    </div>

                    <div class="flex justify-end items-center space-x-2">
                        <x-link href="{{url()->previous()}}" class="uppercase bg-gray-500 hover:bg-gray-600">back</x-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
