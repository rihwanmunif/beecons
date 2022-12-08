<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>PT Baracipta Esa Engineering</title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
        <?php $this->load->view('course/header_co'); ?>
        <!--heroes-->
        <div class="heroes container">
                <div class="row">
                        <div class="detail-bundling"></div>
                        <div class="col-md-6 py-5">
                                <a href="">Basic</a>
                                <h2 class="title">Bundling BMI Revit All Discipline</h2>
                                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione ipsam facere quod? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eligendi odio adipisci laborum, excepturi possimus porro saepe incidunt reiciendis sequi nihil at tempore, nesciunt rem ab commodi obcaecati, non dignissimos.</p>

                                <p class="old_price m-0 ls-1 text-danger mt-3"><s>Rp. 350.000</s></p>
                                <p class="new_price m-0 ls-1 fw-bold text-dark" style="font-size:25px">Rp. 299.000</p>
                                <span><a href="" class="btn btn-warning" style="height:35px; width: 200px; font-size:15px">Beli Sekarang</a></span>
                        </div>
                        <div class="col-md-6 py-5">
                                <img src="<?php echo base_url() . 'assets/img/course/atasan.png' ?>" class="img-fluid" alt="">
                        </div>
                </div>
        </div>

        <!--Basic Card-->
        <div class="liner">
                <div class="basic container">
                        <div class="row">
                                <div class="col-md-5 py-5">
                                        <div class="cardd">
                                                <div class="container  px-5 py-4">
                                                        <h6>Basic</h6>
                                                        <h2 class="title_course">Introduction to IBM and Autodesk Revit </h2>
                                                        <div class="basic-img d-flex">
                                                                <i class="bi bi-play-btn-fill"></i>
                                                                <h6>80</h6>
                                                                <p class="pour">Videos</p>
                                                                <i class="bi bi-book-fill"></i>
                                                                <h6>80</h6>
                                                                <p class="pour">Module</p>
                                                                <i class="bi bi-clock-fill"></i>
                                                                <h6>80</h6>
                                                                <p class="pour">Time</p>
                                                        </div>
                                                        <img src="<?php echo base_url() . 'assets/img/course/basic/Frame 14.svg' ?>" alt="" class="number">
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-7 py-5">
                                        <div class="basic-content ">
                                                <h2>Penjelasan Course</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat obcaecati illo sint eius deleniti perspiciatis, ipsam, laborum doloribus maiores aliquid rerum! Optio, assumenda? Accusantium provident, earum ipsa qui fugit exercitationem.</p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <!-- Courses Start -->
        <div class="container py-5">
                <div class="other d-flex">
                        <h5 class="align-item-justify">Other Course</h5>
                        <!--Hide
            <h6 class="text-end"><a href="<?php echo base_url() . 'course' ?>">Tampilkan Lainnya</a></h6>
            <--Hide-->
                </div>

                <div class="row g-4 justify-content-center">
                        <?php
                        if ($courselatest != '') {
                                foreach ($courselatest as $item) {
                        ?>
                                        <div class="col-lg-3 col-md-6">
                                                <div class="course-item" style="background-color:#fff;">
                                                        <div class=" position-relative overflow-hidden">
                                                                <a href="course/details_course/<?= $item->course_id ?>">
                                                                        <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/course/course-1.png' ?>" alt="" /></a>
                                                                <div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                                                                        <!--<label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b>Basic</b></label>-->
                                                                </div>
                                                                <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                                                                        <label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b>Rp <?= $item->new_price ?></b></label>
                                                                </div>
                                                        </div>
                                                        <div class="text-decoration p-4 pb-0 ">
                                                                <a href="course/details_course/<?= $item->course_id ?>">
                                                                        <h6 class="mb-3" style="font-size:15px;"><b><?= $item->title ?></b></h6>
                                                                </a>
                                                        </div>
                                                        <button type="button" class="btn btn-warning mb-4" style="border-radius: 5px; font-weight:bold; width:75%; margin-left:20px"><a href="<?php echo base_url() . 'signin' ?>"><b>Beli</b></a></button>
                                                        <button type="button" class="btn btn-outline-warning mb-4" style="border-radius: 5px; font-weight:bold;"><a href="<?php echo base_url() . 'signin' ?>"><i class="bi bi-cart-plus-fill"></i></a></button>
                                                </div>
                                        </div>
                        <?php }
                        }
                        ?>
                </div>
        </div>
        <!-- Courses End -->

        <?php $this->load->view('footer'); ?>

        <script>
                $(document).ready(function() {
                        var id = window.location.pathname.split('/').pop();
                        var url = 'https://lms.lazy2.codes/public/api/bundling/detail/' + id;
                        $.ajax({
                                url: url,
                                type: 'GET',
                                dataType: 'JSON',
                                success: function(result) {
                                        console.log(result);
                                        $('.old_price').html('<s>Rp. ' + result.bundling.old_price + '</s>');
                                        $('.new_price').html('Rp. ' + result.bundling.new_price);
                                        $('.title').html(result.bundling.title);
                                        $('.desc').html(result.bundling.description);
                                        $('.title_course').html(result.course[''].title);
                                }
                        })
                })
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>