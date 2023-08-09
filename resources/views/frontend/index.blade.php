<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/extraa.png");
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
            background-color: #f0b30f;
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
            background-color: transparent scroll-snap-align: start;
            border-radius: 30px;
            min-height: 550px;
            min-width: 850px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card:active {}

        .carrousel img {
            height: 550px;
            width: 850px;
            border-radius: 30px;
        }

        .loader {
            position: relative;
        }

        .loader span {
            position: absolute;
            color: #fff;
            transform: translate(-50%, -50%);
            font-size: 38px;
            letter-spacing: 5px;
        }

        .loader span:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 0.3px rgb(0, 57, 244);
        }

        .loader span:nth-child(2) {
            color: rgb(0, 4, 255);
            -webkit-text-stroke: 1px rgb(17, 0, 255);
            animation: uiverse723 3s ease-in-out infinite;
        }

        @keyframes uiverse723 {

            0%,
            100% {
                clip-path: polygon(0% 45%, 15% 44%, 32% 50%,
                        54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%, 16% 65%, 34% 66%,
                        51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
            }
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

            .card {
                min-height: 220px;
                min-width: 320px;
            }

            .carrousel img {
                height: 220px;
                width: 320px;
                border-radius: 30px;
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
    </style>



    <title>EskulKuy</title>
</head>

<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> &nbsp;<strong>EKSTRA</strong>SMAKENSA</a>
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
                                <a class="nav-link" href="#content">Tentang</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#">Ekstra</a>
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
        {{-- <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f0b30f" fill-opacity="1"
                d="M0,128L60,149.3C120,171,240,213,360,218.7C480,224,600,192,720,197.3C840,203,960,245,1080,234.7C1200,224,1320,160,1380,128L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path> --}}
        </svg>
    </section>
    <section class="content d-flex justify-content-center" id="content">
        <div class="carrousel">
            <article class="card">
                <img src="img/da_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/remas_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
            <article class="card">
                <img src="img/pmr_landing.jpg" alt="">
            </article>
        </div>
    </section>

    <footer class="bg-dark text-white pt-4 pb-4">
        <div class="futer text-center text-md-left">
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
