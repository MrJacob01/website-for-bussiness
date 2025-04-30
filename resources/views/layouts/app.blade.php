<!-- layouts/app.blade.php -->
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YQFM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- JS here -->
    <script src="{{ asset('js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.js') }}"></script>
    <script src="{{ asset('js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jarallax.min.js') }}"></script>
    <script src="{{ asset('js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('js/plugins/easypie.js') }}"></script>
    <script src="{{ asset('js/plugins/headding-title.js') }}"></script>
    <script src="{{ asset('js/plugins/lenis.min.js') }}"></script>
    <script src="{{ asset('js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/rs-anim-int.js') }}"></script>
    <script src="{{ asset('js/plugins/rs-scroll-trigger.min.js') }}"></script>
    <script src="{{ asset('js/plugins/rs-splitText.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.lettering.js') }}"></script>
    <script src="{{ asset('js/plugins/parallax-effect.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/plugins/marquee.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chart.umd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/vendor/purecounter.js') }}"></script>
    <script src="{{ asset('js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
