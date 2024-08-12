<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
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

  <title>Bata Shoes Management System - User Module</title>

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

        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>

            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printChart");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData3();
})  
</script>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
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
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#data"> Database</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#mod"> My Module</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/logout.php"> Logout </a>
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
                        Welcome <?php echo $row1['User_Type']; ?>, 
                      </h2>
                      <h1>
                       <?php echo $row1['Fullname']; ?>! 
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
                        Welcome <?php echo $row1['User_Type']; ?>, 
                      </h2>
                      <h1>
                       <?php echo $row1['Fullname']; ?>! 
                      </h1>
                      <p>
                      Gain real-time visibility into your stock levels. Our system alerts you to low inventory and helps you maintain optimal stock levels, reducing waste and preventing stockouts.
                      </p>
                      <div class="">
                        <a href="#mod">
                          My Module
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
                        Welcome <?php echo $row1['User_Type']; ?>, 
                      </h2>
                      <h1>
                       <?php echo $row1['Fullname']; ?>! 
                      </h1>
                      <p>
                      Utilize powerful analytics to understand sales trends and customer preferences. Make informed decisions to enhance your sales strategies and increase profitability.
                      </p>
                      <div class="">
                        <a href="#data">
                          View Database 
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

    <!-- view database section -->

  <section id="data" class="contact_section layout_padding">
    <div class="container">

      <div class="heading_container">
        <br>
        <br>
        <h2>
        View Database
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
                <h3>List of Available Products</h3>
                <br>
<table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Product ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Description</th>
 <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Picture</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `Product_ID`, `Name`, `Description`, `Quantity`, `Price`, `Image` FROM `product` WHERE `Quantity` > 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Description"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Price"]); ?> kshs.</td>
<td><img src="images/<?php echo($row["Image"]); ?>" style="width: 150px;" alt></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
<br>                 
                  <div class="d-flex justify-content-center">
                    <button class="btn_on-hover" onclick="printData1();">
                      Print Report
                    </button>
                    <br>
                    <br>
                  </div>
              </div>
            </div>
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
                <h3>List of My Orders</h3>
                <br>
 <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Order ID</th>
  <th style="text-align: left;
  padding: 8px;">Product</th>
 <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `orders`.`Order_ID`, `orders`.`User_ID`, `orders`.`Product_ID`, `orders`.`Total_Price`, `orders`.`Quantity`, `orders`.`Created_At`, `orders`.`Status` FROM `orders` WHERE `orders`.`User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Order_ID"]); ?></td>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Total_Price"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
<?php
if (($row['Status'] != 'Completed') || ($row['Status'] != 'Cancelled')){
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to cancel this order?')?window.location.href='php/functions.php?action=cancelO&id=<?php echo($row["Order_ID"]); ?>':true;" title='Cancel Order'>Cancel</button></td>
<?php
}else{
?>
<td></td>
<?php
}
?>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
<br>                 
                  <div class="d-flex justify-content-center">
                    <button class="btn_on-hover" onclick="printData2();">
                      Print Report
                    </button>
                    <br>
                    <br>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end view database section -->

      <!-- my module section -->

  <section id="mod" class="contact_section layout_padding">
    <div class="container">

      <div class="heading_container">
        <br>
        <br>
        <h2>
        My Module
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
              <form action="php/functions.php" method="POST">
                <select required name="sp">
                <option selected disabled value="0">Select A Product</option>
                <?php
                $sql = "SELECT * FROM `product`";
                $all_categories = mysqli_query($conn,$sql);
                while ($category = mysqli_fetch_array(
                $all_categories,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $category["Name"];?>,<?php echo $category["Price"];?>,<?php echo $category["Quantity"];?>"><?php echo $category["Name"];?></option>
                <?php
                endwhile;
                ?>
                  </select>
                  <br>
                  <br>
                  <input type="number" name="quan" min="0" required placeholder="Quantity">                  
                  <button name="makeO" type="submit">
                    Make An Order
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end my module section -->

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