<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/logincss/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/logincss/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/logincss/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/logincss/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/logincss/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/logincss/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/logincss/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/logincss/css/util.css">
  <link rel="stylesheet" type="text/css" href="/logincss/css/main.css">
</head>

<body>


{{-- <nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav> --}}




@yield('form')

<!--===============================================================================================-->
  <script src="/logincss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="/logincss/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="/logincss/vendor/bootstrap/js/popper.js"></script>
  <script src="/logincss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="/logincss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="/logincss/vendor/daterangepicker/moment.min.js"></script>
  <script src="/logincss/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="/logincss/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="/logincss/js/main.js"></script>

</body>
</html>