@extends('topbar')

@section('Dashboard')
@section('admin')
<div class="wrapper mt-5" style="margin-top: 10cm; display: flex;">
    <!-- Main Content -->
    <div class="main-content" style="flex-grow: 1; margin-left: 20px;margin-top:60px;">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Customer</h5>
                <p class="card-text">Jumlah :</p>
                <a href="{{ route('customers') }}" class="card-link">Customers Page</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; margin-top: 10px;">
            <div class="card-body">
                <h5 class="card-title">Photographer in Sessions</h5>
                <ul>
                    <!-- Add list items if needed -->
                </ul>
                <a href="{{ route('umkm') }}" class="card-link">Sessions Page</a>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card-body p {
        font-size: 12px;
    }
</style>
