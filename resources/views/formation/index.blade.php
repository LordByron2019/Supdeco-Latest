<x-user-layout class="h-[50vh]">
    <x-slot name="header">
        <x-o-header
            :title="__('Lorem ipsum dolor')"
            description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
    </x-slot>

    <section id="formation" class="relative">
        <div class="flex flex-col items-center space-y-10 my-20 px-28">
            {{--Section content--}}
            <div class="">
                <div class="grid grid-cols-4 gap-8">
                    @foreach($filieres as $filiere)
                        <div class="w-full shadow-lg bg-white bg-opacity-60">
                            <div class="h-60 relative">
                                <img src="{{asset('images/home-img.jpg')}}" alt="" class="w-full h-full">
                                <div class="absolute inset-0 bg-blue-600 bg-opacity-30 flex items-end">
                                    <div class="py-3 px-2 w-full bg-blue-600 bg-opacity-95 relative">
                                        <div class="w-4/5">
                                            <h3 class="text-lg font-extrabold text-white uppercase">{{$filiere->parcour->name}}</h3>
                                            <div class="absolute -top-8 right-0 inline p-3 bg-yellow-600 bg-opacity-95">
                                                <span class="uppercase text-md text-white">{{$filiere->years}} an(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5 px-2 space-y-5">
                                <h1 class="text-2xl text-center font-medium line-clamp-2">{{$filiere->name}}</h1>
                                <p class="text-center text-md line-clamp-3">
                                    {{$filiere->description}}
                                </p>

                                <div class="text-center py-2">
                                    <a href="{{route('formations.show', $filiere)}}"
                                       class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Consulter</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--Section content end--}}


        </div>
    </section>

</x-user-layout>
