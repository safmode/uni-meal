<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Add item to cart
    public function add(Request $request)
    {
        $cart = Session::get('cart', []);

        // Convert price to float safely
        $price = floatval(preg_replace('/[^0-9.]/', '', $request->price));

        // Check if item already exists in cart
        $existingIndex = null;
        foreach ($cart as $index => $item) {
            if ($item['name'] === $request->name) {
                $existingIndex = $index;
                break;
            }
        }

        if (!is_null($existingIndex)) {
            // If item exists, increase quantity
            $cart[$existingIndex]['quantity'] += 1;
        } else {
            // Otherwise, add new item
            $cart[] = [
                'name' => $request->name,
                'price' => $price,
                'image' => $request->image,
                'quantity' => 1,
            ];
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Item added to cart.');
    }

    // Show cart items
    public function show()
    {
        $cart = Session::get('cart', []);
        return view('student.cart', compact('cart'));
    }

    // Remove item from cart
    public function remove($index)
    {
        $cart = Session::get('cart', []);
        unset($cart[$index]);
        Session::put('cart', array_values($cart)); // Reindex array
        return redirect()->route('cart.show')->with('success', 'Item removed from cart.');
    }

    // ✅ Update item quantity
    public function update(Request $request, $index)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$index])) {
            if ($request->input('action') === 'increase') {
                $cart[$index]['quantity'] += 1;
            } elseif ($request->input('action') === 'decrease' && $cart[$index]['quantity'] > 1) {
                $cart[$index]['quantity'] -= 1;
            }
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.show');
    }
}
