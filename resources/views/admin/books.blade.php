@extends('topbar')

@section('admin')
<!-- DataTables CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- DataTables Responsive CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/dataTables.responsive.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<style>
    @media (max-width: 768px) {
        table.dataTable tbody td {
            display: block;
            padding: 10px;
            text-align: left;
            white-space: nowrap;
        }
        table.dataTable thead {
            display: none;
        }
        table.dataTable tbody td:before {
            content: attr(data-label);
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
    }

    /* Custom styling for the DataTables search and show buttons */
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_length {
        float: right;
        margin-bottom: 20px;
    }

    .dataTables_wrapper .dataTables_filter label,
    .dataTables_wrapper .dataTables_length label {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .dataTables_wrapper .dataTables_filter input,
    .dataTables_wrapper .dataTables_length select {
        margin-left: 10px;
    }
</style>
<div class="container" style="margin-top: 140px !important;">
    <h1>Daftar Buku</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3 mt-1">Tambah Buku</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tambahkan ID pada table untuk DataTables -->
    <table id="myTable" class="table table-striped table-hover dt-responsive nowrap" style="width: 100%;">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Halaman</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td data-label="Judul">{{ $book->title }}</td>
                <td data-label="Penulis">{{ $book->author }}</td>
                <td data-label="Penerbit">{{ $book->publisher }}</td>
                <td data-label="Tahun Terbit">{{ $book->published_year }}</td>
                <td data-label="ISBN">{{ $book->isbn }}</td>
                <td data-label="Halaman">{{ $book->pages }}</td>
                <td data-label="Status">{{ $book->status }}</td>
                <td data-label="Aksi">
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- DataTables Responsive JS -->
<script src="//cdn.datatables.net/1.11.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Inisialisasi DataTables -->
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            responsive: true,
            autoWidth: false
        });
    });
</script>
