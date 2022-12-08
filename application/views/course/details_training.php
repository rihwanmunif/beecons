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


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>

<body>
  <?php $this->load->view('course/header_co'); ?>
  <br>

  <style>
    .detail-img {
      max-width: 500px;
    }
  </style>
  <section id="detail-training">
    <div class="container">
      <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3">Training Softskill</div>
      <div class="row mb-5">
        <div class="col-lg-6 overflow-hidden">
          <img src="<?php echo base_url() . 'assets/img/training/training-1.jpg' ?>" alt="" class="detail-img">
        </div>
        <div class="col-lg-6 mt-sm-4">
          <!-- <div class="h5 fw-bold mb-3">Penjelasan Course</div> -->

          <div class="h5 fw-bold mb-3">Penjelasan Training</div>
          <p style="text-align:justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
          </p>
          <div class="row mb-4">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6 col-sm-9 d-block ">
                  <div class="text-decoration-line-through text-secondary"><small>Rp 500.000</small></div>
                  <div class="h5 fw-bold text-danger">Rp 325.000</div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-lg-6 col-sm-3 text-sm-start">
                  <button type="button" class="btn btn-lg btn-warning" style="width: 200px" data-bs-toggle="modal" data-bs-target="#signin">Request Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Courses Start -->
  <div class="container py-5">
    <div class="other d-flex">
      <h5 class="align-item-justify">Similiar Training</h5>
      <!--Hide
            <h6 class="text-end"><a href="<?php echo base_url() . 'course' ?>">Tampilkan Lainnya</a></h6>
            <--Hide-->
    </div>

    <div class="row g-4 justify-content-center">
      <?php for ($i = 0; $i < 4; $i++) : ?>
        <div class="col-lg-3 col-md-6">
          <div class="course-item" style="background-color:#fff;box-shadow: 0 0 50px rgba(214, 215, 216, 0.8);">
            <div class=" position-relative overflow-hidden">
              <a href="course/details_course/">
                <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/training/training-1.jpg' ?>" alt="" /></a>
              <!--<div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                  <label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b>Basic</b></label>
                </div>-->
              <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                <label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b>Rp 500.000</b></label>
              </div>

            </div>
            <div class="text-decoration p-4 pb-0 ">
              <a href="course/details_course/">
                <h6 class="mb-3" style="font-size:16px; height:100%; margin: 0px 0px 8px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><b>Grow Your Business</b></h6>
              </a>
              <button type="button" class="btn btn-warning mb-4" style="border-radius: 5px; font-weight:bold; width:100%;" data-bs-toggle="modal" data-bs-target="#signin"><a href="<?php echo base_url() . 'signin' ?>"><b>Request</b></a></button>
              <!--<button type="button" class="btn btn-outline-warning mb-4" style="border-radius: 5px; font-weight:bold;"><a href="<?php echo base_url() . 'signin' ?>"><i class="bi bi-cart-plus-fill"></i></a></button>-->
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="signin" tabindex="-10" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <?php endfor; ?>
    </div>
  </div>
  <!-- Courses End -->

  <?php $this->load->view('footer'); ?>

</body>

</html>