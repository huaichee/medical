    <div class="container">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center pb-4">
                <div>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-right float-right" href="{{ route('medical-session.create') }}">New Session</a>
                </div>

            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                @if($medicalSessions->isNotEmpty())
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Date
                        </th>

                        <th scope="col" class="py-3 px-6">
                            Remark
                        </th>

                        <th scope="col" class="py-3 px-6">
                            Number of Issue
                        </th>

                        <th scope="col" class="py-3 px-6">
                            Delete
                        </th>

                    </tr>
                    </thead>
                @endif

                <tbody>
                @forelse ($medicalSessions as $medicalSession)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class="py-4 px-6">
                            {{ $medicalSession->medication_date }}
                        </td>

                        <td class="py-4 px-6">
                            {{ $medicalSession->remark ?? '-' }}
                        </td>

                        <td class="py-4 px-6">
                            {{ $medicalSession->medicationSessionDetails ? $medicalSession->medicationSessionDetails->count() : 0 }}
                        </td>

                        <td class="py-4 px-6">
                            <span class="fa fa-times"></span>
                        </td>

                    </tr>
                @empty
                    <div class="text-center">
                        <h1>No Record Available</h1>
                    </div>
                @endforelse

                </tbody>
            </table>
        </div>

    </div>
