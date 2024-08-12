<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['username1'])) {
    header("Location: login.html");
}else{
  $filter = $_SESSION['username1'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bata Shoes Management System - Update User Credentials Page</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <span>
              Bata Shoes Management
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.html"> Testimonials </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.html"> Our Products </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html"> Sign Up </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.html"> Sign In </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>
              </ul>
<!--               <div class="user_option">
                <a href="">
                  <img src="images/user.png" alt="">
                </a>
              </div> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Streamline Your 
                      </h2>
                      <h1>
                       Footwear Sales 
                      </h1>
                      <p>
                      Simplify and optimize your online sales process with our all-in-one management system. Ensure timely deliveries and efficient operations to meet customer demands seamlessly.
                      </p>
                      <div class="">
                        <a href="#contact">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                      Optimize Inventory
                      </h2>
                      <h1>
                      with Precision
                      </h1>
                      <p>
                      Gain real-time visibility into your stock levels. Our system alerts you to low inventory and helps you maintain optimal stock levels, reducing waste and preventing stockouts.
                      </p>
                      <div class="">
                        <a href="login.html">
                          Sign In
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                      Boost Sales with
                      </h2>
                      <h1>
                      Data-Driven Insights
                      </h1>
                      <p>
                      Utilize powerful analytics to understand sales trends and customer preferences. Make informed decisions to enhance your sales strategies and increase profitability.
                      </p>
                      <div class="">
                        <a href="register.html">
                          Sign Up 
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>

    <!-- register section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <div class="heading_container">
        <br>
        <br>
        <h2>
        Update My Details
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
<form action="php/functions.php" method="POST">
                  <input type="text" name="fname" value="<?php echo $row1['Fullname']; ?>" required placeholder="Fullname">
                  <input type="hidden" value="<?php echo $filter; ?>" name="uid" required>
                  <input type="hidden" required name="mod" value="2">
                  <br>
                  <br>
                  <input type="email" name="email" value="<?php echo $row1['Email_Address']; ?>" required placeholder="Email Address">
                  <br>
                  <br>
                  <input type="text" name="phone" value="<?php echo $row1['Phone_Number']; ?>" required placeholder="Phone Number">
                  <br>
                  <br>
                  <input type="password" name="password" required placeholder="New Password">
                  <br>
                  <br>
                  <input type="password" name="cpassword" required placeholder="Confirm New Password">
                  <button name="upu" type="submit">
                    Update My Details
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end register section -->

  <!-- info section -->
  <section class="info_section "id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info_contact">
            <h5>
              Contact Us
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Nairobi, KE.
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +254 712 345678
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                bata-shoes@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_form ">
            <h5>
              Social Media
            </h5>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 All Rights Reserved.
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>