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

        @media screen and (max-width: 425px) {
            .midlle{
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
                            <li class="nav-item">
                                <a class="nav-link act" aria-current="page" href="">Login (admin)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/kuliner.nusantara/">Hubungi Kami</a>
                            </li>
                    </div>
                </div>

            </nav>
            <!--navbar ends here -->
            <div class="midlle">
                <h1 class="tulisan text-white fw-bold display-3">Membantu anda menemukan <br> <span
                        class="theme-text">ekstra
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

    <footer class="bg-dark text-white pt-4 pb-4">
        <div class="content text-center text-md-left">
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
