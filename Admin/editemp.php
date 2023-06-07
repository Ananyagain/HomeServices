<?php    
define('TITLE', 'Update Technician');
define('PAGE', 'technician');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['empupdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['v_name'] == "") || ($_REQUEST['v_city'] == "") || ($_REQUEST['v_contact'] == "") || ($_REQUEST['v_email'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $eId = $_REQUEST['v_login_id'];
    $eName = $_REQUEST['v_name'];
    $eCity = $_REQUEST['v_city'];
    $eMobile = $_REQUEST['v_contact'];
    $eEmail = $_REQUEST['v_email'];
  $sql = "UPDATE technician_tb SET v_name = '$eName', v_city = '$eCity', v_contact = '$eMobile', v_email = '$eEmail' WHERE v_login_id = '$eId'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Vendor Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM technician_tb WHERE v_login_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="v_login_id">Emp ID</label>
      <input type="text" class="form-control" id="v_login_id" name="v_login_id" value="<?php if(isset($row['v_login_id'])) {echo $row['v_login_id']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="v_name">Name</label>
      <input type="text" class="form-control" id="v_name" name="v_name" value="<?php if(isset($row['v_name'])) {echo $row['v_name']; }?>">
    </div>
    <div class="form-group">
      <label for="v_city">City</label>
      <input type="text" class="form-control" id="v_city" name="v_city" value="<?php if(isset($row['v_city'])) {echo $row['v_city']; }?>">
    </div>
    <div class="form-group">
      <label for="v_contact">Mobile</label>
      <input type="text" class="form-control" id="v_contact" name="v_contact" value="<?php if(isset($row['v_contact'])) {echo $row['v_contact']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="v_email">Email</label>
      <input type="email" class="form-control" id="v_email" name="v_email" value="<?php if(isset($row['v_email'])) {echo $row['v_email']; }?>">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="empupdate" name="empupdate">Update</button>
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