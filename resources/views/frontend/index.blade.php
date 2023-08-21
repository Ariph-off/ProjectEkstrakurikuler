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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');


        * {
            /* width: 100%; */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            background-color: #272829;
        }

        :root {
            --main-color: #f0b30f;
        }

        .theme-text {
            color: var(--main-color);
        }

        .act {
            color: var(--main-color);
            border-bottom: 2px solid var(--main-color);
        }

        .navbar ul li a:hover {
            color: var(--main-color);
            border-bottom: 2px solid var(--main-color);
        }

        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/background.png");
            width: 100%;
            height: 100vh;
            background-position: center;
            background-size: cover;
            position: relative;
            margin: 0;
        }

        .wave {
            position: absolute;
            bottom: 0px;
        }

        .midlle {
            margin-top: 70px;
            height: 60vh;
            width: 50%;
            display: flex;
            justify-content: start;
            align-items: center;

        }

        .midlle h1 {
            font-size: 60px;
        }

        .btn {
            position: relative;
            font-size: 17px;
            text-transform: uppercase;
            text-decoration: none;
            padding: .5em 1.5em;
            display: inline-block;
            border-radius: 6em;
            transition: all .2s;
            border: none;
            /* font-family: inherit; */
            letter-spacing: 3px;
            font-weight: 700;
            color: black;
            background-color: #f0b30f;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .btn::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all .4s;
        }

        .btn::after {
            background-color: #f0b30f;
        }

        .btn:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }

        .content {
            padding-top: 100px;
            padding-bottom: 100px;
            width: 100%;
            background-color: #272829;
        }

        .jumbotron {
            background-color: #272829;
            width: 100%;
            height: 100vh;
            margin-top: 20px;
            height: 500px;
            display: flex;
        }

        .jumbotron h1,
        p {
            color: antiquewhite;
            margin-top: 80px;
        }

        .jumbotron img {
            width: 600px;
            height: 350px;
            margin-top: 100px;
        }

        /* .carousel {
            border: 10px solid white;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carousel img {
            border-radius: 40px;
        } */

        .carrousel {
            display: grid;
            grid-auto-flow: column;
            scroll-behavior: auto;
            gap: 2.2rem;
            overflow-y: auto;
            overscroll-behavior-x: contain;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            margin-right: 30px;
            margin-left: 30px;
        }

        .carrousel::-webkit-scrollbar {
            display: none;
        }

        .card {
            border: none;
            background-color: transparent;
            scroll-snap-align: start;
            border-radius: 30px;
            min-height: 550px;
            min-width: 850px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carrousel img {
            height: 550px;
            width: 850px;
            border-radius: 30px;
        }

        .about img {
            border-radius: 30px;
        }

        .about img:hover {
            border-radius: 30px;
            transform: scale(1.1);
            transition: 0.7s;
            box-shadow: black 2px 2px 10px 0px;
        }

        .content img:hover {
            transform: scale(0.9);
            border-radius: 30px;
            transition: 0.6s;
            background-image: linear-gradient(to bottom, red, blue);
        }

        .content .img:active {
            border-radius: 30px;
        }

        .futer {
            background-color: #272829;
        }

        #btn-back-to-top {
            position: fixed;
            bottom: 80px;
            right: 60px;
            display: none;
        }

        @media screen and (max-width: 425px) {
            .midlle {
                height: 40vh;
                margin-top: 180px;
            }

            .midlle h1 {
                font-size: 45px;
            }

            .text-copyright {
                font-size: 10px;
            }

            .text-warning {
                font-size: 15px;
            }

            .carousel {
                width: 80%;
            }

            .jumbotron{
                width: 100vh;
            }

            .jumbotron img {
            width: 350px;
            height: 150px;
            margin-top: 100px;
        }

            .card {
                min-height: 220px;
                min-width: 320px;
            }

            .carrousel img {
                height: 220px;
                width: 320px;
                border-radius: 30px;
            }

            .futer .text-warning {
                font-size: 10px;
            }
        }


        @media screen and (max-width: 320px) {
            .midlle h1 {
                font-size: 45px;
            }

            .text-copyright {
                font-size: 10px;
            }

            .text-warning {
                font-size: 15px;
            }

            .carousel {
                width: 80%;
            }

            .card {
                min-height: 200px;
                min-width: 300px;
            }

            .carrousel img {
                height: 200px;
                width: 300px;
                border-radius: 30px;
            }
        }

        /* awal tentang  */



        .about {
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: #272829;

        }

        .row-about {
            background-color: #DFCCFB;
            border-radius: 50px;
        }

        .row-about h1 {
            margin-left: 250px;
        }

        .row-about p {
            padding: 30px;
            text-align: center;

        }
    </style>



    <title>EskulKuy</title>
</head>

<body>
    <section class="header">
        <div class="container">
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
                                <a class="nav-link" href="#">Prestasi</a>
                            </li>
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Lainnya
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Login (admin)</a></li>
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
                        class="theme-text">bakat ekstra
                        yang lebih baik.</span></h1>

            </div>
            <div class="selengkapnya">
                <button class="btn"> Selengkapnya
                </button>
            </div>
        </div>
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
