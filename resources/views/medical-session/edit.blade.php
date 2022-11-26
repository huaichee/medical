<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Session') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                            <form method="POST" action="{{ route('medical-session.update', $medicalSession->id) }}">
                                @csrf
                                @method('put')
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
                                        Medication Date
                                    </label>

                                    <input value="{{ $medicalSession->medication_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date" placeholder="Date" name="medication_date">
                                    @error('medication_date')
                                        <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="remark" class="block text-gray-700 text-sm font-bold mb-2">Remark</label>
                                    <textarea id="remark" name="remark" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 " placeholder="Write your thoughts here...">{{ $medicalSession->remark }}</textarea>
                                </div>

                                <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                        {{ __('Update Session') }}
                                </x-button>

                                <a href="{{ route('medical-session.show', $medicalSession->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" >Back</a>
                            </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
