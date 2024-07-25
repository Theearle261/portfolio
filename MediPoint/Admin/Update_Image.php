
<!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Stock</title>

<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">


  <?php 



include('../config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['fld_pic'])) {


    
    $fld_product_Id = $_POST['fld_product_Id'];
    
  

  $fld_avatar=$_FILES['fld_pic']['name'];
  $fld_size=$_FILES['fld_pic']['size'];
  $fld_tmp_name=$_FILES['fld_pic']['tmp_name'];
  $fld_error=$_FILES['fld_pic']['error'];


  if($fld_error === 0){


    if($fld_size> 2050000){

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

      $img_ex= pathinfo($fld_avatar, PATHINFO_EXTENSION);
      $img_ex_lc=strtolower($img_ex);

      $allowed_exs=array("jpg","jpeg","png", "tiff");

      if(in_array($img_ex_lc,$allowed_exs)){


        $new_img_name= uniqid("IMG-", true).'.'.$img_ex_lc;

        $img_upload_path='../images/'.$new_img_name;
        move_uploaded_file($fld_tmp_name,         $img_upload_path);



    $sqlq ="UPDATE tbl_products SET fld_pic='$new_img_name' WHERE fld_product_Id='$fld_product_Id'";





  



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
 'Picture Updated',
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

}

}else{

  echo "<td>Error </td>";

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

    
