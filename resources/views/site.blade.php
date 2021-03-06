<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title> Site -  {{ env('APP_NAME') }} </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="keywords" content={{ env('APP_NAME') }}>
        <meta name="description" content={{ env('APP_NAME') }}>
        <meta name="author" content="Samayun-Chy">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#ffffff">
         <link rel="manifest" href="/manifest.json">

        <link rel="stylesheet" href="{{ asset('css/main-app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/blue.css') }}">
        <script>
            (function () {
                window.Laravel = {
                    csrfToken: '{{ csrf_token() }}'
                };
            })();
        </script>
</head>

<body>
    <div id="main-app">
        @if (Auth::check())
        <main-app :user="{{ Auth::user() }}"></main-app>
        @else
        <main-app :user="false"></main-app>
        @endif
           <mobile-menu></mobile-menu>
           <mobile-footer></mobile-footer>
           <quick-view></quick-view>
    </div>


    {{-- <script >
       if ('serviceWorker' in navigator) {
           navigator.serviceWorker.register('/sw.js')
       }else{
           console.log('Failed to register');
       }
    </script> --}}

    <!-- Plugins JS File -->
<!--     {{-- <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/superfish.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/bootstrap-input-spinner.js"></script>
    <script src="/assets/js/jquery.elevateZoom.min.js"></script>
    <script src="/assets/js/bootstrap-input-spinner.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script> --}}

    {{-- <script src="/assets/js/main.js"></script> --}} -->
     <script src="{{asset('js/template-cachable.js')}}"></script>

    <script src="{{mix('js/app.js')}}" defer></script>
    <script>
        // $('#product-zoom').elevateZoom();
    </script>
</body>
</html>
