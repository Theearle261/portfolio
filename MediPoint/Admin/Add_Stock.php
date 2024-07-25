<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Stock</title>

<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

<?php

 include("../config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_FILES['fld_Pic'])) {


  $fld_pic=$_FILES['fld_Pic']['name'];


  $fld_size=$_FILES['fld_Pic']['size'];
  $fld_tmp_name=$_FILES['fld_Pic']['tmp_name'];
  $fld_error=$_FILES['fld_Pic']['error'];




    $fld_Product_Name=addslashes($_POST['fld_Product_Name']);

    $fld_Product_Details=addslashes($_POST['fld_Product_Details']);

    $fld_Product_Name=addslashes($_POST['fld_Product_Name']);


    $fld_Aid_Placement=addslashes($_POST['fld_Aid_Placement']);


    $fld_Model_Name_Number=$_POST['fld_Model_Name_Number'];


    $fld_Brand_Name=addslashes($_POST['fld_Brand_Name']);


    $fld_Channels=$_POST['fld_Channels'];


    $fld_Color=addslashes($_POST['fld_Color']);

    $fld_Price=$_POST['fld_Price'];






if($fld_error === 0){


    if($fld_size> 20500000){

  ?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Stocks_Management.php";
    }, 4000);

            Swal.fire(
 'File too Large',
    '',
  'warning'
)
});

} </script>

     <?php


    }else{

      $img_ex= pathinfo($fld_pic, PATHINFO_EXTENSION);
      $img_ex_lc=strtolower($img_ex);

      $allowed_exs=array("jpg","jpeg","png", "tiff");

      if(in_array($img_ex_lc,$allowed_exs)){


        $new_img_name= uniqid("IMG-", true).'.'.$img_ex_lc;

        $img_upload_path='../images/'.$new_img_name;
        move_uploaded_file($fld_tmp_name,         $img_upload_path);









$sqlq = "INSERT INTO tbl_products (fld_Product_Name,fld_Product_Details, fld_Pic, fld_Aid_Placement, fld_Model_Name_Number, fld_Brand_Name, fld_Channels, fld_Color, fld_Price) 
    VALUES ('$fld_Product_Name','$fld_Product_Details', '$new_img_name', '$fld_Aid_Placement', '$fld_Model_Name_Number', '$fld_Brand_Name', '$fld_Channels', '$fld_Color', '$fld_Price') ;";
  



          
if ($conn->query($sqlq) === TRUE) {




   ?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Stocks_Management.php";
    }, 4000);

            Swal.fire(
 'Stock Added',
    '',
  'success'
)
});

} </script>

     <?php






}else{



      echo "<td>Error updating record: " . mysqli_error($conn);
}












 }else{


?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Stocks_Management.php";
    }, 4000);

            Swal.fire(
 'Invalid File Format',
    '',
  'warning'
)
});

} </script>

     <?php


      }
      



    }
}

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