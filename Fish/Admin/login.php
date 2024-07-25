<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
       
<?php 





?>

  <!-- Google Font: Source Sans Pro -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

   <link rel="icon"  href="logo-colored.svg">
</head>

 <?php
 include("../config.php");
   session_start();




   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $fld_Username = $_POST['fld_Username'];
      $fld_Password =$_POST['fld_Password']; 
      
      $sql = "SELECT * FROM tbl_user WHERE fld_Username = '$fld_Username' and fld_Password = '$fld_Password' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {

                    $fld_Firstname=$row['fld_Firstname'];
                   
                                $fld_Id=$row['fld_Id'];
                            
   

         $_SESSION['login_user'] = $fld_Id;


 if($row['fld_Status']=="Inactive"){
?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "../Admin.php";
    }, 4000);

            Swal.fire(
 'Account already inactive',
    'Please contact your System Administrator',
  'warning'
)
});

} </script>

     <?php
   } elseif($row['fld_User_Level']=='Admin'){
         
 ?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Order_Monitoring.php";
    }, 4000);

            Swal.fire(
 'Login Successful',
    'Welcome Admin  <?php echo $fld_Firstname ?>',
  'success'
)
});

} </script>

     <?php

  

}elseif($row['fld_User_Level']=='Customer'){
         
 ?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "../index.php";
    }, 4000);

            Swal.fire(
 'Login Successful',
    'Welcome   <?php echo $fld_Firstname ?>',
  'success'
)
});

} </script>

     <?php

  

}

}else{


?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "../Admin.php";
    }, 4000);

            Swal.fire(
 'Login Failed',
    'Please check your Username and/ or Password',
  'error'
)
});

} </script>

     <?php


}


      
      }else {
?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "../Admin.php";
    }, 4000);

            Swal.fire(
 'Login Failed',
    'Please check your Username and/ or Password',
  'error'
)
});

} </script>

     <?php


      }

?>


<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>