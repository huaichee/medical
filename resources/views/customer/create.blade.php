<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                            <form method="POST" action="{{ route('customer') }}">
                                @csrf
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Customer Name
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Customer Name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-6">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                                        Age
                                    </label>
                                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="1" id="age" type="number" placeholder="Age" name="age" value="{{ old('age') }}">
                                    @error('age')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                        Phone
                                    </label>
                                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                                    @error('age')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Select gender</label>
                                    <select id="gender" name="gender"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option selected value disabled>Choose a GENDER</option>
                                        <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>MALE</option>
                                        <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>FEMALE</option>
                                    </select>
                                    @error('gender')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="remark" class="block text-gray-700 text-sm font-bold mb-2">Remark</label>
                                    <textarea id="remark" name="remark" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 " placeholder="Write your thoughts here...">{{ old('remark') }}</textarea>
                                </div>

                                <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                        {{ __('Add New Customer') }}
                                </x-button>
                            </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
