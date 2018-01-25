<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Overcome</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
       <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/"><img class="navbarlogo" src="{{ asset('images/overcome.png') }}"></a>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
            <a class="nav-link" href="/about">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">For Psychologists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reviews</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
          <li>
            <button id="signupbtn" class="btn btn-info">SIGN UP</button>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer class="footer text-center">
      <div class="container footertxt">
        <span>© Copyright 2017 - Overcome. All rights reserved.</span>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src='public/js/bootstrap'></script>
    <script>
      $('#signupbtn').click(function(e) {
            e.preventDefault();
            window.location.href = 'register';
        });
    </script>
    @yield('scripts')
</body>
</html>
