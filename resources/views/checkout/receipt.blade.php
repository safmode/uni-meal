<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard - UniMeal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
    <style>
        .bg-soft-pink { background-color: #FFC0CB; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded m-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- ✅ HEADER with Logout and Track Orders -->
    <header class="bg-soft-pink shadow p-4 flex justify-between items-center text-white">
        <a href="{{route('student.home')}}">
            <img src="{{ asset('images/unimeal_logo.png') }}" alt="UniMeal Logo" class="h-10">
        </a>
        <div class="flex items-center space-x-4">
            <span>Welcome, {{ Auth::guard('student')->user()->name }}</span>

            <!-- ✅ Track Orders Button -->
            <a href="{{ route('orders.history') }}"
               class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-2 px-4 rounded">
                📦 Track My Orders
            </a>

            <!-- ✅ Logout Form -->
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="hover:underline">Logout</button>
            </form>
        </div>
    </header>

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow rounded border border-pink-200">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-pink-600">🎉 Order Confirmed!</h1>
        <p class="text-gray-600">Thank you! Here’s your order summary.</p>
    </div>

    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-700">Order Details</h2>
        <ul class="text-gray-600 mt-2 space-y-1">
            <li><strong>Order ID:</strong> #{{ $order->id }}</li>
            <li><strong>Status:</strong> {{ $order->status }}</li>
            <li><strong>Delivery Option:</strong> {{ $order->delivery_option }}</li>
            <li><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</li>
        </ul>
    </div>

    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-700">Shipping Information</h2>
        <ul class="text-gray-600 mt-2 space-y-1">
            <li><strong>Name:</strong> {{ $order->shipping->name }}</li>
            <li><strong>Phone:</strong> {{ $order->shipping->phone }}</li>
            <li><strong>Address:</strong> {{ $order->shipping->address }}</li>
        </ul>
    </div>

    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Items Ordered</h2>
        <div class="mt-2 border-t">
            @foreach ($order->orderItems as $item)
                <div class="flex items-center justify-between py-3 border-b">
                    <div>
                        <p class="text-gray-800 font-semibold">{{ $item->name }}</p>
                        <p class="text-gray-500 text-sm">Quantity: {{ $item->quantity }}</p>
                    </div>
                    <p class="text-pink-600 font-bold">RM{{ number_format($item->price * $item->quantity, 2) }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Summary</h2>
        <ul class="text-gray-600 mt-2 space-y-1">
            <li><strong>Subtotal:</strong> RM{{ number_format($order->orderItems->sum(fn($i) => $i->price * $i->quantity), 2) }}</li>
            <li><strong>Delivery Fee:</strong> RM{{ number_format($order->shipping_fee, 2) }}</li>
            <li><strong>Sales Tax:</strong> RM{{ number_format($order->sales_tax, 2) }}</li>
            <li><strong>Total:</strong> RM{{ number_format($order->total_amount, 2) }}</li>
        </ul>
    </div>

    <div class="flex justify-center gap-4 mt-8">
        <a href="" class="px-6 py-3 bg-black text-white rounded hover:bg-gray-800">🏠 Back to Home</a>
        <a href="{{ route('order.track', $order->id) }}" class="px-6 py-3 bg-pink-500 text-white rounded hover:bg-pink-600">🔍 Track My Order</a>
    </div>
</div>

