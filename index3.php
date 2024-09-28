<?php

session_start();
if (!isset($_SESSION['USERNAME'])) {
  echo "you are logged out";
  header('location:adminlogin.php');
}


include('connection.php');

$query = "SELECT * FROM registeruser ";

$displayquery = mysqli_query($con, $query);


?>








<!DOCTYPE html>
<html lang="en">

<head>
  <title>Garbage Management</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/styl.css">
  <!--===============================================================================================-->
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- CSS Libraries-->
  <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">-->

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js 	"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

  <!--<link rel="stylesheet" href="css/style.css">-->
  <script src="js/script.js"></script>

  <!--===============================================================================================-->
  <link rel="stylesheet" href="css/testcss.css">
  <script src="js/testjs.js" defer></script>


  <!-- index page links -->
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/styl.css">
  <!--===============================================================================================-->
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- CSS Libraries-->
  <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">-->

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js 	"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>




  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">


  <!--<link rel="stylesheet" href="css/style.css">-->
  <script src="js/script.js"></script>





  <link rel="stylesheet" href="st.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" href="css/testcss.css">
  <script src="js/testjs.js" defer></script>


</head>

<body class="animsition">

  <!-- Header -->
  <header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
      <!-- Topbar -->
      <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full container">
          <div class="left-top-bar">
            The Great Indian Trash Collection Drive
          </div>

          <div class="right-top-bar flex-w h-full">

            <a href="index3.php" class="flex-c-m trans-04 p-lr-25" style="text-decoration: none;">
              My Account
            </a>

            <a href="adminlogout.php" class="flex-c-m trans-04 p-lr-25" style="text-decoration: none;">

              Logout
            </a>

            <!-- <a href="register.php" class="flex-c-m trans-04 p-lr-25" style="text-decoration: none;">
              Register
            </a>  -->
          </div>
        </div>
      </div>

      <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">

          <!-- Logo desktop -->
          <a href="index.php" class="logo">
            <img src="images/icons/logo-01.png" alt="IMG-LOGO">
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
            <ul class="main-menu">

              <li class="active-menu">
                <a href="index.php">Home</a>
              </li>

              <li>
                <a href="about.php">About</a>
              </li>

              <li>
                <a href="services.php">Services</a>
                <ul class="sub-menu">
                  <li><a href="residentialwaste.php">Residential Waste</a></li>
                  <li><a href="industrialwaste.php">Industrial Waste</a></li>
                  <li><a href="commercialwaste.php">Commercial Waste</a></li>
                  <li><a href="plasticrecycling.php">Plastic Recycling</a></li>
                  <li><a href="paperrecycling.php">Paper Recycling</a></li>
                  <li><a href="purchagescarp.php">Purchase of Scrap</a></li>
                </ul>
              </li>

              <li>
                <a href="faqs.php">FAQs</a>
              </li>

              <!--
							<li class="label1" data-label1="*">
								<a href="shoping-cart.html">Features</a>
							</li>


              <li>
                <a href="suggestions.php">Suggestions</a>
              </li>

              <li>
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </div>


           Icon header -->

              <!-- <div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div> -->

        </nav>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
      <!-- Logo moblie -->
      <div class="logo-mobile">
        <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
      </div>

      <!-- Icon header -->
      <!--
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>
      -->

      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
      <ul class="topbar-mobile">
        <li>
          <div class="left-top-bar">
            The Great Indian Trash Collection Drive
          </div>
        </li>

        <li>
          <div class="right-top-bar flex-w h-full">

            <a href="index3.php" class="flex-c-m p-lr-10 trans-04">
              My Account
            </a>

            <a href="adminlogout.php" class="flex-c-m p-lr-10 trans-04">
              Logout
            </a>

            <!-- <a href="#" class="flex-c-m p-lr-10 trans-04">
              Register
            </a> -->
          </div>
        </li>
      </ul>

      <ul class="main-menu-m">

        <li>
          <a href="index.php">Home</a>
        </li>

        <li>
          <a href="about.php">About</a>
        </li>

        <li>
          <a href="services.php">Services</a>
          <ul class="sub-menu-m">
            <li><a href="residentialwaste.php">Residential Waste</a></li>
            <li><a href="industrialwaste.php">Industrial Waste</a></li>
            <li><a href="commercialwaste.php">Commercial Waste</a></li>
            <li><a href="plasticrecycling.php">Plastic Recycling</a></li>
            <li><a href="paperrecycling.php">Paper Recycling</a></li>
            <li><a href="purchagescarp.php">Purchase of Scrap</a></li>
          </ul>
          <span class="arrow-main-menu-m">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
        </li>

        <!--
				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

        <li>
          <a href="faqs.php">FAQs</a>
        </li>

        <li>
          <a href="suggestions.php">Suggestions</a>
        </li>

        <li>
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>

     Modal Search -->

        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
          <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
              <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
              <button class="flex-c-m trans-04">
                <i class="zmdi zmdi-search"></i>
              </button>
              <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
          </div>
        </div>

  </header>

  <!-- header ends -->

  <!-------------------------------------------------------------------------------------->

  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/slide-1.jpg');">
		<h2 style="color: black;" class="ltext-105 cl0 txt-center">
			Admin Page
		</h2>
	</section>

  <section class="wrapper" id="Services">

    <!-- Service Start -->
    <div class="service">
      <div class="container">
        <div class="section-header text-center">
          <!-- <h2 class="servi">Our Services</h2> -->
          <div class="upload-profile-image d-flex justify-content-center">
            <div class="text-center">
              <div class="d-flex justify-content-center">
                <img style="margin-top:-120px; width: 300px; height: 300px;" class="img rounded-circle " id="profileimage" src="images/icons/human01.png" alt="">
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Service End -->

  </section>





  <!--------------------------------------------------------------------------------------->

  <!---About Us--->
  <!-- Content page -->


  <section class="wrapper" id="Services">

    <div class="container text-center">
      <h1>List of registered </h1>
      <div class="center-div">
        <div class="table-responsive">
          <table class="table table-bordered border-primary">
            <thead>
              <tr>
                <th>ID</th>
                <th class="username">username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Register Date</th>
                <th>Profile Image</th>

              </tr>
            </thead>

            <?php


            while ($result = mysqli_fetch_array($displayquery)) {

            ?>
              <tbody>



                <tr>
                  <td><?php echo $result['id']; ?></td>
                  <td><?php echo $result['username']; ?></td>
                  <td><?php echo $result['email']; ?></td>
                  <td><?php echo $result['phone']; ?></td>
                  <td><?php echo $result['registerdate']; ?></td>
                  <td><img style="height:100px; width:100px;" src=" <?php echo $result['profileimage']; ?>" alt=""> </td>


                </tr>


              </tbody>

            <?php }  ?>
          </table>
        </div>
      </div>

    </div>

  </section>





  <section class="wrapper" id="Services">



    <div class="container text-center m-b-100">
      <h1> List of Pickup Requests </h1>
      <div class="center-div">
        <div class="table-responsive">
          <table class="table table-bordered border-primary text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th class="username">Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Address</th>
                <th>Comments</th>
                <th>Register Date</th>
                <!-- <th>Profile Image</th> -->
                <!-- <th colspan="2">Operations</th> -->
              </tr>
            </thead>

            <?php
            // $EMAIL = $email;
            $q = "SELECT * FROM requestpickup ";
            $dq = mysqli_query($con, $q);
            ?>

            <?php

            while ($res = mysqli_fetch_array($dq)) {

            ?>
              <tbody>



                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['fullname']; ?></td>

                  <td><?php echo $res['emailaddress']; ?></td>
                  <td><?php echo $res['service']; ?></td>
                  <td><?php echo $res['address']; ?></td>
                  <td><?php echo $res['comments']; ?></td>
                  <td><?php echo $res['registerdate']; ?></td>
                  <!-- <td><img style="height:100px; width:100px;" src=" " alt=""> </td> -->
                  <!-- <td> <a style="text-align:center;" href="" data-toggle="tooltip" data-placement="bottom" title="Update"><i style="font-size: 30px; " class="fa fa-pencil"></i></a> </td>
                                    <td> <a style="text-align:center;" href="" data-toggle="tooltip" data-placement="bottom" title="Delete"><i style="font-size: 30px; " class="fa fa-trash"></i></a></td> -->

                </tr>


              </tbody>

            <?php }  ?>
          </table>
        </div>
      </div>

    </div>

  </section>










  <!-- Footer -->
  <footer class="bg3 p-t-75 p-b-32">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            GET IN TOUCH
          </h4>

          <p class="stext-107 cl7 size-201">

            Garbage Manager Office,<br> Rathyatra, Kamachha Rd, Gurubagh, bhelupur,<br> varanasi-221005
          </p>

          <div class="p-t-27">
            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fab fa-instagram"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fab fa-twitter"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fab fa-youtube"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fab fa-linkedin"></i>
            </a>

            <!--<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
            <i class="fa fa-pinterest-p"></i></a>-->
          </div>
        </div>




        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Our Services
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="residentialwaste.php" class="stext-107 cl7 hov-cl1 trans-04">
                Residential Waste
              </a>
            </li>

            <li class="p-b-10">
              <a href="industrialwaste.php" class="stext-107 cl7 hov-cl1 trans-04">
                Industrial Waste
              </a>
            </li>

            <li class="p-b-10">
              <a href="commercialwaste.php" class="stext-107 cl7 hov-cl1 trans-04">
                Commercial Waste
              </a>
            </li>

            <li class="p-b-10">
              <a href="plasticrecycling.php" class="stext-107 cl7 hov-cl1 trans-04">
                Plastic Recycling
              </a>
            </li>


            <li class="p-b-10">
              <a href="paperrecycling.php" class="stext-107 cl7 hov-cl1 trans-04">
                Paper Recycling
              </a>
            </li>

            <li class="p-b-10">
              <a href="purchagescarp.php" class="stext-107 cl7 hov-cl1 trans-04">
                Purchase of Scrap
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Navigation
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="index.php" class="stext-107 cl7 hov-cl1 trans-04">
                Home
              </a>
            </li>

            <li class="p-b-10">
              <a href="about.php" class="stext-107 cl7 hov-cl1 trans-04">
                About
              </a>
            </li>

            <li class="p-b-10">
              <a href="services.php" class="stext-107 cl7 hov-cl1 trans-04">
                Services
              </a>
            </li>

            <li class="p-b-10">
              <a href="faqs.php" class="stext-107 cl7 hov-cl1 trans-04">
                FAQs
              </a>
            </li>

            <li class="p-b-10">
              <a href="suggestions.php" class="stext-107 cl7 hov-cl1 trans-04">
                Suggestions
              </a>
            </li>

            <li class="p-b-10">
              <a href="contact.php" class="stext-107 cl7 hov-cl1 trans-04">
                Contact
              </a>
            </li>
          </ul>
        </div>



        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Newsletter
          </h4>

          <form>
            <div class="wrap-input1 w-full p-b-4">
              <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
              <div class="focus-input1 trans-04"></div>
            </div>

            <div class="p-t-18">
              <button onclick="myFunction()" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04 click1">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>


      <!--<div class="p-t-40">
      <div class="flex-c-m flex-w p-b-18">
        <a href="#" class="m-all-1">
          <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
        </a>
      </div>-->

      <p class="stext-107 cl6 txt-center">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>
          document.write(new Date().getFullYear());
        </script> All rights reserved | Management Team </a>.
        <!--Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>-->
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </p>
    </div>
  </footer>


  <!-- footer ends -->


  <!-- Back to top -->
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="zmdi zmdi-chevron-up"></i>
    </span>
  </div>




  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="vendor/animsition/js/animsition.min.js"></script>

  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function() {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
  </script>

  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>

  <script src="vendor/slick/slick.min.js"></script>
  <script src="js/slick-custom.js"></script>

  <script src="vendor/parallax100/parallax100.js"></script>
  <script>
    $('.parallax100').parallax100();
  </script>

  <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
    $('.gallery-lb').each(function() {
      $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
          enabled: true
        },
        mainClass: 'mfp-fade'
      });
    });
  </script>

  <script src="vendor/isotope/isotope.pkgd.min.js"></script>

  <script src="vendor/sweetalert/sweetalert.min.js"></script>
  <script>
    $('.js-addwish-b2').on('click', function(e) {
      e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
      var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
      $(this).on('click', function() {
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
      });
    });

    $('.js-addwish-detail').each(function() {
      var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

      $(this).on('click', function() {
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
      });
    });



    $('.js-addcart-detail').each(function() {
      var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
      $(this).on('click', function() {
        swal(nameProduct, "is added to cart !", "success");
      });
    });
  </script>

  <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function() {
      $(this).css('position', 'relative');
      $(this).css('overflow', 'hidden');
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
      });

      $(window).on('resize', function() {
        ps.update();
      })
    });
  </script>

  <script src="js/main.js"></script>








</body>

</html>