@extends('topbar')

@section('admin')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<div class="container mt-5" style="margin-top:100px !important;">
    <h1>Create Customer</h1>
    <form id="createCustomerForm" action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Customer</button>
</form>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if ($errors->any())
            alert("{{ $errors->first() }}");
        @endif
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
