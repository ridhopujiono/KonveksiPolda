<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
            <div class="bg-teal-300 rounded-lg py-5 px-6 mb-4 text-base text-slate-800 mb-3" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="flex" style="gap: 10px;">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, labore!
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, labore!
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, labore!
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, labore!
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
