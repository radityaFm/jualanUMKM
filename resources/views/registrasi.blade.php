@extends('navbar')

@section('content')
    <style>
        .container {
            margin-top: 50px;
        }
        .logo {
            width: 100%;
            max-height: 10cm;
        }
        .login-container {
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
        }
        .login-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .forgot-password a {
            text-decoration: none;
            color: #007bff;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .btn-register, .btn-login {
            width: 100%;
        }
        .text-muted {
            color: #6c757d;
        }
    </style>

    <div class="container text-center">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                <form action="{{ route('registrasi.proses') }}" method="POST">
                        @csrf
                        <h2 class="login-title mb-4">Registrasi</h2>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="margin-right: 90%;">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label" style="margin-right: 90%";>Username</label>
                            <input type="text" id="name" name="name" placeholder="Username" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label" style="margin-right: 90%">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-register mt-3">Register</button>
                    </form>
                    <p class="text-muted mt-3">Already have an account?</p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-login mt-2">Login</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message  }}');
    </script>
    @endif
@endsection
