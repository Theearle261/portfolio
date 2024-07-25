<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Stock</title>

<link rel="stylesheet" href=" plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href=" plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href=" plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/adminlte.min.css">

<?php

 include("config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {


  
    $fld_Lastname=$_POST['fld_Lastname'];
        $fld_Firstname=$_POST['fld_Firstname'];
            $fld_Username=$_POST['fld_Username'];
                $fld_Password=$_POST['fld_Password'];
                                $fld_Phone=$_POST['fld_Phone'];
                                                $fld_Address=$_POST['fld_Address'];


   $sqlab = "SELECT * FROM  tbl_user where fld_Username='$fld_Username'";

                           $resultab = mysqli_query($conn,$sqlab);
                            $rowcountab=mysqli_num_rows($resultab);
                          while($rowab = mysqli_fetch_assoc($resultab)) {

                        
                            }
                           if($rowcountab>=1){


                                                ?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Users_Management.php";
    }, 4000);

            Swal.fire(
 'Account already exist! ',
    'Deactivate the existing before Adding a new one with the same  Username',
  'warning'
)
});

} </script>

     <?php
                           }else{










$sqlq = "INSERT INTO tbl_user (fld_Lastname, fld_Firstname, fld_Username, fld_Password, fld_Phone, fld_Address ) 
    VALUES ('$fld_Lastname', '$fld_Firstname', '$fld_Username', '$fld_Password', '$fld_Phone', '$fld_Address') ;";
  



          
if ($conn->query($sqlq) === TRUE) {




   ?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Admin.php";
    }, 4000);

            Swal.fire(
 'User Added',
    '',
  'success'
)
});

} </script>

     <?php






}else{



      echo "<td>Error updating record: " . mysqli_error($conn);
}






}




}





?>








  


  <script src=" plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src=" plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src=" plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src=" plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/adminlte.min.js"></script>