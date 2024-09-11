<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    // Menampilkan halaman keranjang
    public function index()
    {
        $user = Auth::user();
        $keranjangs = Keranjang::where('user_id', $user->id)->with('produk')->get();
        return view('keranjang', compact('keranjangs'));
    }

    // Menambahkan produk ke keranjang
    public function tambah(Request $request)
    {
        $produk = Produk::findOrFail($request->produk_id);
        $user = Auth::user();

        $keranjang = Keranjang::where('user_id', $user->id)
            ->where('produk_id', $request->produk_id)
            ->first();

        if ($keranjang) {
            // Update jumlah produk yang sudah ada di keranjang
            $keranjang->jumlah += $request->jumlah;
            $keranjang->harga_total += $request->jumlah * $produk->harga;
        } else {
            // Tambahkan produk baru ke keranjang
            Keranjang::create([
                'user_id' => $user->id,
                'produk_id' => $produk->id,
                'jumlah' => $request->jumlah,
                'harga_total' => $request->jumlah * $produk->harga,
            ]);
        }

        return redirect()->route('keranjang.index')->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }

    // Melakukan checkout
    public function checkout(Request $request)
    {
        $user = Auth::user();
        $keranjangs = Keranjang::where('user_id', $user->id)->get();

        if ($keranjangs->isEmpty()) {
            return redirect()->route('keranjang.index')->with('error', 'Keranjang Anda kosong!');
        }

        // Logika checkout misalnya mengurangi stok produk, membuat pesanan, dll.
        // Misalnya, kita hanya menghapus keranjang setelah checkout.
        Keranjang::where('user_id', $user->id)->delete();

        return redirect()->route('keranjang.index')->with('success', 'Checkout berhasil! Terima kasih atas pesanan Anda.');
    }
}
