@extends('atas')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assets/japon.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 80vh;
            margin: 0;
            padding: 0;
            display: flex;
            overflow-y:hidden;
            width: 100%;
        }
        .login-container {
            padding: 48px;
            max-width: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* shadow-md effect */
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.4); /* Warna putih dengan transparansi 80% */
            margin: 0;
            margin-top: 230px;
            font-family: havana;
            font-size: 20px;
        }
        .login-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-family:roboto;
        }
        .form-control {
            margin-bottom: 15px;
        }   
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .btn-login, .btn-register {
            width: 55%;
            height: 40px; /* Setting the height for both buttons */
            background-color: #5B99C2; /* Button color */
            border-radius: 10px;
            justify-content: center;
            margin-top: 15px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            line-height: 1.8;
        }
        .btn-login:hover, .btn-register:hover {
            background-color: #1A4870; /* Darker color on hover */
            color:white;
        }
        .text-muted {
            color: #6c757d;
        }
        @media (max-width:1024px) {
            .login-container {
                padding: 48px;
                max-width: auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* shadow-md effect */
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.4); /* Warna putih dengan transparansi 80% */
                margin: 0;
                margin-top: 150px;
                font-family: havana;
                font-size: 20px;
            }
            body {
                background-image: url('assets/japon.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: 100vh;
                margin: 0;
                padding: 0;
                display: flex;
                overflow-y:hidden;
                width: 100%;
            }
        }
    </style>
</head>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="login-container">
                <form action="{{ route('login.proses') }}" method="POST" onsubmit="return validatePassword()">
                    @csrf
                    <center><h2 class="login-title fs-3">Welcome to my Workplace!</h2></center>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-4">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-4">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <input type="checkbox" onclick="showHide()" class="my-2"> Tampilkan Password
                    <div class="login my-auto text-center">
                        <button type="submit" class="btn btn-primary btn-login btn-sm">Login</button>
                        <p class="text-muted mt-3">Already have an account?</p>
                        <a href="{{ route('registrasi') }}" class="btn btn-primary btn-register mt-2">Registrasi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showHide() {
        var inputan = document.getElementById("password");
        if (inputan.type === "password") {
            inputan.type = "text";
        } else {
            inputan.type = "password";
        }
    }
    function validatePassword() {
        var password = document.getElementById("password").value;

        if (password.length < 6) {
            Swal.fire({
                icon: 'error',
                title: 'Password Salah',
                text: 'Periksa kembali password yang anda masukkan.',
                confirmButtonText: 'OK'
            });
            return false; // Prevent form submission if the password is incorrect
        }

        return true; // Allow form submission if the password is valid
    }
</script>
@endsection
