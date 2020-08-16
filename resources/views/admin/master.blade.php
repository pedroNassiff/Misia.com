<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') Administración</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}"/> 
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/> 
    <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!--CKeditor-->
    <script src="{{ url('/static/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('/static/js/admin.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="col1">@include('admin.sidebar')</div>
        <div class="col2">
            <!-- Header -->
                <nav class="header nav-desktop">
                <div class="container">
                    <div class="row">
                    <div class="col-6 col-lg-5 my-auto">
                        <ul class="header-item-group d-lg-flex justify-lg-content-between">
                        <li class="header-item-group__item {{ Request::segment(1) === 'vestidos-a-medida' ? 'active' : null }}">
                            <a href="{{ url('/vestidos-a-medida') }}" class="item-link">
                            VESTIDOS A MEDIDA
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'asesoramiento' ? 'active' : null }}">
                            <a href="{{ url('/asesoramiento') }}" class="item-link" >
                            ASESORAMIENTO
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'clientes' ? 'active' : null }}">
                            <a href="{{ url('/clientes') }}" class="item-link" >
                            CLIENTES
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 my-auto">
                        <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo-misia.svg') }}" alt="MISIA logo" class="img-fluid header__logo ml-auto ml-lg-0" />
                        </a>
                    </div>
                    <div class="col-6 col-lg-5 my-auto">
                        <ul class="header-item-group d-lg-flex justify-lg-content-between">
                        <li class="header-item-group__item {{ Request::segment(1) === 'somos-misia' ? 'active' : null }}">
                            <a href="{{ url('/somos-misia') }}" class="item-link" >
                            SOMOS MISIA
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'contacto' ? 'active' : null }}">
                            <a href="{{ url('/contacto') }}" class="item-link" >
                            CONTACTO
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'perfil' ? 'active' : null }}">
                            <a class="item-link" >
                            MI CUENTA
                            </a>
                            <ul class='item-group sub-group'>
                            <li class='item sub-item'>
                                <a href="/login" class='item-link'>
                                INGRESAR
                                </a>
                            </li>
                            <li class='item sub-item'>
                                <a
                                href="/register"
                                class='item-link'
                                >
                                CREAR CUENTA
                                </a>
                            </li>
                            </ul>
                        </li>
                        <li class="header-item-group__item rrss yt">
                            <a href="{{ url('/') }}">
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

                <div class="page">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb shadow">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/admin') }}">Administración</a>
                                </li>
                                @section('breadcrumb')
                                @show
                            </ol>
                            
                        </nav>
                    </div>
                    @section('content')
                    @show
                </div>
              
            </div>
            
        </div>
    </body>
</html>