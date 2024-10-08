@extends('navtop')
@section('content')
    <style>
        body {
            background-image: url('image/japon.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            overflow-y: hidden;
            width: 100%;
        }

        .login-container, .registration-container {
            padding: 48px;
            max-width: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.4);
            margin: 0;
            margin-top: 150px;
            font-family: havana;
            font-size: 20px;
        }

        .login-title, .registration-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-family: roboto;
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

        .btn-login, .btn-register {
            width: 55%;
            height: 40px;
            background-color: #5B99C2;
            border-radius: 10px;
            justify-content: center;
            margin-top: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-login:hover, .btn-register:hover {
            background-color: #1A4870;
            color: white;
        }

        .text-muted {
            color: #6c757d;
        }

        @media (max-width: 1024px) {
            .login-container, .registration-container {
                margin-top: 150px;
            }
        }

        @media (max-width: 1440px) {
            .login-container, .registration-container {
                margin-top: 250px;
            }
        }
    </style>
    
    <div class="container text-center">
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-md-6">
                <div class="registration-container">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('registrasi.proses') }}" method="POST">
                        @csrf
                        <h2 class="registration-title my-1">Registrasi</h2>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="margin-right: 90%;">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label" style="margin-right: 90%;">Username</label>
                            <input type="text" id="name" name="name" placeholder="Username" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label" style="margin-right: 90%;">Peran</label>
                            <select id="role" name="role" class="form-control">
                                <option value="super-admin">Super Admin</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            @error('role')
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
                        <div class="registration">
                            <button type="submit" class="btn btn-primary btn-register btn-sm">Registrasi</button>
                            <p class="text-muted mt-3">Sudah punya akun?</p>
                            <a href="{{ route('login') }}" class="btn btn-primary btn-login mt-2">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Password Salah',
                text: 'Periksa kembali password yang anda masukkan.',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
