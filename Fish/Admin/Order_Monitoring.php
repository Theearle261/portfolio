<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FM Fish Company Admin Panel</title>

    <link rel="icon"  href="../logodark.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<?php



include('session.php');

include('../config.php');
  include('sidebar.php');
?>


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Monitoring</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order Monitoring</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


<div class="row">
<?php 



                     $sql2 = "SELECT * FROM tbl_orders where fld_status='Processing' group by fld_Reference  ";

        $result2 = mysqli_query($conn,$sql2);
 $rowcount2=mysqli_num_rows($result2);

 if (mysqli_num_rows($result) > 0) { 
 while($row2 = mysqli_fetch_assoc($result2)) {


$fld_Reference=$row2['fld_Reference'];



?>


  <div class="col-md-4">
 <div class="card card-success">
 <div class="card-header">
 <h3 class="card-title"><?php echo $row2['fld_Reference']; ?></h3>
 </div>
<div class="card-body">

   <table class="table table-bordered table-striped" >
          <tr>
    <th>Item</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Subtotal</th>
            <th>Action</th>
         </tr>

  <?php 
        $sql = "SELECT * FROM tbl_orders inner join tbl_products on tbl_orders.fld_Product_Id=tbl_products.fld_product_Id where tbl_orders.fld_status='Processing' and tbl_orders.fld_Reference='$fld_Reference'  ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);

 while($row = mysqli_fetch_assoc($result)) {

  $fld_q=$row['fld_Quantity'];

$fld_p=$row['fld_Price'];
$total=$fld_q*$fld_p;

  ?>

   <tr>
              <td><img src=../images/<?php echo $row['fld_pic'];?> style="width: 60px;"><?php echo $row['fld_product_name']  ?></td>
          <td><?php echo $row['fld_Price']  ?></td>
            <td><?php echo $row['fld_Quantity']  ?></td>
              <td ><?php echo '₹'. $total; ?></td>
                 <td id='TTL<?php echo $row['fld_Reference']; ?>' hidden ><?php echo  $total; ?></td>
                <td>
                  <a href="Delete_Order.php?id=<?php echo $row['fld_order_Id'] ?>&id2=<?php echo $row['fld_Id'] ?>"class="btn btn-danger">Delete</a>
                </td>
         </tr>






  <?php 

}


  ?>

  <tr>
           <td colspan="3" align="center"><b>Grand Total:</b></td>  
           <td colspan="2" id='GTTL<?php echo $row['fld_Reference']; ?>'>0</td>
         </tr>   

 <script type="text/javascript">
window.onload = function(){


       var TotalValue<?php echo $row['fld_Reference']; ?> = 0;
       $("tr #TTL<?php echo $row['fld_Reference']; ?>").each(function(index,value){
         currentRow<?php echo $row['fld_Reference']; ?> = parseFloat($(this).text());
         TotalValue<?php echo $row['fld_Reference']; ?> += currentRow<?php echo $row['fld_Reference']; ?>
       });

       document.getElementById('GTTL<?php echo $row['fld_Reference']; ?>').innerHTML ='₹'+ TotalValue<?php echo $row['fld_Reference']; ?>;
       // document.getElementById('GTTL').value= TotalValue;

}


  
</script>

</table>

          



      </div>
    </div>
    <div>
      
    </div>
  </div>

  <?php 
}

}else{

?>

<p>No Orders Yet</p>
<?php


}
?>
  </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2023 <a href="../index.php">FM Fish Company</a>.</strong> All rights reserved.
  </footer>


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->



  <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
