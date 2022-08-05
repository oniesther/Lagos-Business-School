<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/responsiveness.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Webpage title & Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Lagos Business School</title>
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Body Home-->
    <style>body{background:url(assets/images/Lagos-Business-School-bg.jpg);background-position:center;background-repeat:no-repeat;background-size:cover}</style>
  </head>

  <body>
    <!-- Header -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="{{ route('index') }}" class="logo d-flex align-items-center">
              <img src="{{asset('assets/images/logo.png')}}" alt="">
          </a>
          <nav id="navbar" class="navbar">
              <ul>
              <li><a class="nav-link " href="{{ route('index') }}">Home</a></li>
              <li><a class="nav-link " href="{{ route('about') }}">About</a></li>
              <li><a class="nav-link" href="{{ route('membership') }}">Membership</a></li>
              <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
              <li><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
              <li><a class="nav-link" href="{{ route('login') }}"><button class="btn btn-success">Login</button></a></li>
              <li><a class="nav-link" href="{{ route('register') }}"><button class="btn btn-success">Sign Up</button></a></li>
              </ul>
              <i class="fas fa-bars mobile-nav-toggle"></i>
          </nav>
      </div>
    </header>
    <!-- End Header -->

   @yield('content')


    <!-- Footer -->
    <footer class="py-4 mt-5 text-center">
      <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
          <div class="col-auto">
          <div class="small m-0 text-white text-center">Copyright &copy; AMP25 LBS
              Alumni Class 2022</div>
          </div>
          <div class="col-auto">
          <a class="link-light small" href="{{ route('pravacy') }}">Privacy</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="{{ route('terms') }}">Terms</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="{{ route('contact') }}">Contact</a>
          </div>
      </div>
      </div>
  </footer>
  <!-- Footer end -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>