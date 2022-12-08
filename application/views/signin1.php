<!DOCTYPE html>
<html lang="en">

<head>
          <!-----------google font----------->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
          <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

          <meta charset="utf-8">
          <meta content="width=device-width, initial-scale=1.0" name="viewport">
          <title>Log In - PT Baracipta Esa Engineering</title>
          <meta content="" name="description">
          <meta content="" name="keywords">

          <!-- Icons -->
          <link href="<?php echo base_url() . 'assets/img/Logo-BEE-1.png' ?>" rel="icon">
          <link href="<?php echo base_url() . 'assets/img/Logo-BEE.png' ?>" rel="apple-touch-icon">
          <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">

          <!-- Vendor CSS Files -->
          <link href="<?php echo base_url() . 'assets/vendor/aos/aos.css' ?>" rel="stylesheet">
          <link href="<?php echo base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
          <link href="<?php echo base_url() . 'assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
          <link href="<?php echo base_url() . 'assets/vendor/glightbox/css/glightbox.min.css' ?>" rel="stylesheet">
          <link href="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">
          <link href="<?php echo base_url() . 'assets/vendor/remixicon/remixicon.css' ?>" rel="stylesheet">

          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

          <!-- Fontawesome CDN Link -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
          <style>
                    * {
                              font-family: 'Montserrat', sans-serif;

                    }

                    .login {
                              height: 100vh;
                    }

                    .header h1 {
                              font-style: normal;
                              font-weight: 600;
                              font-size: 32px;
                              line-height: 48px;
                              color: #000000;
                    }

                    .header p {
                              font-style: normal;
                              font-weight: 400;
                              font-size: 14px;
                              line-height: 21px;
                              color: #737373;
                              margin-bottom: 20px;
                    }

                    .login-form label {
                              font-style: normal;
                              font-weight: 400;
                              font-size: 16px;
                              line-height: 24px;
                              color: #000000;
                              margin-top: 20px;
                    }

                    .login-form input {
                              background: #FFFFFF;
                              border: 1px solid #BCBCBC;
                              box-sizing: border-box;
                              border-radius: 8px;
                    }

                    .login-form a {
                              font-style: normal;
                              font-weight: 400;
                              font-size: 14px;
                              line-height: 21px;
                              color: #737373;
                              margin-bottom: 20px;
                              margin: 20px 0;
                              display: block;
                    }

                    .login-form .signin {
                              width: 100%;
                              height: 42px;
                              background: #7b7c7d;
                              border-radius: 8px;
                              color: #FFF;
                              border: none;
                    }

                    .login-form .signin-google {
                              width: 100%;
                              height: 42px;
                              background: #FFFFFF;
                              border: 1px solid #BCBCBC;
                              box-sizing: border-box;
                              border-radius: 8px;
                              margin: 10px 0 20px 0;
                    }

                    .login-form span {
                              font-style: normal;
                              font-weight: 400;
                              font-size: 14px;
                              line-height: 21px;
                              color: #737373;
                    }

                    .login-form span a {
                              font-weight: 600;
                    }

                    .login-right {
                              background: #FFF6CC;
                    }
          </style>
          <!-- ======= Header ======= -->
          <header id="header" class="d-flex">
                    <div class="container d-flex align-items-center justify-content-between">
                              <h1 class="logo"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() . 'assets\img\Logo-BEE.png' ?>" alt=""></a></h1>
                              <nav id="navbar" class="navbar">
                                        <ul>
                                                  <li><a class="nav-link scrollto" href="<?php echo base_url() . 'course' ?>">Beranda </a></li>
                                                  <li><a class="nav-link scrollto" href="<?php echo base_url() . 'course' ?>">Course</a></li>
                                                  <li><a class="nav-link scrollto" href="<?php echo base_url() . 'course' ?>">Training</a></li>
                                                  <li><a class="nav-link scrollto" href="<?php echo base_url() . 'course' ?>">Consulting</a></li>
                                                  <li><a class="nav-link scrollto" href="<?php echo base_url() . 'course' ?>">FAQ</a></li>

                                                  <li style="background-color:#ffd200; border-radius:5px;"><a class="nav-link scrollto" href="<?php echo base_url() . 'signin' ?>" style="color:#000;">Sign In</a></li>
                                        </ul>
                                        <i class="bi bi-list mobile-nav-toggle" style="color:white"></i>
                              </nav><!-- .navbar -->
          </header><!-- End Header -->
          <section class="login d-flex">
                    <div class="login-left w-50 h-100">
                              <div class="row  justify-content-center align-items-center h-100">
                                        <div class="col-6">
                                                  <div class="header">
                                                            <p>Belajar jadi menyenangkan</p>
                                                            <h1>Bersama Beecons!</h1>

                                                  </div>


                                                  <div class="login-form">
                                                            <label for="email" class="form-label">Tulis Email atau Nomor HP</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Ketik salah satu disini">

                                                            <label for="password" class="form-label">Kata Sandi</label>
                                                            <input type="password" class="form-control" id="password" placeholder="Tulis disini">
                                                            <a href="#" class="text-decoration-none text-center">Lupa kata sandi?</a>


                                                            <button class="signin">Masuk</button>
                                                            <p class="w-100 text-center">&mdash; Atau masuk dengan &mdash;</p>
                                                            <div class="row">
                                                                      <div class="col-sm-3">
                                                                                <center>
                                                                                          <div class="d-flex gap-4">
                                                                                                    <span class="border p-4 bg-light">
                                                                                                              <iconify-icon icon="akar-icons:google-fill" style="color: #FF0000;cursor:pointer; width: 50px;"></iconify-icon>
                                                                                                    </span>
                                                                                                    <span class="border-top p-4 bg-light">
                                                                                                              <iconify-icon icon="bi:facebook" style="color: #1877F2; cursor:pointer; width: 50px;"></iconify-icon>
                                                                                                    </span>
                                                                                                    <span class=" border-end p-4 bg-light">
                                                                                                              <iconify-icon icon="bi:apple" style="color: #000000;cursor:pointer; width: 50px;"></iconify-icon>
                                                                                                    </span>
                                                                                          </div>
                                                                                </center>
                                                                      </div>

                                                            </div>
                                                            <p><b>Belum punya akun?</b> <strong style="color:#1877F2; cursor:pointer;"> Daftar</strong></p>
                                                            <p>Dengan masuk atau daftar Beecons, saya menyetujui Syarat & Ketentuan serta Kebijakan Privasi yang berlaku</p>

                                                            <!--------
                        <button class="signin-google">
                            <img src="img/icon google.png" alt="">
                            Sign In With Google</button>
                           <div class="text-center">
                            <span class="d-inline">Don't have an account? <a href="#"
                                class="d-inline text-decoration-none">Sign up
                                for 
                                free</a></span>
                           </div>
                    -->





                                                  </div>


                                        </div>
                              </div>

                    </div>
                    <div class="login-right w-50 h-100">
                              <div class="row  justify-content-center align-items-center h-100">
                                        <div class="col-10">
                                                  <center><img src="login.png">
                                                            <h3><strong>Jadi Engineer Bersama Beecons</strong></h3>
                                                            <p>Akses berbagai materi terkait Engineering dan jadi <br>praktisi ahli sekarang juga!</p>
                                                  </center>
                                        </div>
                              </div>
                    </div>


                    </div>
          </section>
          <?php $this->load->view('footer'); ?>
</body>

</html>