@extends('navbar')

@section('content')
<style>
.gradient-custom {
  background: #2b435772;
}
.card {
  min-height: 200px;
  margin-top: -50px;
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
                 @method('PUT')
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <input class="text-muted"  placeholder="masukan email baru baru" id="email" value="{{ old('name') }}" >
                    <!-- @if($user)
                      {{ $user->email }}
                    @else 
                      <p>null</p>
                    @endif  -->
                    </input>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <input class="text-muted"  placeholder="masukan nama baru" id="name"value="{{ old('email') }}">
                    <!-- @if($user)
                      {{ $user->name }}
                    @else
                      <p>null</p> 
                    @endif -->
                    </input>
                  </div>
                  <button href="{{ route('profil.update') }}" class="btn btn-success" type="submit">simpan</button>
                  <button href="{{ route('profil.edit') }}" class="btn btn-success" type="submit">kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

      </div>
    </div>
  </div>
</section>
@endauth

@endsection
