<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Customer') }}--}}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container">
                            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                                <a class="text-blue-600 hover:text-blue-700" href="{{ route('customer.show', $medicalSession->customer_id) }}">{{ $medicalSession->customer->name }}</a> {{  ' - ' . $medicalSession->medication_date }}</h1>
                            <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 ">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Remark</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $medicalSession->remark ?? ' - No Remark -' }}</p>
                            </div>

                            <div class="text-right mt-2">
                                <a href="{{ route('medical-session.edit', $medicalSession->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                            </div>

                            <h2 class="text-4xl font-bold dark:text-white">Session</h2>
                            @include('medical-session.detail.index', ['details' => $medicalSession->medicalSessionDetails])
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
