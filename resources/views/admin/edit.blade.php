@extends('topbar')

@section('admin')
<div class="container mt-5 " style="margin-top: 140px !important;">
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title" class="books">Judul Buku</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
        </div>

        <div class="form-group">
            <label for="author" class="books">Penulis</label>
            <input type="text" name="author" class="form-control" value="{{ old('author', $book->author) }}" required>
        </div>

        <div class="form-group">
            <label for="publisher" class="books">Penerbit</label>
            <input type="text" name="publisher" class="form-control" value="{{ old('publisher', $book->publisher) }}" required>
        </div>

        <div class="form-group">
            <label for="published_year" class="books">Tahun Terbit</label>
            <input type="number" name="published_year" class="form-control" value="{{ old('published_year', $book->published_year) }}" required>
        </div>

        <div class="form-group">
            <label for="isbn" class="books">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $book->isbn) }}" required>
        </div>

        <div class="form-group">
            <label for="pages" class="books">Halaman</label>
            <input type="number" name="pages" class="form-control" value="{{ old('pages', $book->pages) }}" required>
        </div>

        <div class="form-group">
            <label for="status" class="books">Status</label>
            <select name="status" class="form-control" required>
                <option value="Available" {{ $book->status == 'Available' ? 'selected' : '' }}>Available</option>
                <option value="Unavailable" {{ $book->status == 'Unavailable' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3 mx-1">Update Buku</button>
        <a href="{{ route('books') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
<style>
    .books{
        font-size:1.1rem;
    }
</style>
@endsection
