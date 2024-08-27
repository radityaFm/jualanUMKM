<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aurora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
     .navbar {
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        display: flex;
      }

      .nav-link {
        display: inline-block;
        margin: 20px;
        position: relative;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        font-family: Comic Sans MS;
      }
      .nav-pills .nav-link:active {
        background-color: black;
        color: lime;
      }
      .nav-link:hover,
      .nav-link:active {
        color: lime;
        background-color: rgb(0, 0, 0, 0.7);
      }
      .nav-pills:hover,
      .nav-link:active {
        color: lime;
      }
      .nav-pills {
        --bs-nav-pills-border-radius: var(--bs-border-radius);
        --bs-nav-pills-link-active-color: lime;
        --bs-nav-pills-link-active-bg: rgb(0, 0, 0, 0.7);
      }
      .nav-item {
        font-size: 15px;
      }
      .dropdown-menu {
    min-width: 240px;
    margin-top: 10px;
    background-color: rgba(128, 128, 128, 0.1);
}

/* Ensure bold font weight and white background for dropdown items */
.dropdown-item {
    font-weight: bold;
    background-color: white;
    background-color: rgba(128, 128, 128, 0.1);
}

/* Add hover effect */
.dropdown-menu:hover {
    background-color:white;
    color: #000; /* Black text color on hover */
    cursor: pointer;
}

/* Ensure active state has the same hover effect */
.dropdown-item:active {
   background-color: #ffff;
    color: #000; /* Black text color */
    cursor: pointer;
}
</style>
<body>
<nav id="navbar-example" class="navbar navbar-expand-lg" style="position: fixed; z-index: 1030; top: 0; right: 0; left: 0; background-color: #343a40; height:100px;">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <!-- Logo on the left, centered vertically -->
        <div class="d-flex align-items-center">
            <img src="assets/logo.png" alt="Logo" style="height: 40px; width: 40px;" class="me-2">
        </div>
        <!-- Right-aligned profile text and image, centered vertically -->
        <div class="d-flex align-items-center">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="navbar-text font-light me-3 text-white fs-5">Profil</span>
            <img src="{{ asset('path_to_profile_image.jpg') }}" alt="Profile" class="img-thumbnail rounded-circle" style="height: 40px; width: 40px;">
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown" style="min-width: 200px; margin-top: 10px;">
            <li><a class="dropdown-item my-3 w-100 fw-bold" href="{{ route('profil') }}">View Profile</a></li>
            <li><a class="dropdown-item my-3 w-100 fw-bold" href="">Customer Service</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item my-3 w-100 fw-bold" href="">Logout</a></li>
        </ul>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</nav>
  @yield('content')
</body>
</html>