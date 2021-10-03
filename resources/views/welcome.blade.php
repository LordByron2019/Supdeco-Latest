<x-user-layout>
    <x-slot name="header">
        <div class="h-full grid place-items-center place-content-center pt-20">
            <div class="w-3/4 space-y-10 flex flex-col items-center text-white uppercase font-extrabold">
                <div class="">
                    <div class="">
                        <h1 class="text-5xl text-center tracking-tight leading-normal text-yellow-500">Lorem ipsum dolor sit amet, consectetur.</h1>
                    </div>

                    <div class="text-center">
                        <p class="text-xl tracking-tight leading-normal">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Beatae cupiditate dolores expedita illum impedit modi odit quis repellendus? Eligendi, voluptatibus.
                        </p>
                    </div>
                </div>

                <div class="">
                    <a href="{{route('admissions.index')}}" class="px-6 py-3 uppercase border border-yellow-600 bg-yellow-600 hover:bg-transparent transition duration-400 ease-in">Admissions</a>
                </div>
            </div>
        </div>
    </x-slot>

    <section id="formation" class="relative">
        <div class="flex flex-col items-center space-y-10 my-20 px-28">
            {{--Section Title--}}
            <div class="border-b-4 border-yellow-600 pb-1">
                <h1 class="text-3xl font-medium uppercase">Nos formations</h1>
            </div>
            {{--Section Title end--}}

            {{--Section Description--}}
            <div class="">
                <p class="text-md font-medium uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis ipsam minus!</p>
            </div>
            {{--Section Description end--}}

            {{--Section content--}}
            <div class="space-y-12">
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
                <div class="text-center">
                    <a href="{{route('formations.index')}}"
                       class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Voir Plus</a>
                </div>
            </div>
            {{--Section content end--}}


        </div>
    </section>

    <section id="about"
             style="
                 background-image: url({{asset('images/home-img.jpg')}});
                 background-repeat: no-repeat;
                 background-position: center;
                 background-size: cover;"
             class="relative">
        <div class="grid grid-cols-3 space-x-10 space-y-10 my-20 py-16 px-28 bg-blue-600 bg-opacity-80">
            {{--Section Title--}}
            <div class="">
                <div class="">
                    <h1 class="text-2xl text-white font-medium uppercase">A Propos de notre université</h1>
                    <div class="flex justify-start py-1">
                        <div class="w-1/2 border-b-4 border-yellow-600"></div>
                    </div>
                </div>
            </div>
            {{--Section Title end--}}

            {{--Section content--}}
            <div class="col-span-2">
                <p class="text-xl text-white text-opacity-75 tracking-10">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci alias aperiam asperiores consectetur,
                    deleniti error fugit ipsa ipsam libero magnam molestias non pariatur,
                    porro possimus provident quibusdam, reiciendis repellendus temporibus.
                    Ab beatae corporis eaque earum explicabo facere fuga inventore maxime nisi,
                    officiis quidem quo voluptate, voluptates.
                    Accusantium architecto aut cumque deleniti eos et exercitationem hic inventore minus
                    necessitatibus possimus ratione rerum similique sit, sunt tempora tenetur totam! Animi
                    aperiam atque consequuntur corporis culpa eveniet fugit in, incidunt ipsa iusto
                    laboriosam magnam magni modi molestias necessitatibus nihil nostrum odit
                    placeat porro quasi recusandae rerum saepe sit ut vel
                    veniam vero voluptatum!
                </p>
            </div>
            {{--Section content end--}}
        </div>
    </section>

    <section id="partners" class="relative">
        <div class="flex flex-col items-center space-y-10 my-20 px-28">
            {{--Section Title--}}
            <div class="border-b-4 border-yellow-600 pb-1">
                <h1 class="text-3xl font-medium uppercase">Nos partenaires</h1>
            </div>
            {{--Section Title end--}}

            {{--Section Description--}}
            <div class="">
                <p class="text-md font-medium uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis ipsam minus!</p>
            </div>
            {{--Section Description end--}}

            {{--Section content--}}
            <div class="">
                <div class="flex space-x-4">
                    <a href="/">
                        <x-application-logo class="w-12 h-12 fill-current text-black"/>
                    </a>
                    <a href="/">
                        <x-application-logo class="w-12 h-12 fill-current text-black"/>
                    </a>
                </div>
            </div>
            {{--Section content end--}}


        </div>
    </section>
</x-user-layout>

