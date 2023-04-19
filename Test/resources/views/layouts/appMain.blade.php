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

    <!-- Font Awesome -->
    <link href='{{ asset("components/css/font-awesome/css/font-awesome.min.css") }}' rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href='{{ asset("components/css/custom.min.css") }}' rel="stylesheet">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>
    <main>
        <div class="conetnt" style="min-height: 50vh">
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
