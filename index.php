<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Home Services For The Elderly</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Home Services For The Elderly</a>
    <span class="navbar-text"></span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="vendor_registration.php" class="nav-link">Vendor Registration</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/bghome.png);">
    <div class="myclass mainHeading">
       <p class="font-italic">Empowering Elderly Independence:<br> Enhancing Lives with Quality Home Service</p>
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to <br> Home Services <br> For The Elderly</h1>
      <!-- <p class="font-italic">Empowering Elderly Independence: Enhancing Lives with Quality Home Service</p> -->
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Home Services For The Elderly</h3>
      <p><br>

Welcome to our website, where we prioritize your needs in four key areas. 
Firstly, we offer customized, hygienic, and nutritious home-cooked food delivery, 
ensuring your safety and adhering to Covid protocols. Secondly, we provide 24/7 access 
to doorstep delivery of medical essentials, including medicines and equipment. 
Additionally, our trained professionals offer essential housekeeping services to lighten your household workload. 
Lastly, we offer a platform for verified service providers to register and 
connect with potential clients. Experience convenience and quality with our comprehensive range of services.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><img src="images/food.png" style="width: 200px; height: 180px"> </a>
        <h4 class="mt-4">Food Delivery</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><img src="images/medical.png" style="width: 200px; height: 180px"></a>
        <h4 class="mt-4">Medical Essentials</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><img src="images/household.png" style="width: 200px; height: 180px"></a>
        <h4 class="mt-4">Housekeeping Services</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-danger" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/profile1.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sharmila Naidu</h4>
              <p class="card-text">As an elderly person, 
                I often struggle to keep up with household tasks, 
                but their team has been an absolute lifesaver. 
                Their staff is friendly, professional, and always willing to lend a helping hand.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/profile2.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Hussian Ali</h4>
              <p class="card-text">I recently used their services to help me with some daily tasks, and 
                I must say that I am very satisfied with the service. The website is very easy to use and order a service.
               </p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/profile3.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">The team helped me with grocery shopping and running errands, which was a huge relief. 
                I highly recommend this home services company to anyone looking for reliable and trustworthy help at home.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/profile4.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">I recently used their home sanitisation service to help me sanitize my home, and 
                I was very impressed with the service. The team was very professional 
                and thorough in their work, and they used high-quality cleaning products that were safe for me and my pets
                .</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Home services Pvt Ltd, <br>
        Sec IV, Bokaro <br>
        Hyderabad 500015 <br>
        Phone: 5959 5959 <br>
        <a href="#" target="_blank">www.homeservicesforelderly.com</a> <br>

        <br><br>
        <strong>Delhi Branch:</strong> <br>
        Home Services Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: 6949 6949 <br>
        <a href="#" target="_blank">www.homeservicesforelderly.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by HITAM students &copy; 2023.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>