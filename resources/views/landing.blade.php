<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SOHIB | Sitem Online HIBAH</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/landing.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">SOHIB BANJARBARU</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Tahapan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Tentang</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="\login">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="\daftar">Daftar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <style>
            header.masthead {
                background: url('/image/Banjarbaru_city_hall.jpg') center center no-repeat;
                background-size: cover;
                /* Sesuaikan ukuran dan posisi gambar latar belakang */
            }
        </style>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="image/Banjarbaru.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">SISTEM ONLINE HIBAH BANJARBARU</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Selamat Datang</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tahapan</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center text-center">
                    <!-- Portfolio Item 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-10 w-10">
                            </div>
                            <img class="img-fluid" src="image/portfolio/note.png" alt="..." />
                            <br>
                            <h5 style="margin-top: 20px;text-align: center;">DAFTAR ONLINE<br> <small>(Registrasi Akun)</small></h5>
                        </div>
                    </div>
                    <!-- Portfolio Item 2 -->
                    <div class="col-md-3 mb-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-10 w-10">
                            </div>
                            <img class="img-fluid" src="image/portfolio/Group.png" alt="..." />
                            <br>
                            <h5 style="margin-top: 20px;text-align: center;">PENGAJUAN PERMOHONAN <br>  <small>(Permohonan Hibah)</small></h5>
                        </div>
                    </div>
                    <!-- Portfolio Item 3 -->
                    <div class="col-md-3 mb-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-10 w-10">
                            </div>
                            <img class="img-fluid" src="image/portfolio/verification.png" alt="..." />
                            <br>
                            <h5 style="margin-top: 20px;text-align: center;">Verifikasi dan Persetujuan <br>  <small>(Verifikasi dan Persetujuan Permohonan)</small></h5>
                        </div>
                    </div>
                    <!-- Portfolio Item 4 -->
                    <div class="col-md-3 mb-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-10 w-10">
                            </div>
                            <img class="img-fluid" src="image/portfolio/checkmark.png" alt="..." />
                            <br>
                            <h5 style="margin-top: 20px;text-align: center;">PENCAIRAN DANA <br>  <small>(Pencairan Dana setelah disetujui)</small></h5>
                        </div>
                    </div>
                </div>                
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Tentang</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Sistem Online Hibah Banjarbaru (SOHIB) adalah inovasi yang mengubah paradigma dalam penanganan Hibah.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Dengan memanfaatkan Kecanggihan teknologi,SOHIB Banjarbaru membuka pintu akses yang lebih luas bagi masyarakat untuk mengurus hibah secara online.</p></div>
                </div>
                <!-- About Section Button-->
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lokasi</h4>
                        <p class="lead mb-0">
                            Jl. Panglima Batur No. 1 Banjarbaru Prov,Kalsel, Banjarbaru
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Media Sosial</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://kesra.banjarbarukota.go.id/"><i class="fa-solid fa-globe fa-lg"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/bagiankesrasetdakobanjarbaru/"><i class="fa-brands fa-instagram fa-lg"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <img class="masthead-avatar mb-1" src="image/Banjarbaru.png" alt="..." />
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; SOHIB 2023</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
