<x-user-layout class="h-[50vh]">
    <x-slot name="header">
        <div class="h-full grid place-items-center place-content-center pt-20">
            <div class="w-full space-y-10 flex flex-col items-center text-white uppercase font-extrabold">
                <h1 class="text-3xl text-center tracking-wider leading-normal">Contactez-nous</h1>
            </div>
        </div>
    </x-slot>

    <section id="contact" class="relative">
        <div class="flex flex-col items-center space-y-10 my-20 px-28">
            {{--Section Description--}}
            <div class="">
                <p class="text-md font-medium uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis ipsam minus!</p>
            </div>
            {{--Section Description end--}}

            {{--Section content--}}
            <div class="w-full">
                <form action="" class="space-y-5">
                    <div class="grid grid-cols-2 gap-8">
                        <!-- Prenom -->
                        <div>
                            <x-label for="first_name" :value="__('Prenom')" />

                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                        </div>

                        <!-- Nom -->
                        <div>
                            <x-label for="last_name" :value="__('Nom')" />

                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-label for="phone" :value="__('Telephone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
                        </div>

                        {{--Message--}}
                        <div class="col-span-2">
                            <x-label for="description" :value="__('Description')" />

                            <x-texterea id="description" rows="7" class="block mt-1 w-full" name="description" :value="old('description')" required autofocus />
                        </div>
                    </div>
                    <div class="">
                        <button type="submit"
                           class="text-white px-12 py-3 uppercase border border-yellow-600
                               bg-yellow-600 font-bold hover:text-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in rounded">envoyer le message</button>
                    </div>
                </form>
            </div>
            {{--Section content end--}}

        </div>
    </section>
</x-user-layout>
