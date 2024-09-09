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

<div class="container mt-5" style="margin-top:100px !important;">
    <h1>Customer List</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mt-3">Create New Customer</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tambahkan ID pada table untuk DataTables -->
    <table id="customerTable" class="table table-striped table-hover dt-responsive nowrap" style="width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td data-label="Name">{{ $customer->name }}</td>
                <td data-label="Email">{{ $customer->email }}</td>
                <td data-label="Phone">{{ $customer->phone }}</td>
                <td data-label="Created At">{{ $customer->created_at->format('Y-m-d H:i:s') }}</td>
                <td data-label="Actions">
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
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

<!-- Inisialisasi DataTables -->
<script>
    $(document).ready( function () {
        $('#customerTable').DataTable({
            responsive: true,
            autoWidth: false
        });
    });
</script>
