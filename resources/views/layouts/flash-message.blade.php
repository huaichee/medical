@if ($message = Session::get('success'))
    <div id="toast-top-left" class="message flex absolute bottom-5 right-5 items-center p-4 space-x-4 w-full max-w-xs text-gray-500 bg-white rounded-lg divide-x divide-gray-200 shadow bg-green-500 text-white" role="alert">
        <div class="text-sm font-normal">{{ $message }}</div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div id="toast-top-left" class="message flex absolute bottom-5 right-5 items-center p-4 space-x-4 w-full max-w-xs text-gray-500 bg-white rounded-lg divide-x divide-gray-200 shadow bg-red-700 text-white" role="alert">
        <div class="text-sm font-normal">{{ $message }}</div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div id="toast-top-left" class="message flex absolute bottom-5 right-5 items-center p-4 space-x-4 w-full max-w-xs text-gray-500 bg-white rounded-lg divide-x divide-gray-200 shadow bg-orange-700 text-white" role="alert">
        <div class="text-sm font-normal">{{ $message }}</div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div id="toast-top-left" class="message flex absolute bottom-5 right-5 items-center p-4 space-x-4 w-full max-w-xs text-gray-500 bg-white rounded-lg divide-x divide-gray-200 shadow bg-blue-700 text-white" role="alert">
        <div class="text-sm font-normal">{{ $message }}</div>
    </div>
@endif
