<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('public/img/icon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    @yield('head')
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
</head>
<body data-spy="scroll" data-target="#navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top smooth-transition-300" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#banner"><img src="{{ asset('public/img/logo.png') }}" alt="NearMX"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-0">
                <li class="nav-item">
                    <a class="nav-link" href="#banner">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-blue" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main" id="app">
    @yield('content')
</div>
<footer class="text-white">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-5 col-md-4">
                    <p class="mx-auto">
                        Lorem ipsum #5698, Col. Lorem Ipsum
                        <span class="clearfix"></span>
                        Chihuahua, Chih.
                    </p>
                    <p class="mx-auto">
                        Tel. +52 (614) 145 8963
                        <span class="clearfix"></span>
                        Cel. +52 (614) 156 9863
                    </p>
                    <p class="mx-auto">
                        info@hotmail.com
                    </p>
                </div>
                <div class="col-12 col-sm-7 col-md-8">
                    <img src="{{ asset('public/img/logo-footer.png') }}" alt="NearMX" class="img-fluid mx-auto">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <span>Derechos Reservados {{ date('Y') }}</span>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('public/js/app.js') }}"></script>
@yield('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>