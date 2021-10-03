<x-user-layout class="h-[50vh]">
    <x-slot name="header">
        <x-o-header :title="__('Formation en ' . $filiere->name .' '. $filiere->years )" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eveniet numquam ut"/>
    </x-slot>

    <section id="formation" class="relative">
        <div class="flex flex-col items-center space-y-10 my-20 px-28">

            {{--Section content--}}
            <div class="w-full">
                <div class="grid grid-cols-2 gap-12">
                    <div class="">
                        <img src="{{asset('images/home-img.jpg')}}" alt="" class="w-full h-full">
                    </div>
                    <div class="space-y-8">
                        <div class="">
                            <h1 class="text-4xl font-extrabold text-black">{{$filiere->name}}</h1>
                        </div>
                        <div class="">
                            <p class="">{{$filiere->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--Section content end--}}

        </div>
    </section>
</x-user-layout>
