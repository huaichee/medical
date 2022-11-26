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
                        <a href="{{ route('customer.create') }}">New Customer</a>
                        @if($customers->isNotEmpty())
                            <div class="grid grid-cols-5 gap-5 border-b font-bold">
                                <div class="col">No.</div>
                                <div class="col">Name</div>
                                <div class="col">Age</div>
                                <div class="col">Session</div>
                                <div class="col">Last Visit</div>
                            </div>
                        @endif
                        @forelse ($customers as $customer)
                            <div class="grid grid-cols-5 gap-5">
                                <div class="col">{{ $loop->iteration }}</div>
                                <div class="col">{{ $customer->name }}</div>
                                <div class="col">{{ $customer->age }}</div>
                                <div class="col">{{ $customer->medical_sessions_count }}</div>
                                <div class="col">{{ $customer->last_visit }}</div>
                            </div>
                        @empty
                            <div class="text-center">
                                <h1>No Customer Record Available</h1>
                            </div>
                        @endforelse
                    </div>

                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
