@props(['isFiliere', 'action', 'parcours'])

<div class="w-2/3 bg-white mx-auto my-auto space-y-5">
    <div class="w-full bg-white py-5 shadow-md text-center ">
        <h2 class="uppercase text-xl font-extrabold">
            {{$header}}
        </h2>
    </div>

    <div class="w-full h-full grid">
        <div class="w-2/3 place-self-center py-5">
            <form action="{{route($action)}}" class="space-y-5" method="post">
                @csrf
                @method('POST')
                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                @if($isFiliere)
                    <div>
                        <x-label for="years" :value="__('Durée')" />

                        <x-input id="years" class="block mt-1 w-full" type="number" min="1" max="99" name="years" :value="old('years')" required autofocus />
                    </div>

                    <div>
                        <x-label for="parcour" :value="__('Parcour')" />

                        <select name="parcour"
                                class="block mt-1 w-full rounded-md
                                shadow-sm border-gray-300 focus:border-indigo-300
                                focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="parcour">
                            @foreach($parcours as $parcour)
                                <option value="{{$parcour->id}}">{{$parcour->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div>
                    <x-label for="description" :value="__('Description')" />

                    <x-texterea id="description" class="block mt-1 w-full" name="description" :value="old('description')" required autofocus />
                </div>

                <div class="flex justify-end items-center space-x-2">
                    <x-button type="submit" class="uppercase">Save</x-button>
                    <x-button type="button" class="uppercase bg-red-500 hover:bg-red-600">back</x-button>
                </div>
            </form>
        </div>
    </div>
</div>
