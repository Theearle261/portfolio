
<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Check Out</title>

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
        $fld_Payment_Method = $_POST['fld_Payment_Method'];
  
        $date=date('Ymd');
        $fld_Reference=$date."-".random_int(0, 999999);






    $sqlq ="UPDATE tbl_orders SET fld_Payment='$fld_Payment_Method', fld_Status='Processing', fld_Reference='$fld_Reference' WHERE fld_Id='$fld_Id' and fld_status='New Order'";





  



if ($conn->query($sqlq) === TRUE) {



?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "index.php";
    }, 4000);

            Swal.fire(
 'Checked Out',
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

    
