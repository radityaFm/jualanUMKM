@extends('topbar')

@section('admin')
<div class="container mt-5" style="margin-top: 140px !important;">
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul Buku</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publisher">Penerbit</label>
            <input type="text" name="publisher" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="published_year">Tahun Terbit</label>
            <input type="number" name="published_year" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pages">Jumlah Halaman</label>
            <input type="number" name="pages" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="Available">Available</option>
                <option value="Checked Out">Checked Out</option>
                <option value="Reserved">Reserved</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="{{ route('books') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
