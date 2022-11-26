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
                        <form method="POST" action="{{ route('medical-session-detail.store', $medicalSession->id) }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="body_position_id">
                                    Body Position
                                </label>

                                <select id="body_position_id" name="body_position_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option selected value disabled>Choose a body position</option>
                                    @foreach($bodyPositions as $bodyPosition)
                                        <option value="{{ $bodyPosition->id }}" {{ old('body_position_id') == $bodyPosition->id ? 'selected' : '' }}>{{ $bodyPosition->name }}</option>
                                    @endforeach
                                </select>

                                @error('body_position_id')
                                    <div class="alert alert-danger text-red-700">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Note</label>
                                <textarea id="note" name="note" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 " placeholder="Write your thoughts here...">{{ old('note') }}</textarea>
                            </div>

                            <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                {{ __('Add New Detail') }}
                            </x-button>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
