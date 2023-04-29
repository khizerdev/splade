<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  p-5">

            <Link href="{{route('projects.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Project</Link>
                
            <div class="relative overflow-x-auto pt-10">
                <x-splade-table :for="$projects" class="min-w-full">
                    <x-splade-cell actions>
                        <Link href="{{ route('projects.edit', $item) }}">Edit</Link>
                        <x-splade-form action="{{ route('projects.destroy', $item) }}" method="delete" confirm>
                            <x-splade-submit label="Delete" class="bg-red-500 text-white" />
                        </x-splade-form>
                    </x-splade-cell>
                </x-splade-table>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>
