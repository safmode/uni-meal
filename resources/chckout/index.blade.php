@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8 px-4">
    <h1 class="text-2xl font-bold text-pink-700 mb-6">Checkout</h1>

    <form action="{{ route('checkout.process') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <h2 class="text-lg font-semibold mb-4">Shipping Information</h2>
        <div class="grid grid-cols-1 gap-4">
            <input type="text" name="name" placeholder="Full Name" class="border rounded px-4 py-2" required>
            <input type="text" name="phone" placeholder="Phone Number" class="border rounded px-4 py-2" required>
            <input type="text" name="address" placeholder="Address" class="border rounded px-4 py-2" required>
        </div>

        <h2 class="text-lg font-semibold mt-6 mb-4">Delivery Option</h2>
        <div class="space-y-2">
            <label><input type="radio" name="delivery" value="Pickup" checked> Pickup (Free)</label><br>
            <label><input type="radio" name="delivery" value="15-20 min"> 15–20 Minutes (+RM3)</label><br>
            <label><input type="radio" name="delivery" value="Now"> Now (+RM5)</label>
        </div>

        <h2 class="text-lg font-semibold mt-6 mb-4">Payment Method</h2>
        <div class="space-y-2">
            <label><input type="radio" name="payment" value="COD" checked> Cash on Delivery</label><br>
            <label><input type="radio" name="payment" value="Credit/Debit"> Credit/Debit Card</label><br>
            <label><input type="radio" name="payment" value="Bank Transfer"> Direct Bank Transfer</label><br>
            <label><input type="radio" name="payment" value="Other"> Other Method</label>
        </div>

        <button type="submit" class="mt-6 bg-pink-600 hover:bg-pink-700 text-white px-6 py-2 rounded">Confirm Order</button>
    </form>
</div>
@endsection
