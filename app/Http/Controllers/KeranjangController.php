<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show()
    {
        // Fetch cart data (from session or database)
        $cart = session()->get('cart', []);

        // Calculate total price
        $totalPrice = array_reduce($cart, function ($sum, $item) {
            return $sum + $item['price'] * $item['quantity'];
        }, 0);

        return view('keranjang', ['cart' => $cart, 'totalPrice' => $totalPrice]);
    }

    public function order(Request $request)
    {
        // Validate the order request
        $request->validate([
            'cart' => 'required|array',
        ]);

        // Process the order here (e.g., save to the database)

        // Clear the cart after successful order
        session()->forget('cart');

        return redirect()->route('cart.show')->with('success', 'Pesanan berhasil dilakukan!');
    }
    public function remove($index)
{
    $cart = session()->get('cart', []);

    // Remove the item from the cart
    if (isset($cart[$index])) {
        unset($cart[$index]);
        session()->put('cart', $cart);
    }

    return redirect()->route('cart.show')->with('success', 'Produk berhasil dihapus dari keranjang.');
}
}
