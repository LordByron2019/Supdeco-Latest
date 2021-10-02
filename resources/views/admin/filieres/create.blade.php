<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une filière') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    <x-form.modal.create action="filieres.store" :isFiliere="true" :parcours="$parcours">
                        <x-slot name="header">
                            Ajouter
                        </x-slot>
                    </x-form.modal.create>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
