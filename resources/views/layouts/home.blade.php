<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SLSU -Bontoc Campus</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/style3.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" />
        <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('home/darklybootstrap.min.css') }}" rel="stylesheet" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">SLSU-BC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('home') }}">Home
                    <span class="visually-hidden">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <!-- <li>
                  <a class="nav-link" href="http://slsubc.com.test/news">See More</a>
                </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="main">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ asset('home/bootstrap.min.js') }}"></script>
    </body>
</html>