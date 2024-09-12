@extends('navbar')

@section('content')
<div class="container mt-5">
    <h2>Keranjang Belanja</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(!empty($cart) && count($cart) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                <td>
                    <!-- Remove Item Button -->
                    <form action="{{ route('cart.remove', $loop->index) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-right mb-4">
        <h4>Total: Rp {{ number_format($totalPrice, 0, ',', '.') }}</h4>
    </div>

    <!-- Order Form -->
    <form action="{{ route('cart.order') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-lg">Pesan Sekarang</button>
    </form>
    @else
    <p>Keranjang anda kosong!</p>
    @endif
</div>
@endsection
