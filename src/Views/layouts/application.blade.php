<!DOCTYPE html>
<html lang="en">
<head>
    @section('meta-content')
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @show
    @section('header-css')
        <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/nprogress/nprogress.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/iCheck/skins/flat/green.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
    @show
    <title>@yield('title', 'Lara Admin')</title>
</head>

<body class="@yield('body-class', 'nav-md')">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('') }}" class="site_title"><i class="fa fa-paw"></i> <span>@yield('content-title', 'Laravel Admin')</span></a>
                </div>

                <div class="clearfix"></div>

                @section('sidebar-profile')
                    @include('gentelella::modules.sidebar-profile')
                @show

                @section('sidebar-buttons')
                    @include('gentelella::modules.sidebar')
                @show

            </div>
        </div>

        @section('top-nav')
            @include('gentelella::modules.top-nav')
        @show

        <div class="right_col" role="main">
            @yield('content')
        </div>

        @section('footer')
            @include('gentelella::modules.footer')
        @show
    </div>
</div>
@section('footer-javascript')
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('assets/vendor/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/vendor/Chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gauge.js/dist/gauge.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/skycons/skycons.js') }}"></script>
    <script src="{{ asset('assets/vendor/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendor/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendor/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendor/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendor/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendor/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendor/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/vendor/DateJS/build/date.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
@show
</body>
</html>
