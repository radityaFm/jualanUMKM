@extends('atas')

@section('content')
<style>
.gradient-custom {
  background: #2b435772;
}
.card {
  min-height: 200px;
  margin-top: -50px;
}
.btn{
  color:gray;
  border-radius: 12px;
}
</style>

@guest
<div class="text-center mt-5">
  <h2>Anda belum melakukan login</h2>
  <a href="/login" class="btn btn-primary">Login</a>
</div>
@endguest

@auth
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-8 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src=""
                alt="" class="img-fluid my-5" style="width: 80px;" />
              <h5>{{ $user->name }}</h5>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <form action=" {{ route('profil.update') }} " method="POST">
                 @csrf
                 @method('POST')
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">
                    @if($user)
                      {{ $user->email }}
                    @else 
                      <p>null</p>
                    @endif 
                    </p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted">
                    @if($user)
                      {{ $user->name }}
                    @else
                      <p>null</p> 
                    @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ route('umkm') }}" class="btn btn-success w-100 fw-bold py-2 fs-5" style="background: none; border: none; color: inherit; text-align: left; display: block;">
    Kembali
</a>
      </div>
    </div>
  </div>
</section>
@endauth

@endsection
