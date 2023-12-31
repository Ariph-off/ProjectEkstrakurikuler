<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="icon" href="{{asset('assets')}}/assets/img/smkn1bws.png">
  <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <title>EkstraSmakensa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('assets')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('partiels.navbar')
  <div class="container">
    @yield('container')
  </div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('partiels.footer')
  <div class="footer-newsletter">
    @yield('footer-newsletter')
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('assets')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('assets')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('assets')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('assets')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets')}}/assets/js/main.js"></script>

</body>

</html>
