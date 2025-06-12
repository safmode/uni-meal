<section class="bg-white py-6 px-4">
    <h2 class="text-xl font-bold text-center mb-4 text-pink-600">Similar Restaurants</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
        @foreach (['Siddiq', 'Aminah', 'Ruqayyah', 'Halimah', 'Hafsa', 'Bilal'] as $other)
            @if (strtolower($other) !== strtolower($current))
                <a href="{{ url('/cafeteria/' . strtolower($other)) }}"
                   class="bg-pink-50 hover:bg-pink-100 p-4 rounded-lg flex flex-col items-center shadow-sm transition">
                    <img src="{{ asset('images/' . strtolower($other) . '.png') }}" alt="{{ $other }} Logo" class="h-20 w-auto object-contain mb-2">
                    <span class="text-sm font-semibold text-gray-700 text-center">Mahallah {{ $other }}</span>
                </a>
            @endif
        @endforeach
    </div>
</section>
