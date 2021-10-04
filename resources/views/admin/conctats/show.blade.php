<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    <div class="flex items-center justify-between shadow py-5 space-y-2">
                        <div class="flex items-center space-x-4">
                            <h2 class="text-xl uppercase font-bold">{{$message->first_name}}</h2>
                            <h5 class="text-xl uppercase font-bold">{{$message->last_name}}</h5>
                        </div>
                        <div class="flex items-center divide-x-2 divide-gray-400">
                            <h2 class="uppercase font-bold pr-2">{{$message->phone}}</h2>
                            <h2 class="uppercase font-bold pl-2">{{$message->email}}</h2>
                        </div>
                    </div>
                    <div class="px-20">
                        <p class="text-lg text-gray-500">
                            {{$message->description}}
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
