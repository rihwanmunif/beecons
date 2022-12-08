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

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>

<body>
          <!-- ======= Header ======= -->
          <header id="header" class="d-flex">
                    <div class="container d-flex align-items-center justify-content-between">
                              <h1 class="logo"><a href=""><img src="<?php echo base_url() . 'assets\img\Logo-BEE.png' ?>" alt=""></a></h1>
                              <nav id="navbar" class="navbar">
                                        <ul>
                                                  <li><a class="nav-link scrollto" href="#hero">Beranda </a></li>
                                                  <li><a class="nav-link scrollto" href="#course">Course</a></li>
                                                  <li><a class="nav-link scrollto" href="#training">Training</a></li>
                                                  <li><a class="nav-link scrollto" href="#consulting">Consulting</a></li>
                                                  <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>

                                                  <li style="background-color:#ffd200; border-radius:5px;"><a class="nav-link scrollto" href="<?php echo base_url() . 'signin' ?>" style="color:#000;">Sign In</a></li>
                                        </ul>
                                        <i class="bi bi-list mobile-nav-toggle" style="color:white"></i>
                              </nav><!-- .navbar -->
          </header><!-- End Header -->

          <div class="container mt-5">
                    <h5 class="card-text float-right font-weight-bold">Total Time : <br> (00: <span id="time">00</span>)</h5>

                    <!-- First Page -->
                    <div class="row d-flex justify-content-center">
                              <div class="col-md-8 border p-4">
                                        <div class="card-body">
                                                  <h5 class="card-text float-right font-weight-bold">Quiz</h5>
                                                  <h5>(<span id="number">0</span> of 5)</h5>
                                        </div>
                                        <hr>

                                        <div class="start_page">
                                                  <h3 class="text-center mb-5">QUIZ BASIC</h3>
                                                  <p>You will get 5 point for each correct answer, At the end of the Quiz,
                                                            your total score will be displayed. Maximum score is 25 points.
                                                  </p>
                                                  <button class="btn btn-warning d-flex mx-auto mt-4" id="btn">
                                                            <h5>Start the Quiz</h5>
                                                  </button>
                                        </div>

                                        <!-- QUiz Page -->

                                        <div id="main">
                                                  <div class="card-body">
                                                            <h5 class="card-text font-weight-bold" id="question"></h5>

                                                  </div>
                                                  <div class="col-md-12 p-4" id="options">
                                                            <button class="btn btn-block btn-outline-warning text-left option" id="options1"></button>
                                                            <button class="btn btn-block btn-outline-warning text-left option" id="options2"></button>
                                                            <button class="btn btn-block btn-outline-warning text-left option" id="options3"></button>
                                                            <button class="btn btn-block btn-outline-warning text-left option" id="options4"></button>
                                                            <div class="footer p-4">
                                                                      <button class="btn btn-warning float-left" id="prev">Previos</button>
                                                                      <button class="btn btn-warning float-right" id="next">Next</button>
                                                            </div>
                                                  </div>

                                                  <div class="d-flex justify-content-center">
                                                            <button class="btn btn-warning btn-lg mx-auto" id="finish">Finish</button>
                                                  </div>
                                        </div>

                                        <!-- Result Page -->
                                        <div id="Result">
                                                  <h3 class="mt-5 display-4">Marks: <span id="marks"></span>/25</h3>
                                                  <h3 class="mt-4"><span id="correct_answer">3</span> Correct out of 5</h3>
                                                  <h3 class="mt-4">Result : <span id="percentage">100%</span></h3>
                                        </div>
                              </div>
                    </div>
          </div>

          <script>
                    // Variables
                    var count = 0;
                    var time = 30;
                    var marks = 0;
                    var answer = [];
                    var timer;

                    //    Main Ready funtion
                    $(document).ready(function() {
                              $('#finish').hide();
                              $('#Result').hide();

                              buttons_manager();

                              //    Create Function

                              function buttons_manager() {
                                        if (count > 0) {
                                                  $('#prev').show();
                                                  if (count == 4) {
                                                            $('#next').hide();
                                                            $('#finish').show();
                                                  } else {
                                                            $('#next').show();
                                                  }
                                        } else {
                                                  $('#prev').hide();
                                        }
                              }

                              // Create Question Function
                              function adding_Questions(data, i) {
                                        $('#question').text(data[i].Quiz)
                                        $('#options1').text(data[i].option1)
                                        $('#options2').text(data[i].option2)
                                        $('#options3').text(data[i].option3)
                                        $('#options4').text(data[i].option4)
                                        $('#number').text(Number(i + 1));

                              }

                              // Answer Selection Function

                              function selected_Answer() {
                                        for (var i = 0; i < 4; i++) {
                                                  var a = document.getElementById("options").children;
                                                  if (a[i].innerHTML == answer[count]) {
                                                            $("#options").children("button")[i].classList.add("active");
                                                  } else {
                                                            $("#options").children("button")[i].classList.remove("active");
                                                  }
                                        }
                              }

                              function creating_result(data) {
                                        for (var i = 0; i < answer.length; i++) {
                                                  if (answer[i] == data.Questions[i].answer) {

                                                            marks += 5;
                                                  }
                                        }
                                        console.log(answer)
                                        $('#main').hide();
                                        $("#marks").text(marks);
                                        $('#correct_answer').text(marks / 5);
                                        $('#percentage').text((marks / 25) * 100 + "%");

                                        $("#Result").show();
                              }
                              $("#options").hide();

                              // Attach API
                              fetch('<?php echo base_url() . 'assets/js/data.json' ?>')
                                        .then(function(response) {
                                                  return response.json();
                                        })
                                        .then(function(data) {
                                                  $('#btn').click(function() {
                                                            $('#options').show();
                                                            adding_Questions(data.Questions, count);
                                                            $('.start_page').hide();
                                                            $('#prev').hide();

                                                            timer = setInterval(timer_function, 1000);

                                                            function timer_function() {
                                                                      $('#time').text(time);
                                                                      if (time < 1) {
                                                                                clearInterval(timer);
                                                                                alert("Out of time");
                                                                                creating_result(data);
                                                                                $("#main").hide();
                                                                                $("#result").show();
                                                                      }
                                                                      time--;
                                                            }

                                                  });

                                                  // Select Option
                                                  $(".option").click(function() {

                                                            $(this).addClass("active");
                                                            $(this).siblings().removeClass("active");
                                                            answer[count] = $(this).html();
                                                  });

                                                  // Next Questions
                                                  $('#next').click(function() {
                                                            if (count > answer.length - 1) {
                                                                      alert("Select Atleast 1 Option")
                                                            } else {
                                                                      count++;
                                                                      adding_Questions(data.Questions, count);
                                                                      $("#prev").show();
                                                                      $(".option").removeClass("active");
                                                                      buttons_manager();
                                                                      selected_Answer();
                                                            }
                                                  });

                                                  // Previous Questions
                                                  $('#prev').click(function() {
                                                            count--;
                                                            adding_Questions(data.Questions, count);
                                                            buttons_manager();
                                                            selected_Answer();
                                                  });

                                                  // Finish Quiz
                                                  $("#finish").click(function() {
                                                            if (count > answer.length - 1) {
                                                                      alert("Select Atleast Option");
                                                            } else {
                                                                      creating_result(data);
                                                                      clearInterval(timer);
                                                            }
                                                  });
                                        })
                    })
          </script>

          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

          <?php $this->load->view('footer'); ?>
</body>

</html>