<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart - UniMeal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow p-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/unimeal_logo.png') }}" alt="UniMeal Logo" class="h-10">
            <span class="text-xl font-semibold text-gray-800">My Cart</span>
        </div>
        <a href="{{ route('student.home') }}" class="flex items-center gap-2 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">
            <img src="{{ asset('images/backbutton.png') }}" alt="Back" class="h-5 w-5">
            Back to Home
        </a>
    </header>

    <!-- Cart Items -->
    <main class="px-8 py-6">
        <h2 class="text-2xl font-bold text-pink-700 mb-4 text-center">Items in Your Cart</h2>

        @if(count($cart) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($cart as $index => $item)
                    <div class="bg-white p-4 rounded shadow border border-pink-200">
                        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="h-40 w-full object-cover rounded mb-3">
                        <h3 class="text-lg font-bold text-gray-800">{{ $item['name'] }}</h3>
                        <p class="text-gray-600 mb-2">{{ $item['price'] }}</p>

                        <form action="{{ route('cart.remove', $index) }}" method="POST" onsubmit="return confirm('Remove this item?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-black text-white py-2 rounded hover:bg-gray-800">
                                🗑️ Remove
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 text-center">
                <a href="{{ route('checkout.form') }}" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded text-lg font-semibold">
                    Proceed to Checkout
                </a>
            </div>
        @else
            <p class="text-center text-gray-500">Your cart is currently empty.</p>
        @endif
    </main>

</body>
</html>
