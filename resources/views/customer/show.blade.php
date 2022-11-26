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
                            <div class="col">Age</div>
                            <div class="col">Session</div>
                            <div class="col">Last Visit</div>
                        </div>
                        <div class="grid grid-cols-5 gap-5">
                            <div class="col">{{ $customer->age }}</div>
                            <div class="col">{{ $customer->medicalSessions->count() }}</div>
                            <div class="col">{{ $customer->medicalSessions->isNotEmpty() ? $customer->medicalSessions->sortByDesc('medication_date')->first()->medication_date : '- Not Available -' }}</div>
                        </div>

                        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Remark</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $customer->remark ?? ' - No Remark -' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
