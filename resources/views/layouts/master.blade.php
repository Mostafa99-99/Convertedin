<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Convertedin</title>

    <!-- Favicons -->
    <link href="{{asset('img/icon.jpg')}}" rel="icon">
    <link href="{{asset('img/icon.jpg')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="{{asset('../resources/admin_frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/admin_frontend/css/tabler-vendors.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/admin_frontend/css/tabler.min.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">



</head>


<header id="header"  class="header fixed-top d-flex align-items-center">

    <div style="margin-right: 50px"  class="d-flex align-items-center justify-content-between">
        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <img width="220px"  src="{{asset('img/Logo_convertedin.PNG')}}" alt="">
        </a>
        {{--        <i  class="bi bi-list toggle-sidebar-btn4"></i>--}}
    </div><!-- End Logo -->


</header><!-- End Header -->

    @yield('content')

<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="text-center">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; 2024
                        <a href="." class="link-secondary">Mostafa Maher</a>.
                        All rights reserved.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</html>
