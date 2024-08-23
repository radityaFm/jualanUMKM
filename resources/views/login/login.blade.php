@extends('atas')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .login-container {
            padding: 48px;
            max-width: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #ffffff;
            margin: auto; /* Center the container */
            margin-top: 260px;
        }
        .login-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-family: "havana";
        }
        .form-control {
            margin-bottom: 15px;
        }   
        .forgot-password a {
            text-decoration: none;
            color: #000000;
        }
        .forgot-password {
            text-decoration: none;
            color: #000000;
        }
        .btn-login {
            height: 10%;
            background-color: #007bff;
            border-color: #007bff;
            width: 30%;
            margin-top:40px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="login-container">
                    <form action="{{ route('login.proses') }}" method="POST">
                        @csrf
                        <center><h2 class="login-title fs-3">Welcome to my workplace!</h2></center>
                        <div class="mb-3">
                            <label for="email" class="form-label fs-5">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fs-5">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-login btn-sm fs-5">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
@endsection
