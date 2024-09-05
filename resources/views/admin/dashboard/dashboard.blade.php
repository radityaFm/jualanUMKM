@extends('topbar')

@section('Dashboard')
@section('admin')
<title>UMKM</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<div class="wrapper mt-5" style="margin-top: 10cm; display: flex;">
    <div class="main-content" style="flex-grow: 1; margin-left: 20px;margin-top:80px;">
        <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Customer Pages</h5>
                <p class="card-text fs-5">Jumlah :</p>
                <a href="{{ route('customers') }}" class="card-link" style="text-decoration:none;">Visit Customers Page</a>
            </div>
        </div>
        <div class="card shadow" style="width: 18rem; margin-top: 10px;">
            <div class="card-body">
                <h5 class="card-title">Books Pages</h5>
                <p class="card-text fs-5">Jumlah :</p>
                <a href="{{ route('books') }}" class="card-link" style="text-decoration:none;">Visit Books Page</a>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card-body p {
        font-size: 12px;
    }

    /* Hover dan Active pada Card */
    .card:hover, .card:active {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* bayangan lebih besar */
        transform: translateY(-6px); /* memberikan sedikit efek terangkat */
        transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    /* Hover dan Active pada Link */
    .card-link {
        color: #007bff; /* warna default */
        transition: color 0.6s ease-in-out;
    }

    .card-link:hover, .card-link:active {
        color: #0056b3; /* warna lebih gelap saat hover/active */
        text-decoration: underline; /* garis bawah saat di-hover/active */
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
