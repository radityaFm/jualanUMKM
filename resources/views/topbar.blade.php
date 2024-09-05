<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMKM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
      border: none;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      margin-top: 10px;
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

    .navbar-toggler {
      border: none;
      background: transparent;
      color: #ecf0f1;
    }

    .navbar-toggler-icon {
      background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDEvMTIvMjEwMyI+PHBhdGggZD0iTTEuNTUgMTBIMjAuNTVDMTkuMTA5IDAgMjAgMCAyMCAwIDcuOTg5IDAgMTEuNDU1IDEuNTQ1IDEyLjUyNSA4Ljg3OSAxMy4xMjMgMy42NDQgNy43NzQgMTEuMzUgNy4yOTMiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZS1sZW5ndGgtcmFuZ2U9IjUuNSIgLz48L3N2Zz4=');
      background-repeat: no-repeat;
      background-position: center;
      background-size: contain;
    }

    .navbar-nav {
      margin-left: auto;
    }

    @media (max-width: 992px) {
      .navbar-nav {
        display: flex;
        flex-direction: column;
        margin-top: 1rem;
      }

      .navbar-nav .nav-link {
        padding: 10px 15px;
        text-align: left;
      }
    }
  </style>
</head>
<body>

<nav id="navbar-example" class="navbar navbar-expand-lg" style="position: fixed; z-index: 1030; top: 0; right: 0; left: 0;">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
      <img src="assets/logo.png" alt="Logo" />
    </a>
    <!-- Navbar Toggler (Visible on mobile and tablet) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fw-bold nav-pills">
        <li class="nav-item">
          <a class="nav-link fs-5 text-light mx-3" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <!-- Settings Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link fs-5 text-light dropdown-toggle" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
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
      </ul>
    </div>
  </div>
</nav>

@yield('admin')

<script>
  // JavaScript for hamburger menu toggle
  document.getElementById('hamburger').addEventListener('click', function() {
    this.classList.toggle('open');
    document.getElementById('navbarNav').classList.toggle('show');
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
