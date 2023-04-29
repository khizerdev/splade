<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
            <div class="relative overflow-x-auto p-5">
                <x-splade-table :for="$users" class="min-w-full">
                    <x-splade-cell actions>
                        <Link modal href="/users/{{$item->id}}">Show Modal</Link> &nbsp; | &nbsp;
                        <Link slideover href="/users/{{$item->id}}">Show Slide</Link>
                    </x-splade-cell>
                </x-splade-table>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>
