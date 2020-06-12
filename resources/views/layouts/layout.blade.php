<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Misia - Tienda Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}"/> 
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/> 
  </head>
  <body>
    @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a href="{{ url('/home') }}">Home</a>
          @else
              <a href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}">Register</a>
              @endif
          @endauth
      </div>
    @endif

    <!-- Loader -->
    <div id="placeholder" class="position-fixed">
      <div class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-dark" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <!-- endLoader -->


    <!-- Header -->
    <nav class="header">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-5 my-auto">
            <ul class="header-item-group d-lg-flex justify-lg-content-between">
              <li class="header-item-group__item">
                <a href="#" class="item-link">
                  VESTIDOS A MEDIDA
                </a>
              </li>
              <li class="header-item-group__item">
                <a href="#" class="item-link" >
                  ASESORAMIENTO
                </a>
              </li>
              <li class="header-item-group__item">
                <a href="" class="item-link" >
                  CLIENTES
                </a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 my-auto">
            <a href="">
              <img src="{{ asset('assets/images/logo-misia.svg') }}" alt="MISIA logo" class="img-fluid header__logo ml-auto ml-lg-0" />
            </a>
          </div>
          <div class="col-6 col-lg-5 my-auto">
            <div class="botton-menu align-self-center" >
              <div class="navbar navbar box-shadow">
                <div class="nav-button">
                  <span id="nav-icon3">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
              </div>
            </div>
            <ul class="header-item-group d-lg-flex justify-lg-content-between">
              <li class="header-item-group__item">
                <a href="" class="item-link" >
                  SOMOS MISIA
                </a>
              </li>
              <li class="header-item-group__item">
                <a href="#" class="item-link" >
                  CONTACTO
                </a>
              </li>
              <li class="header-item-group__item">
                <a class="item-link" >
                  MI CUENTA
                </a>
              </li>
              <li class="header-item-group__item rrss yt">
                <a href="#">
                  <span>
                    <img src="{{ asset('assets/images/icon-cart.svg') }}" alt="Icono carrito" class="img-fluid" />
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- endHeader -->

    @yield('content')

    <!-- Libraries -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

  </body>
</html>