
<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shipping Details</title>

<link rel="stylesheet" href=" plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href=" plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href=" plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/adminlte.min.css">


  <?php 



include('config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    
    $fld_Id = $_POST['fld_Id'];
        $fld_Address = $_POST['fld_Address'];
           $fld_Phone = $_POST['fld_Phone'];
  






    $sqlq ="UPDATE tbl_user SET fld_Address='$fld_Address', fld_Phone='$fld_Phone' WHERE fld_Id='$fld_Id'";





  



if ($conn->query($sqlq) === TRUE) {



?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Cart.php?id=<?php echo $fld_Id ?>;";
    }, 4000);

            Swal.fire(
 'Updated',
    '',
  'success'
)
});

} </script>

     <?php



}else{



      echo "<td>Error Updating record: " . mysqli_error($conn);
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

    
