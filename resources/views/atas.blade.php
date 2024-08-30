<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>umkm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/colreorder/2.0.3/css/colReorder.dataTables.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css" rel="stylesheet">
         
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/colreorder/2.0.3/js/dataTables.colReorder.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>

        
        <script src="https://kit.fontawesome.com/3ab26b6439.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function (){
                $('#table').DataTable({
                    responsive : true,
                    "sDom": 'Lfrtlip' ,
                    ordering: true,
                    order: [[0, 'asc']],
                });
            });
        </script>
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

      .navbar .nav-link.active {
        display: inline-block;
        margin: 20px;
        position: relative;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        font-family: Comic Sans MS;
      }
      .nav-pills {
    --bs-nav-pills-border-radius: var(--bs-border-radius);
    --bs-nav-pills-link-active-color: lime;
    --bs-nav-pills-link-active-bg: rgb(0, 0, 0, 0.7);
}

.nav-pills .nav-link {
    color: inherit;
    transition: background-color 0.3s, color 0.3s;
    background-color: rgba(0, 0, 0, 0.7);
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link:focus {
    background-color: rgba(0, 0, 0, 0.7);
    color: lime;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: #000000b5;
}

.nav-pills .nav-link.active {
    background-color: rgba(0, 0, 0, 0.7);
    color: lime;
    border-radius: var(--bs-nav-pills-border-radius);
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
            <img src="assets/logo.png" alt="Logo" style="height: 90px; width: 90px;" class="me-2">
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