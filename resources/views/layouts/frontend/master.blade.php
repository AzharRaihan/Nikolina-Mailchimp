<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
 <!--==** Fav-icon **==-->
 <link rel="icon" href="{{ asset('assets/frontend/img/fav-icon.png') }}" type="image/x-icon">
<!-- Fontawesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!-- Vendor CSS Files -->
<link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/venobox/venobox.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/other-pages-css/owl-custom-css.css') }}">
<!-- Template Main Css Start -->
<link href="{{ asset('assets/frontend/css/base.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
<!-- iziToast Css -->
<link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
<!-- Other Page Css -->
@stack('page-css')
<style>

</style>
</head>
<body>

    <!-- Header Section Start -->
    @include('layouts.frontend.partials.header')
    <!-- Header Section End -->

    <!-- Yield another page -->
    @yield('page-content')
    <!-- End Yield another page -->

    <!-- Footer Section Start -->
    @include('layouts.frontend.partials.footer')
    <!-- Footer Section End -->


 <!-- Vendor JS Files -->
 <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/venobox/venobox.min.js') }}"></script>
 <!-- iziToast Js -->
 <script src="{{ asset('js/iziToast.js') }}"></script>
 @include('vendor.lara-izitoast.toast')
 <!-- Template Main JS File -->
 <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/main2.js') }}"></script>
 <!-- yield another page js -->
 @stack('page-js')
</body>
</html> 

