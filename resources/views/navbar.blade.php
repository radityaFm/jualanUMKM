<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>umkm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .navbar {
      background-color: rgba(0, 0, 0, 0.5);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      display: flex;
    }

    .navbar .nav-link,
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

    .nav-pills .nav-link:active {
      background-color: black;
      color: lime;
    }

    .nav-link:hover,
    .nav-link:active {
      color: lime;
      background-color: rgba(0, 0, 0, 0.7);
    }

    .nav-pills:hover,
    .nav-link:active {
      color: lime;
    }

    .nav-pills {
      --bs-nav-pills-border-radius: var(--bs-border-radius);
      --bs-nav-pills-link-active-color: lime;
      --bs-nav-pills-link-active-bg: rgba(0, 0, 0, 0.7);
    }

    .nav-pills-link:active {
      color: lime;
      background-color: #2e2e2e;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
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
    .hamburger-icon {
      display: inline-block;
      cursor: pointer;
      width: 30px;
      height: 21px;
      position: relative;
      margin-right: 10px;
    }

    .hamburger-icon span {
      display: block;
      background-color: white;
      height: 3px;
      margin: 5px 0;
      transition: all 0.3s ease;
    }

    .hamburger-icon.open span:nth-child(1) {
      transform: rotate(45deg);
      top: 8px;
      position: relative;
    }

    .hamburger-icon.open span:nth-child(2) {
      opacity: 0;
    }

    .hamburger-icon.open span:nth-child(3) {
      transform: rotate(-45deg);
      top: -8px;
      position: relative;
    }
  </style>
</head>
<body>
<nav id="navbar-example" class="navbar navbar-expand-lg" style="position: fixed; z-index: 1030; top: 0; right: 0; left: 0; background-color: #343a40">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="image/logo.png" alt="Logo" />
      </a>
      <!-- Hamburger Icon (Visible on mobile and tablet only) -->
      <div class="hamburger-icon d-lg-none" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-bold nav-pills">
          <li class="nav-item">
            <a class="nav-link fs-5 text-light" href="#parallax">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 text-light" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 text-light" href="#product">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 text-light" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 text-light" href="#testimoni">Testimonial</a>
          </li>
          <!-- Settings Dropdown -->
          <div class="dropdown">
    <li class="nav-item dropdown">
        <a class="nav-link fs-5 text-light dropdown-toggle" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown" style="min-width: 200px; margin-top: 10px;">
            <li><a class="dropdown-item w-100 fw-bold py-2" href="{{ route('profil') }}">View Profile</a></li>
            <li><a class="dropdown-item w-100 fw-bold py-2" href="#">Customer Service</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-item w-100 fw-bold py-2" style="background: none; border: none; color: inherit;">Logout</button>
                </form>
            </li>
        </ul>
    </li>
</div>
    </div>
  </nav>
  <script>
    // JavaScript for hamburger menu toggle
    document.getElementById('hamburger').addEventListener('click', function() {
      this.classList.toggle('open');
      document.getElementById('navbarNav').classList.toggle('show');
    });
  </script>
  
  @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>