@extends('topbar')

@section('admin')
<div class="container mt-5" style="margin-top:100px !important;">
    <h1>Customer List</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mt-3">Create New Customer</a>
    <table class="table table-striped mt-3 my-3">
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
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->created_at->format('Y-m-d H:i:s') }}</td>
                <td>
                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline;">
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
