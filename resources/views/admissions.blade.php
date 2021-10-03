<x-user-layout class="h-[50vh]">
    <x-slot name="header">
        <x-o-header
            :title="__('Admission')"
            description="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
    </x-slot>

    <section id="contact" class="relative">
        <div class="flex flex-col items-center space-y-10 my-20 px-28">
            {{--Section content--}}
            <div class="w-full">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form action="{{route('admissions.store')}}" method="post" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-2 gap-8">
                        <!-- Prenom -->
                        <div>
                            <x-label for="first_name" :value="__('Prenom')" />

                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"  autofocus />
                        </div>

                        <!-- Nom -->
                        <div>
                            <x-label for="last_name" :value="__('Nom')" />

                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"  autofocus />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autofocus />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-label for="phone" :value="__('Telephone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"  autofocus />
                        </div>

                        {{--Filiere--}}
                        <div class="col-span-2">
                            <x-label for="filiere" :value="__('Filiere')" />

                            <select name="filiere"
                                    class="block mt-1 w-full rounded-md
                                shadow-sm border-gray-300 focus:border-indigo-300
                                focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    id="filiere">
                                @foreach($filieres as $filiere)
                                    <option value="{{$filiere->id}}">{{$filiere->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{--Message--}}
                        <div class="col-span-2">
                            <x-label for="description" :value="__('A propos de vous (optionel)')" />

                            <x-texterea id="description" rows="7" class="block mt-1 w-full" name="description" :value="old('description')"  autofocus />
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
