<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title> @yield('title')-پنل مدیریت</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('admin/img/core-img/favicon.png')}}">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{ asset('admin/css/default-assets/notification.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    @yield('css')

</head>

<body>
<!-- Preloader -->
{{--@include('dashboard.partials.preloader')--}}
<!-- Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="index.html"><img class="desktop-logo" src="{{ asset('admin/img/core-img/logo.png') }}" alt="لوگوی دسک تاپ"> <img class="small-logo" src="img/core-img/small-logo.png" alt="آرم موبایل"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
                @include('dashboard.partials.sidebar')
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
    @include('dashboard.partials.header')
    <!-- Main Content Area -->
        @yield('content')
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/bundle.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/date-time.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/setting.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/fullscreen.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/bootstrap-growl.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/notification-active.js') }}"></script>

<!-- Active JS -->
<script src="{{ asset('admin/js/default-assets/active.js') }}"></script>
@yield('js')
<!-- These plugins only need for the run this page -->
<script src="{{ asset('admin/js/default-assets/peity.min.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/peity-demo.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/am-chart.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/gauge.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/serial.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/light.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/ammap.min.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/worldlow.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/radar.js') }}"></script>
<script src="{{ asset('admin/js/default-assets/dashboard-2.js') }}"></script>


</body>
</html>
