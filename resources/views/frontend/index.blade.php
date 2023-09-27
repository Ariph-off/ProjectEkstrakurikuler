<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/style.css">
    <style>
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/background.png");
        }
    </style>

        


    <title>EskulKuy</title>
</head>

<body>
    
    <section class="header">
        <section class="container" >
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <div class="menu container-fluid">
                    <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        &nbsp;<strong>EKSTRA</strong>SMAKENSA</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item mx-3">
                                <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#about">Tentang</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#content">Ekstra</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#">Pembina</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#" >Prestasi</a>
                            </li>
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Lainnya
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/')}}">Login (admin)</a></li>
                                    <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
                                    <li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--navbar ends here -->
            <div class="midlle" id="home">
                <h1 class="tulisan text-white fw-bold display-3">Membantu anda menemukan <br> <span
                        class="theme-text color-#37517e">bakat ekstra
                        yang <br> lebih baik.</span></h1>

            </div>
            <div class="selengkapnya">
                <button class="btn"> Selengkapnya
                </button>
            </div>
        </section>
    </section>
    <!-- awal tentang  -->

    <div class="jumbotron">
        <div class="container" id="about">
            <div class="row d-flex align-items-center">
                <div class="container"></div>
                <div class="col-sm-6"><img src="img/smkn1bws.png" alt=""> </div>
                <div class="col-sm-6">
                    <h1 class="display-4">Wattpad</h1>
                    <p class="lead">Wattpad adalah sebuah platform daring yang memungkinkan penggunanya untuk membaca
                        dan menulis cerita.
                        Didirikan oleh Allen Lau dan Ivan Yuen, platform ini bertujuan untuk membuat komunitas membaca,
                        serta menghapus penghalang antara pembaca dan penulis.</p>
                    <!-- <hr class="my-8">
         <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
         <a class="btn btn-primary btn-lg rounded-pill" href="#" role="button">Learn more</a></div> -->
                </div>
            </div>
        </div>
    </div>


    <!-- akhir tentang -->
    <section class="content d-flex justify-content-center shadow-lg" id="content">
        <div class="carrousel">
            <article class="card">
                <img class="img shadow" src="img/da_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/remas_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img class="img shadow" src="img/pmr_landing.jpg" alt="">
            </article>
        </div>
        <button type="button" class="btn btn-warning btn-floating rounded-md shadow btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </section>

    <footer class="text-white pt-4 pb-4">
        <div class="futer text-center text-md-left shadow-lg">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-light-emphasis">
                        <strong>Ekstra</strong>Smakensa
                    </h5>
                    <p class="text-warning">Yuk bergabung di ekstrakurikuler SMKN 1 Bondowoso.</p>
                </div>
                <hr class="mb-4">
                <div class="row align-items-center">
                    <div class="col md-7 col-lg-15">
                        <p class="text-copyright">Copyright &copy All right reserved by: EkstraSmakensa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
