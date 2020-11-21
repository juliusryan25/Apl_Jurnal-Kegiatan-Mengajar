<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>JURNAL.IN</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('frontpage/assets/img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('frontpage/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">JURNAL.IN</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Fitur</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontak</a></li> |
                        <li class="nav-item"><a class="nav-link " href="{{ url('/admin') }}">Masuk</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">JURNAL.IN</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Aplikasi manajemen jurnal KBM guru berbasis web</p>
                        <a href={{ url('/admin') }} class="btn btn-success">Masuk</a>
                        <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Fungsi Jurnal KBM</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Sebagai wadah yang memuat hasil refleksi peserta didik tentang pembelajaran dapat dimanfaatkan guru, kepala sekolah dan bahkan orang tua dapat membacanya sebagai bahan masukan untuk melihat kemampuan peserta didik dalam bidang yang dipelajarinya.</p>
                        <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Fitur-Fitur Dalam Jurnal KBM</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-book text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Manajemen Mapel</h3>
                            <p class="text-muted mb-0"></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-pencil-alt text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Manajemen Jurnal KBM</h3>
                            <p class="text-muted mb-0"></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="{{asset('frontpage/assets/img/portfolio/fullsize/mapel.jpeg')}}">
                            <img class="img-fluid" src="{{asset('frontpage/assets/img/portfolio/thumbnails/mapel.jpeg')}}" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Manajemen Mapel</div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('frontpage/assets/img/portfolio/fullsize/kelas.jpeg')}}">
                            <img class="img-fluid" src="{{asset('frontpage/assets/img/portfolio/thumbnails/kelas.jpeg')}}" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Jadwal Kelas</div>
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="{{asset('frontpage/assets/img/portfolio/fullsize/jurnal.jpeg')}}">
                            <img class="img-fluid" src="{{asset('frontpage/assets/img/portfolio/thumbnails/jurnal.jpeg')}}" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Manajemen Jurnal KBM</div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('frontpage/assets/img/portfolio/fullsize/4.jpg')}}">
                            <img class="img-fluid" src="{{asset('frontpage/assets/img/portfolio/thumbnails/4.jpg')}}" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('frontpage/assets/img/portfolio/fullsize/5.jpg')}}">
                            <img class="img-fluid" src="{{asset('frontpage/assets/img/portfolio/thumbnails/5.jpg')}}" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{asset('frontpage/assets/img/portfolio/fullsize/6.jpg')}}">
                            <img class="img-fluid" src="{{asset('frontpage/assets/img/portfolio/thumbnails/6.jpg')}}" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="#">contact@yourwebsite.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('frontpage/js/scripts.js') }}"></script>
    </body>
</html>
