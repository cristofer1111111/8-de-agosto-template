<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="{{asset('img/profile.png')}}">
    <title> page | @yield('title','template') </title>
    <link rel="stylesheet" href="{{asset('css/estilo-primario.css')}}">
</head>
<body>
<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">            
        <li class="nav-item">
          <a class="nav-link" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca-de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactenos">contacto</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--End Navbar -->
<div class="principal">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                @yield('opciones')
            </ul>
            <br>
        </div>
        <div class="col-md-9 color">
            @yield('img')
            @yield('content')
        </div>
    </div>
</div>

<!--Footer -->
<footer class="bg-dark">
    <div class="container-fluid">
       &copy; Derechos Reservados cristofer.inc
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>