<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('booking.create') }}" class="bg-green-500px-4 py-2 rounded">Book Collection</a>
                    <ul class="mt-4">
                        @foreach($bookings as $booking)
                            <li class="p-4 shadow mb-2 rounded">Collection at {{ $booking->location }} on {{ $booking->collection_date }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
