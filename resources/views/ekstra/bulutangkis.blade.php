<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portal Badminton</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('portal') }}/assets/img/bulutangkis/badminton.png" rel="icon">
  <link href="{{ asset('portal') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('portal') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('portal') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('portal') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('portal') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('portal') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- css footer -->
  <link href="{{asset('assets')}}/assets/css/style.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('portal') }}/assets/css/variables.css" rel="stylesheet">
  <!-- <link href="{{ asset('portal') }}/assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="{{ asset('portal') }}/assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="{{ asset('portal') }}/assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="{{ asset('portal') }}/assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="{{ asset('portal') }}/assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="{{ asset('portal') }}/assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('portal') }}/assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('portal') }}/assets/img/logo.png" alt=""> -->
        <h1>EKSTRASMAKENSA</h1>
      </a>



      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/userekstra">Beranda</a></li>
          <li><a class="nav-link scrollto" href="index.html#featured-services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#cta">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#faq">Quations</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Struktur</a></li>
        </ul>
      </nav>

      <!-- <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="{{ asset('portal') }}/assets/img/bulutangkis/badminton.png" class="img-fluid animated">
      <h2>Welcome to Ekstrakurikuler <span>Badminton</span></h2>
    </div>
  </section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <h2 align="center">Jenis jenis Badminton</h2>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/23.png" width="100px" height="100px" line-right="50px">
              <h4><a href="" class="stretched-link">Tunggal putra</a></h4>
              <p>TUNGGAL PUTRA ADALAH PERTANDINGAN YANG DIMAINKAN OLEH SEORANG PUTRA/LAKI-LAKI.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/tunggalputri.png" width="100px" height="100px" line-right="50px">
              <h4><a href="" class="stretched-link">Tunggal putri</a></h4>
              <p>TUNGGAL PUTRI ADALAH PERTANDINGAN YANG DIMAINKAN OLEH SEORANG PUTRI/PEREMPUAN

              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/ganda putra.png" width="100px" height="100px" line-right="50px">
              <h4><a href="" class="stretched-link">Ganda putra</a></h4>
              <p>GANDA PUTRA ADALAH PERTANDINGAN YANG DIMAINKAN OLEH DUA ORANG PUTRA/LAKI-LAKI</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/ganda putri.png" width="100px" height="100px" line-right="50px">
              <h4><a href="" class="stretched-link">Ganda putri</a></h4>
              <p>GANDA PUTRI ADALAH PERTANDINGAN YANG DIMAINKAN OLEH DUA ORANG PUTRI/PEREMPUAN

              </p>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/ganda campuran.png" width="100px" height="100px" line-right="50px">
              <h4><a href="" class="stretched-link">Ganda campur</a></h4>
              <p>GANDA CAMPURAN ADALAH PERTANDINGAN YANG DIMAINKAN OLEH DUA ORANG YAITU PUTRA DAN PUTRI</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Apa yang dimaksud dengan <em>Badminton</em></h3>
            <p> Badminton adalah suatu olahraga yang menggunakan alat yang berbentuk bulat dengan memiliki rongga-rongga di bagian pemukulnya. Dan memiliki gagang. Alat ini dikenal dengan nama raket yang dimainkan oleh dua orang (untuk tunggal) atau dua pasangan (untuk ganda) yang saling berlawanan.</p>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/7.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->




    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3>Pertanyaan yang Sering Diajukan<strong>Questions</strong></h3>

            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <!-- <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Mengapa paduan suara membutuhkan dirigen?
                  </button>
                </h3> -->
                <!-- <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dirigen bertugas untuk memberi ide dan membimbing para musisi untuk menciptakan penampilan yang maksimal. Gestur yang dilakukan dirigen juga bukanlah gerakan asalan, tetapi merupakan pola ketukan untuk membantu para musisi dengan berbagai instrumen agar mengikuti ritme metrik yang sama.
                  </div>
                </div> -->
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apakah ada ekstrakurikuler Badminton? </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    merupakan ekstrakurikuler bidang olahraga yang didalamnya melatih berbagai teknik dan strategi dalam bermain bulutangkis. </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa manfaat ekskul badminton? </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dengan adanya kegiatan ekstrakurikuler badminton di harapkan dapat menjadi wadah untuk penyaluran bakat para siswa. Jenis kegiatanpun sangat beragam baik itu seputar olah raga, keterampilan ataupun pengetahuan. </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa keuntungan mengikuti ekskul? </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Membantu siswa mengenali hubungan antara berbagai mata pelajaran sekolah. Media untuk menyalurkan bakat dan minat siswa. Salah satu langkah upaya untuk pembangunan manusia secara utuh. Mengembangkan minat dan bakat siswa untuk pembinaan ke arah yang positif.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('portal') }}/assets/img/bulutangkis/ganda putra.png");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Galeri</h2>
          <p>Galeri Badminton SMKN 1 Bondowoso adalah tempat yang menampilkan berbagai pencapaian
            dan aktivitas Badminton di sekolah tersebut. Dengan koleksi foto, perlengkapan, dan dokumentasi penting, galeri ini berfungsi untuk mempromosikan nilai-nilai Badminton, menginspirasi siswa-siswi lainnya untuk bergabung, dan memperkuat keterampilan badminton.
          </p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">1</li>
            <li data-filter=".filter-branding">2</li>
            <li data-filter=".filter-books">3</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <a href="{{ asset('portal') }}/assets/img/bulutangkis/8.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('portal') }}/assets/img/bulutangkis/8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('portal') }}/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('portal') }}/assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('portal') }}/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('portal') }}/assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('portal') }}/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('portal') }}/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('portal') }}/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="{{ asset('portal') }}/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="{{ asset('portal') }}/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="{{ asset('portal') }}/assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <a href="{{ asset('portal') }}/assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Struktur</h2>
          <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('portal') }}/assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
                <h4>Walter White</h4>
                <span>Katua</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('portal') }}/assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
                <h4>Sarah Jhonson</h4>
                <span>Sekretaris</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('portal') }}/assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
                <h4>William Anderson</h4>
                <span>Bendahara</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

    @include('partiels.footer')
    <div class="footer-newsletter">
      @yield('footer-newsletter')
    </div>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('portal') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('portal') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('portal') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('portal') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('portal') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('portal') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('portal') }}/assets/js/main.js"></script>

</body>

</html>