<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Detail Course</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Icons -->
    <link href="<?php echo base_url() . 'assets/img/Logo-BEE-1.png' ?>" rel="icon">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    <div class="heroes container">
        <div class="row">
            <div class="col-md-8 py-5">
                <a href="">Basic</a><br>
                <h2 class="title_course"><b>Design User Experience (UX) Untuk Pemula</b></h2>
            </div>
            <div class="col-md-4 py-5">
                <ol>
                    <h3 class="old_price">Rp 350.000</h3>
                    <h2 class="new_price">Rp 299.000</h2>
                </ol>
            </div>
        </div>
    </div>

    <!--Videos-->
    <div class="videos container">
        <div class="row">
            <div class="col-md-7 py-2">
                <div class="box-head" data-bs-toggle="modal" data-bs-target="#signin">
                    <img src="<?php echo base_url() . 'assets/img/course/detil.png' ?>" width="100%" height="400px">
                </div><br><br>
                <div class="intro ">
                    <h6>Instructor</h6>
                    <img src="<?php echo base_url() . 'assets/img/course/Rectangle1.svg' ?>" alt="" class="intro">
                    <h4>Faiz In'amurrohman</h4>
                </div>
            </div>

            <div class="col-md-5 py-2">
                <h3>
                    <center><b>Learning Materials</b></center>
                </h3>
                <div id="list-materi" class="videos accordion overflow-auto p-3 bg-light" style="max-width: 600px; max-height: 300px;">
                </div><br>

                <div class="aksi" style="margin-top:10px;" data-bs-toggle="modal" data-bs-target="#signin">
                    <button class="btn btn-outline-warning w-100" style="margin-left:0px; color:#000">
                        <b>Add to Cart</b><i class="fa fa-sharp fa-solid fa-cart-plus ms-2"></i>
                    </button>
                    <button class="btn btn-warning w-100 mt-2 btn-beli" style="margin-left:0px"><b>Buy Course</b></button>
                </div>
                <script src="<?= base_url() ?>/assets/js/materi.js"></script>
            </div>
        </div>
    </div>
    <br>

    <!--Text Deskripsi-->
    <div class="text container">
        <h5>About Course</h5>
        <hr style="width: 150px; height:5px; color:#ffd200">
        <p class="desc">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolore quo modi sint suscipit vel minima? Optio deleniti repellendus, nostrum nisi rem ratione repellat obcaecati enim id dicta, beatae dolores?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Mollitia voluptatum recusandae officiis optio hic omnis reiciendis possimus ab similique dolor.
            Consectetur exercitationem officiis at impedit quisquam facere dolor quas aliquid!
        </p><br>
        <h6><i>Key Takeways :</i></h6>
        <p class="key">
            Key Takeways API
        </p>
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
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item" style="background-color:#fff;box-shadow: 0 0 50px rgba(214, 215, 216, 0.8);">
                            <div class=" position-relative overflow-hidden">
                                <a href="/course/details_course/<?= $item->course_id ?>">
                                    <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/course/course-1.png' ?>" alt="" /></a>
                                <!--<div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                      <label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b><?= $itemCategory->name ?></b></label>
                  </div>-->
                                <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                                    <label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b><span class="formatPrice"><?= $item->new_price ?></span></b></label>
                                </div>

                            </div>
                            <div class="text-decoration p-4 pb-0 ">
                                <a href="course/details_course/<?= $item->course_id ?>">
                                    <h6 class="mb-3" style="font-size:16px; height:100%; margin: 0px 0px 8px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><b><?= $item->title ?></b></h6>
                                </a>
                                <button type="button" class="btn btn-warning mb-4" style="border-radius: 5px; font-weight:bold; width:80%;" data-bs-toggle="modal" data-bs-target="#signin"><b>Buy</b></button>
                                <button type="button" class="btn btn-outline-warning mb-4" style="border-radius: 5px; font-weight:bold; color:#000" data-bs-toggle="modal" data-bs-target="#signin"><i class="bi bi-cart-plus-fill"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="signinLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="close-modal-login text-dark d-flex justify-content-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Sign In Akun</h5>
                                    <div class="message-register success my-3"></div>
                                    <!-- Email input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example3">Email</label>
                                        <input type="email" name="email" id="form3Example3" class="form-control form-control-md" placeholder="Enter email" required>

                                    </div>
                                    <div class="mb-3">
                                        <!-- Password input -->
                                        <label class="form-label" for="formPassword">Password</label>
                                        <input type="password" id="formPassword" class="form-control form-control-md" placeholder="Enter password" />
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-warning w-100" name="login"><b>Masuk</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
    <!-- Courses End -->

    <script>
        function number_format(number, decimals, dec_point, thousands_point) {
            if (number == null || !isFinite(number)) {
                throw new TypeError("number is not valid");
            }

            if (!decimals) {
                var len = number.toString().split('.').length;
                decimals = len > 1 ? len : 0;
            }

            if (!dec_point) {
                dec_point = '.';
            }

            if (!thousands_point) {
                thousands_point = ',';
            }

            number = parseFloat(number).toFixed(0);

            number = number.replace(".", dec_point);

            var splitNum = number.split(dec_point);
            splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
            number = splitNum.join(dec_point);

            return number;
        }


        $(document).ready(function() {
            var id = window.location.pathname.split('/').pop();
            // var url = '<?= base_url('/detail-course') ?>/' + id;
            var url = 'https://lms.lazy2.codes/api/course/detail/' + id;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',
                success: function(result) {
                    console.log(result);

                    $('.old_price').html('Rp ' + number_format(result.old_price, 0, ",", "."));
                    $('.new_price').html('Rp ' + number_format(result.new_price, 0, ",", "."));
                    $('.title_course').html(result.title);
                    $('.desc').html(result.description);
                    $('.key').html(result.key_takeaways);
                }
            })
        })
    </script>

    <?php $this->load->view('footer'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Button Whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=628112632799&text=" class="btn btn-warning" target="_blank" style="position: fixed; right: 70px; bottom: 15px; height :40px; z-index:99"><i class="bi bi-whatsapp" style="margin-right: 5px;"></i>Hubungi Kami</a>

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
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.priceformat.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>
    <script>
        $(document).ready(function() {
            $('.formatPrice').priceFormat({
                prefix: 'Rp ',
                // centsSeparator: ',',
                thousandsSeparator: '.'
            });
        })
    </script>
</body>

</html>