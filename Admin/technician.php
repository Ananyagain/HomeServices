 <?php
define('TITLE', 'Vendor');
define('PAGE', 'technician');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Vendors</p>
  <?php
    $sql = "SELECT * FROM technician_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Emp ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Contact</th>
    <th scope="col">Address</th>
    <th scope="col">City</th>
    <th scope="col">State</th>
    <th scope="col">Zip</th>
    <th scope="col">Skills</th>
    <th scope="col">Experience</th>
    <th scope="col">Aadhar</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["v_login_id"].'</th>';
    echo '<td>'. $row["v_name"].'</td>';
    echo '<td>'.$row["v_email"].'</td>';
    echo '<td>'.$row["v_contact"].'</td>';
    echo '<td>'.$row["v_address"].'</td>';
    echo '<td>'.$row["v_city"].'</td>';
    echo '<td>'.$row["v_state"].'</td>';
    echo '<td>'.$row["v_zip"].'</td>';
    echo '<td>'.$row["v_skills"].'</td>';
    echo '<td>'.$row["v_exp"].'</td>';
    echo '<td>'.$row["v_aadhar"].'</td>';
    echo '<td><form action="editemp.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='. $row["v_login_id"] .'><button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button></form>  <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["v_login_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
   </tr>';
  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM technician_tb WHERE v_login_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
?>
</div>
</div>
<div><a class="btn btn-danger box" href="insertemp.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php
include('includes/footer.php'); 
?> 