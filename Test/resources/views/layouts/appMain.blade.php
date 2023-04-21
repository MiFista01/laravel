<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='{{ asset("components/css/myTheme.css") }}' rel="stylesheet">
    <link href='{{ asset("components/bootstrap/dist/css/bootstrap.min.css") }}' rel="stylesheet">

    <link href='{{ asset("components/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css") }}' rel="stylesheet">
    <link href='{{ asset("components/css/style.css") }}' rel="stylesheet">

    <!-- Font Awesome -->
    <link href='{{ asset("components/css/font-awesome/css/font-awesome.min.css") }}' rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href='{{ asset("components/css/custom.min.css") }}' rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#"><img src="../components/images/LogoIrbis.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav mr-auto">
                <li>
                  <a class="navbar-brand" href="#">ProjectsEvent</a>
                </li>
                <li>
                  <a class="navbar-brand" href="#">Events</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              <ul class="nav navbar-nav navbar-right" style="padding-left: 10px;">
              @if (Auth::guest())
                <li><a href="{{ url('/login') }}" class="navbar-brand">Login</a></li>
                <li><a href="{{ url('/register') }}" class="navbar-brand">Register</a></li>
              @else
                <li><a href="{{ url('/dashboard') }}" class="navbar-brand">Admin panel</a></li>
                <div class="dropdown ms-5">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                <li><a class="dropdown-item" href={{url('/profile/'.Auth::user()->id )}}>Profile</a></li>
                </ul>
                </div>
              @endif
            </ul>
            </div>
          </nav>
    </header>
    <main>
        <div class="conetnt">
            @yield('content')
        </div>
    </main>
    <footer>

    </footer>
    <!-- jQuery -->
  <script src='{{ asset("components/js/dist/jquery.min.js") }}'></script>
  <!-- Bootstrap -->
  <script src='{{ asset("components/bootstrap/dist/js/bootstrap.bundle.min.js") }}'></script>
  <script src='{{ asset("components/js/bootstrap-progressbar/bootstrap-progressbar.min.js") }}'></script>
  <!-- Custom Theme Scripts -->
  <script src='{{ asset("components/js/custom.min.js") }}'></script>
</body>
</html>
