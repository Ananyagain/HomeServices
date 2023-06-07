<?php
define('TITLE', 'Add New Vendor');
define('PAGE', 'technician');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
if(isset($_REQUEST['empsubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['v_login_id'] == "") || ($_REQUEST['v_city'] == "") || ($_REQUEST['v_contact'] == "") || ($_REQUEST['v_email'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $eName = $_REQUEST['v_login_id'];
   $eCity = $_REQUEST['v_city'];
   $eMobile = $_REQUEST['v_contact'];
   $eEmail = $_REQUEST['v_email'];
   $sql = "INSERT INTO technician_tb (v_login_id, v_city, v_contact, v_email) VALUES ('$eName', '$eCity','$eMobile', '$eEmail')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Added Successfully </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add </div>';
   }
 }
 }
?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Vendor</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="v_login_id">Name</label>
      <input type="text" class="form-control" id="v_login_id" name="v_login_id">
    </div>
    <div class="form-group">
      <label for="v_city">City</label>
      <input type="text" class="form-control" id="v_city" name="v_city">
    </div>
    <div class="form-group">
      <label for="v_contact">Mobile</label>
      <input type="text" class="form-control" id="v_contact" name="v_contact" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="v_email">Email</label>
      <input type="email" class="form-control" id="v_email" name="v_email">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="empsubmit" name="empsubmit">Submit</button>
      <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
include('includes/footer.php'); 
?>