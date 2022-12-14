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
                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <div class="flex justify-between items-center pb-4">
                                <div>
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-right float-right" href="{{ route('customer.create') }}">New Customer</a>
                                </div>
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative">
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-1 rounded text-right float-right" title="reset search" href="{{ route('customer') }}">
                                        <i class="fa-solid fa-rotate-left"></i>
                                    </a>
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input type="text" id="search" name="search" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for customers">
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                @if($customers->isNotEmpty())
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3 px-6">
                                                Customer Name
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Age
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Session Visited
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Last Visit
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                @endif

                                <tbody>
                                    @forelse ($customers as $customer)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <td class="py-4 px-6">
                                                <a href="{{ route('customer.show', $customer->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    {{ $customer->name }}
                                                </a>
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $customer->age }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $customer->medical_sessions_count }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $customer->last_visit ?? '- Not Available -' }}
                                            </td>
                                            <td class="py-4 px-6">
                                                <a href="{{ route('customer.show', $customer->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    View
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="text-center">
                                            <h1>No Customer Record Available</h1>
                                        </div>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                    </div>

                    {{ $customers->links() }}
                </div>
            </div>
        </div>


    </div>

    <script>
        const search = document.querySelector('[name="search"]');

        search.addEventListener('keyup', (event) => {
            if (event.code === 'Enter') {
                const value = document.getElementById("search").value;
                const url = 'customer?search=' + value;

                window.location.href = url;
            }
        });
    </script>
</x-app-layout>
