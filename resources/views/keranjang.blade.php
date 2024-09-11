@extends('navbar')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Keranjang Belanja Anda</h2>

    @if(session('success'))
    <div id="success-message" data-message="{{ session('success') }}"></div>
    @endif

    @if(session('error'))
    <div id="error-message" data-message="{{ session('error') }}"></div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Harga Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse($keranjangs as $keranjang)
                <tr>
                    <td>{{ $keranjang->produk->nama }}</td>
                    <td>Rp {{ number_format($keranjang->produk->harga, 0, ',', '.') }}</td>
                    <td>{{ $keranjang->jumlah }}</td>
                    <td>Rp {{ number_format($keranjang->harga_total, 0, ',', '.') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Keranjang Anda kosong.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <form action="{{ route('keranjang.checkout') }}" method="POST">
        @csrf
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Checkout</button>
        </div>
    </form>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        if (successMessage) {
            Swal.fire({
                title: 'Sukses!',
                text: successMessage.dataset.message,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }

        if (errorMessage) {
            Swal.fire({
                title: 'Gagal!',
                text: errorMessage.dataset.message,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
</script>
@endsection
