<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Order</title>

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="icon"  href="logodark.png">

<?php



 include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {





	$fld_Id=addslashes($_POST['fld_Id']);
	$fld_Quantity=addslashes($_POST['fld_Quantity']);
	$fld_Product_Id=addslashes($_POST['fld_product_Id']);
    $fld_Price=addslashes($_POST['fld_Price']);







$sqlq = "INSERT INTO tbl_orders (fld_Id, fld_Quantity, fld_product_Id,fld_price) 
    VALUES ('$fld_Id', '$fld_Quantity', '$fld_Product_Id','$fld_Price') ;";
  



          
if ($conn->query($sqlq) === TRUE) {



  ?>

 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "index.php#gallery";
    }, 4000);

            Swal.fire(
 'Added to Tray',
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
		

	?>



 
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>