<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Body Position') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                            <form method="POST" action="{{ route('body-position') }}">
                                @csrf
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Body Position Name
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Body Position Name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 " placeholder="Description...">{{ old('description') }}</textarea>
                                </div>

                                <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                        {{ __('Add New Body Position') }}
                                </x-button>
                            </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
