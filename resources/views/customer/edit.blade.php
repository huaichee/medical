<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                            <form method="POST" action="{{ route('customer.update', $customer->id) }}">
                                @csrf
                                @method('put')
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Customer Name
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Customer Name" name="name" value="{{ $customer->name }}">
                                    @error('name')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-6">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                                        Age
                                    </label>
                                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="1" id="age" type="number" placeholder="Age" name="age" value="{{ $customer->age }}">
                                    @error('age')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                        Phone
                                    </label>
                                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Phone" name="phone" value="{{ $customer->phone }}">
                                    @error('age')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Select gender</label>
                                    <select id="gender" name="gender" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option selected value disabled>Choose a GENDER</option>
                                        <option value="1" {{ $customer->gender == 1 ? 'selected' : '' }}>MALE</option>
                                        <option value="2" {{ $customer->gender == 2 ? 'selected' : '' }}>FEMALE</option>
                                    </select>
                                    @error('gender')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="remark" class="block text-gray-700 text-sm font-bold mb-2">Remark</label>
                                    <textarea id="remark" name="remark" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 " placeholder="Write your thoughts here...">{{ $customer->remark }}</textarea>
                                </div>

                                <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                        {{ __('Update Customer') }}
                                </x-button>

                                <a href="{{ route('customer.show', $customer->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" >Back</a>
                            </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
