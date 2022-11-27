<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container">
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">{{ $customer->name }}</h1>

                        <div class="grid grid-cols-5 gap-5 border-b font-bold">
                            <div class="">Age</div>
                            <div class="">Phone</div>
                            <div class="">Gender</div>
                            <div class="">Session</div>
                            <div class="">Last Visit</div>
                        </div>
                        <div class="grid grid-cols-5 gap-5">
                            <div class="">{{ $customer->age }}</div>
                            <div class="">{{ $customer->phone }}</div>
                            <div class="">{{ $customer->gender == 1 ? 'Male' : 'Female' }}</div>
                            <div class="">{{ $customer->medicalSessions->count() }}</div>
                            <div class="">{{ $customer->medicalSessions->isNotEmpty() ? $customer->medicalSessions->sortByDesc('medication_date')->first()->medication_date : '- Not Available -' }}</div>
                        </div>

                        <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 ">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Remark</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $customer->remark ?? ' - No Remark -' }}</p>
                        </div>
                        <div class="text-right mt-2">
                            <a href="{{ route('customer.edit', $customer->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                        </div>

                        <h2 class="text-4xl font-bold dark:text-white">Session</h2>
                        @include('customer.medical.index', ['medicalSessions' => $customer->medicalSessions->sortByDesc('medication_date')])
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
