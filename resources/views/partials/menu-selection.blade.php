<section class="py-6 px-4">
    <h2 class="text-2xl font-bold text-pink-600 mb-4 text-center">Menu</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($menus as $item)
            <div class="bg-white p-4 rounded shadow border text-center">
                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="h-40 w-full object-cover rounded mb-3">
                <h3 class="text-lg font-bold">{{ $item['name'] }}</h3>
                <p class="text-gray-700 mb-2">{{ $item['price'] }}</p>
                <form action="#" method="POST">
                    @csrf
                    <button type="button" class="w-full bg-pink-500 text-white py-2 rounded hover:bg-pink-600">
                        ➕ Add to Cart
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</section>
