<?php
  include('dbConnection.php');

  if(isset($_REQUEST['vSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['vName'] == "") || ($_REQUEST['vEmail'] == "") || ($_REQUEST['vPassword'] == "") || ($_REQUEST['vContact'] == "") || ($_REQUEST['vAddress'] == "") || ($_REQUEST['vCity'] == "") || ($_REQUEST['vState'] == "") || ($_REQUEST['vZip'] == "") || ($_REQUEST['vSkills'] == "") || ($_REQUEST['vExp'] == "") || ($_REQUEST['vAadhar'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT v_email FROM technician_tb WHERE v_email='".$_REQUEST['vEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variables
        $vName = $_REQUEST['vName'];
        $vEmail = $_REQUEST['vEmail'];
        $vPassword = $_REQUEST['vPassword'];
        $vContact = $_REQUEST['vContact'];
        $vAddress = $_REQUEST['vAddress'];
        $vCity = $_REQUEST['vCity'];
        $vState = $_REQUEST['vState'];
        $vZip = $_REQUEST['vZip'];
        $vSkills = $_REQUEST['vSkills'];
        $vExp = $_REQUEST['vExp'];
        $vAadhar = $_REQUEST['vAadhar'];
        $sql = "INSERT INTO technician_tb(v_name, v_email, v_password, v_contact, v_address, v_city, v_state, v_zip,v_skills, v_exp, v_aadhar) VALUES ('$vName','$vEmail', '$vPassword','$vContact','$vAddress','$vCity','$vState','$vZip','$vSkills','$vExp','$vAadhar')";
        if($conn->query($sql) == TRUE){
            echo '<script> 
                  window.onload = function() {
                    alert("Registration successful");
                  };
                </script>'; //pop up msg
        //   $regmsg = '<div class="alert alert-success mt-2" role="alert"> Registration successful </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Register </div>';
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Vendor Registration</title>
  <link rel="stylesheet" href="css/vendorRegis.css">
</head>
<body>
  <!-- Your form code here -->
  
<div class="container pt-5" id="registration">
  <h2 class="text-center">Vendor Registration</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class="shadow-lg p-4" method="POST">
        <div class="form-group">
          <i class="fa-user"></i><label for="name" class="pl-2 font-weight-bold">Name</label><input type="text"
            class="form-control" placeholder="Name" name="vName">
        </div>
        <div class="form-group">
          <i class="fa fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="vEmail">
          <!--Add text-white below if you want text color white-->
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fa fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New
            Password</label><input type="password" class="form-control" placeholder="Password" name="vPassword">
        </div>
        <div class="form-group">
          <i class="fa fa-key"></i><label for="phone" class="pl-2 font-weight-bold">Contact Number</label>
          <input type="phone" class="form-control" placeholder="Contact" name="vContact">
        </div>
        <div class="form-group">
            <i class="fa fa-map-marker"></i><label for="address" class="pl-2 font-weight-bold">Address</label>
            <input type="text" class="form-control" placeholder="Address" name="vAddress">
          </div>
          <div class="form-group">
            <i class="fa fa-building"></i><label for="city" class="pl-2 font-weight-bold">City</label>
            <input type="text" class="form-control" placeholder="City" name="vCity">
          </div>
          <div class="form-group">
            <i class="fa fa-globe"></i><label for="state" class="pl-2 font-weight-bold">State</label>
            <input type="text" class="form-control" placeholder="State" name="vState">
          </div>
          <div class="form-group">
            <i class="fa fa-map-pin"></i><label for="zip" class="pl-2 font-weight-bold">ZIP Code</label>
            <input type="text" class="form-control" placeholder="ZIP Code" name="vZip">
          </div>
          <div class="form-group">
            <i class="fa fa-map-pin"></i><label for="skills" class="pl-2 font-weight-bold">Skills</label>
            <input type="text" class="form-control" placeholder="Enter your skills" name="vSkills">
          </div>
          <div class="form-group">
            <i class="fa fa-map-pin"></i><label for="workExperience" class="pl-2 font-weight-bold">Work Experience</label>
            <input type="text" class="form-control" placeholder="Write about your work experience(s)" name="vExp">
          </div>
          <div class="form-group">
            <i class="fa fa-map-pin"></i><label for="aadharid" class="pl-2 font-weight-bold">Aadhar Number</label>
            <input type="number" class="form-control" placeholder="Enter your 12 digit Aadhar number" name="vAadhar">
          </div>
        <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="vSignup">Sign Up</button>
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
        <div class="text-center">
    <a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="index.php">Back to Home</a>
</div>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div>

</body>
</html>


<!-- <link rel="stylesheet" href="css/vendorRegis.css"> -->



<!-- <!DOCTYPE html>
<html>
<head>
<title>VENDOR REGISTRATION</title>
<link rel="stylesheet" href="css/login_vendor_style.css">
<script src="https://kit.fontawesome.com/1f671c3ec8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>VENDOR REGISTRATION</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="#login/login-access.php" method="post">
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" name="login_txt" type="text">
                <label>Password:</label>
                <input id="pass" class="field_class" name="password_txt" type="password">
                <button class="submit_class" type="submit" form="login_form" onclick="return validarLogin()">Submit</button>
            </div>
            <div class="info_div">
                <p>Don't have an account?<a href="vendorgegistration" >Sign Up </a></p>
            </div>
            <div class="text-center">
    <a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="index.php">Back to Home</a>
</div>

        </form>
    </main>
</body> -->