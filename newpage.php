<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <?php
   require 'files.php';
   require 'myfunctions.php';
  ?>

<title>Book Appointment</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="appointment.css">

    
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
                  <?php 
                      headi();
                  ?>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">

                <?php 
                  for($i = 0; $i < sizeof($header); $i++) {
                    echo '<li class="nav-item active">
                    <a class="nav-link" href="index.html">'. $header[$i]['name'] .' <span class="sr-only">(current)</span></a>
                  </li>';
                  }
                ?>

                 </ul>
              </div>
              <div class="quote_btn-container">
               <?php 
               for($i = 0; $i < sizeof($register); $i++) {
                echo ' <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  '. $register[$i]['name'] .'
                </span>
              </a>';
                  } 
               ?>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="main-content">
            <h4 class="heading">
              APPOINTMENT <span>BOOKED</span>
            </h4>
            <p class="reserve">Your Reservation:</p>

            <div class="main-appointed">
             <div class="appointed">
              <h3 class="appointed-head">Patient's name:</h3>
              <p class="appointed-part">
                <?php 
                  echo($_POST['patientname']);
                ?>
              <p>
              <h3 class="appointed-head">Doctor's name:</h3>
              <p class="appointed-part">
              <?php 
                  echo($_POST['doctorname']);
                ?>
              <p>
              <h3 class="appointed-head">Department's name:</h3>
              <p class="appointed-part">
              <?php 
                  echo($_POST['departmentname']);
                ?>
              <p>


             </div>
             <div class="appointed">
              <h3 class="appointed-head">Phone number:</h3>
              <p class="appointed-part">
                <?php 
                  echo($_POST['phone']);
                ?>
              <p>
              <h3 class="appointed-head">Patient's symptoms:</h3>
              <p class="appointed-part">
              <?php 
                  echo($_POST['symptom']);
                ?>
              <p>
              <h3 class="appointed-head">Date of consultation:</h3>
              <p class="appointed-part">
              <?php 
                  echo($_POST['date']);
                ?>
              <p>
            
              </div>
            </div>
           </div>
<section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>

      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">

            <h5>
              Address
            </h5>

            <div class="info_contact">
              <?php
              address();
              ?>
              </div>
            <div class="social_box">
              <?php
              socialBox();
              ?>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <?php
                  footerContect();
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <?php 
                distribution1();
              ?>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <?php
                distribution2();
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>