<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart - UniMeal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <style>
        .bg-soft-pink { background-color: #FFC0CB; }
        .text-soft-pink { color: #FFC0CB; }

        html, body {
            margin: 0;
            padding: 0;
        }

        img {
            display: block;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="bg-gray-100">

    @php $mahallah = session('selected_mahallah', 'siddiq'); @endphp

    <!-- ✅ Header -->
    <header class="bg-soft-pink p-4 shadow flex justify-between items-center text-white">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/unimeal_logo.png') }}" alt="UniMeal Logo" class="h-10">
            <span class="text-xl font-semibold">Your Cart</span>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('cafeteria.show', ['mahallah' => $mahallah]) }}" class="flex items-center gap-2 bg-white text-pink-600 hover:bg-pink-100 px-4 py-2 rounded shadow">
                <img src="{{ asset('images/backbutton.png') }}" alt="Back" class="h-5 w-5">
                Back to Food
            </a>
            <a href="{{ route('student.home') }}" class="flex items-center gap-2 bg-black hover:bg-gray-800 text-white px-4 py-2 rounded shadow">
                🏠 Home
            </a>
        </div>
    </header>

    <!-- ✅ Cart Section -->
    <main class="px-8 py-6">
        <h2 class="text-2xl font-semibold mb-4 text-center text-pink-700">Items in Your Cart</h2>

        @php $total = 0; @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse ($cart as $index => $item)
                @php
                    $itemTotal = (float) $item['price'] * $item['quantity'];
                    $total += $itemTotal;
                @endphp
                <div class="bg-white p-4 rounded shadow border border-pink-200">
                    <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="h-40 w-full object-cover rounded mb-3">
                    <h3 class="text-lg font-bold text-gray-800">{{ $item['name'] }}</h3>
                    <p class="text-gray-600 mb-1">Price: RM{{ number_format((float) $item['price'], 2) }}</p>

                    <!-- ✅ Quantity Update Buttons -->
                    <form action="{{ route('cart.update', $index) }}" method="POST" class="flex items-center gap-2 mb-2">
                        @csrf
                        @method('PUT')
                        <button type="submit" name="action" value="decrease" class="bg-pink-300 hover:bg-pink-400 text-white px-3 rounded text-lg font-bold">−</button>
                        <span class="px-2">{{ $item['quantity'] }}</span>
                        <button type="submit" name="action" value="increase" class="bg-pink-300 hover:bg-pink-400 text-white px-3 rounded text-lg font-bold">+</button>
                    </form>

                    <p class="text-gray-800 font-semibold mb-3">Total: RM{{ number_format($itemTotal, 2) }}</p>

                    <!-- Remove Button -->
                    <form action="{{ route('cart.remove', $index) }}" method="POST" onsubmit="return confirm('Remove this item?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-black text-white py-2 rounded hover:bg-gray-800">
                            🗑️ Remove
                        </button>
                    </form>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-600">Your cart is empty.</p>
            @endforelse
        </div>

        @if ($cart)
        <!-- ✅ Checkout Section -->
        <div class="mt-10 bg-white p-6 rounded shadow-md max-w-xl mx-auto border border-pink-300">
            <h3 class="text-xl font-bold text-gray-800 mb-3">Total Amount</h3>
            <p class="text-lg text-pink-700 font-semibold mb-4">RM{{ number_format($total, 2) }}</p>
            <a href="{{ route('checkout.form') }}" class="block text-center bg-soft-pink hover:bg-pink-400 text-white font-semibold py-3 rounded transition">
                🧾 Proceed to Checkout
            </a>
        </div>
        @endif
    </main>

    <!-- ✅ Full-Width Posters (No Gaps) -->
    <div class="mt-12 mx-auto w-full max-w-none">
        <img src="{{ asset('images/poster6.png') }}" alt="Poster 6" class="w-screen">
        <img src="{{ asset('images/poster7.png') }}" alt="Poster 7" class="w-screen">
        <img src="{{ asset('images/poster5.png') }}" alt="Poster 5" class="w-screen">
    </div>

</body>
</html>
