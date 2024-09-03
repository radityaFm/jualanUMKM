<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>umkm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
      body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            background-color: #343a40;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .navbar .nav-link {
            color: #ecf0f1;
            font-weight: bold;
            font-family: Comic Sans MS;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.7);
            color: lime;
        }

        .navbar .nav-link.active {
            background-color: rgba(0, 0, 0, 0.7);
            color: lime;
        }

        .navbar .nav-item {
            margin: 0;
        }

        .dropdown-menu {
            min-width: 240px;
            background-color: rgba(128, 128, 128, 0.1);
        }

        .dropdown-item {
            font-weight: bold;
            background-color: rgba(128, 128, 128, 0.1);
        }

        .dropdown-item:hover,
        .dropdown-item:active {
            background-color: #fff;
            color: #000;
        }

        .dropdown-menu .dropdown-item {
            padding: 10px 15px;
        }

        .navbar-brand img {
            height: 90px;
            width: 90px;
        }
</style>
<body>

<nav id="navbar-example" class="navbar navbar-expand-lg" style="position: fixed; z-index: 1030; top: 0; right: 0; left: 0; background-color: #343a40; height:100px;">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="assets/logo.png" alt="Logo" style="height: 90px; width: 90px;" class="me-2">
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-5 fw-bold nav-pills">
                <li class="nav-item mx-3">
                    <a class="nav-link fs-5 text-light" href="{{ route('dashboard') }}">dashboard</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fs-5 text-light" href="{{ route('books') }}">books</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fs-5 text-light" href="#product">Menu</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fs-5 text-light" href="#faq">absensi</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fs-5 text-light" href="#testimoni">penjualan</a>
                </li>
            </ul>
        </div>
        <!-- Profile dropdown -->
        <div class="dropdown">
        <div class="d-flex align-items-center">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('path_to_profile_image.jpg') }}" alt="Profile" class="img-thumbnail rounded-circle" style="height: 40px; width: 40px;">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown" style="min-width: 200px; margin-top: 10px;">
                    <li><a class="dropdown-item my-3 w-100 fw-bold" href="{{ route('profil') }}">View Profile</a></li>
                    <li><a class="dropdown-item my-3 w-100 fw-bold" href="#">Customer Service</a></li> <!-- Use '#' if no link -->
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item my-3 w-100 fw-bold" href="#">Logout</a></li> <!-- Use '#' if no link -->
                </ul>
            </div>
        </div>
    </div>
</nav>


@yield('admin')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>