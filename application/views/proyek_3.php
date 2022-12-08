<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PT Baracipta Esa Engineering</title>

    <title>PT Baracipta Esa Engineering </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Icons -->
    <link href="<?php echo base_url() . 'assets/img/Logo-BEE-1.png' ?>" rel="icon">
    <link href="<?php echo base_url() . 'assets/img/Logo-BEE.png' ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() . 'assets/vendor/aos/aos.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/vendor/glightbox/css/glightbox.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/vendor/remixicon/remixicon.css' ?>" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href=""><img src="..\assets\img\Logo-BEE.png" alt=""></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda </a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Proyek Kami</a></li>
                    <li><a class="nav-link scrollto" href="#team">Tim Kami</a></li>
                    <li><a class="nav-link scrollto" href="#skema_kerja">Skema Kerja</a></li>
                    <li><a class="nav-link scrollto" href="#artikel">Artikel</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="color:white"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">

                <ol>
                    <li><a href="http://localhost/beecons/">Beranda</a></li>
                    <li><a href="http://localhost/beecons/proyek_3">Detail Proyek</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?php echo base_url() . 'assets/img/portfolio/minimalis.png' ?>" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo base_url() . 'assets/img/portfolio/minimalis.png' ?>" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="<?php echo base_url() . 'assets/img/portfolio/minimalis.png' ?>" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project Details</h3>
                        <ul>
                            <li><strong>Tahun</strong>: 2021</li>
                            <li><strong>Klien</strong>: Universitas Gadjah Mada</li>
                            <li><strong>Status</strong>: Renovasi</li>
                            <li><strong>Lokasi</strong>: <a href="#">Yogyakarta</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Project Overview</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    <?php $this->load->view('footer'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() . 'assets/vendor/purecounter/purecounter_vanilla.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/aos/aos.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/glightbox/js/glightbox.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/isotope-layout/isotope.pkgd.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/waypoints/noframework.waypoints.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/php-email-form/validate.js' ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() . 'assets/js/main.js' ?>"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>