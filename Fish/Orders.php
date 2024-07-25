<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Orders</title>
  <link rel="icon"  href="logodark.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Orders</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">On Process Orders</h3>
              </div>
              <div class="card-body">
          
 
   <div class="row">
            <?php



              include('config.php');

    include('session.php');
    

    $fld_Id=$_GET['id'];
                             $sql = "SELECT * FROM tbl_user inner join tbl_orders on tbl_user.fld_Id=tbl_orders.fld_Id inner join tbl_products on tbl_orders.fld_Product_Id=tbl_products.fld_product_Id where tbl_user.fld_Id='$fld_Id' and tbl_orders.fld_status='Processing' group by tbl_orders.fld_Reference  order by tbl_orders.fld_Date DESC ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);

 if (mysqli_num_rows($result) > 0) { 

    while($row = mysqli_fetch_assoc($result)) {
      $fld_Reference=$row['fld_Reference'] 
?>


             

          
              <div class="col-md-4">
                <div class="card card-navy">
              <div class="card-header">
                <h3 class="card-title">Reference Number: <code style="color: white;"><?php echo $row['fld_Reference']  ?></code></h3>
                <div align="right">
                  <?php echo $row['fld_Date']  ?>
                </div>
              </div>
              <div class="card-body">

                 <div class="input-group mb-3">
         <table class="table table-bordered table-striped" >
          <tr>
       
    <th>Item</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Subtotal</th>

 <th>Status</th>
         </tr>

<?php 
 $sql2 = "SELECT * FROM tbl_user inner join tbl_orders on tbl_user.fld_Id=tbl_orders.fld_Id inner join tbl_products on tbl_orders.fld_Product_Id=tbl_products.fld_product_Id where tbl_user.fld_Id='$fld_Id' and tbl_orders.fld_status='Processing' and tbl_orders.fld_Reference='$fld_Reference' order by tbl_orders.fld_Date DESC ";

        $result2 = mysqli_query($conn,$sql2);
 $rowcount2=mysqli_num_rows($result2);



    while($row2 = mysqli_fetch_assoc($result2)) { 
$fld_q=$row['fld_Quantity'];

$fld_p=$row['fld_Price'];

      ?>

           <tr>
                   
              <td><img src=images/<?php echo $row2['fld_pic'];?> style="width: 60px;"><?php echo "  ". $row2['fld_product_name']  ?></td>
          <td><?php echo $row2['fld_Price']  ?></td>
            <td><?php echo $row2['fld_Quantity']  ?></td>
              <td id='subtotal'><?php echo $fld_q*$fld_p;  ?></td>
                 <td style="color:blue"><?php echo $row2['fld_status']  ?></td>
       
         </tr>






<?php 

    }
?>
 </table>
     </div>
   






              </div>
            </div>
          </div>
      

<?php
   

  }
   }else{
    ?>

  <p>No Existing Orders</p> <a href="index.php"class="btn btn-success">Order Now</a>
      
      <?php
     }



  ?>
  </div>

       
       
   
 
     <script type="text/javascript">
    $(function() {

      alert('hi');
       var sum_total_data = 0;
       $("tr #subtotal").each(function(index,value){
         getEachRow = parseFloat($(this).text());
         sum_total_data += getEachRow
       });

       document.getElementById('TTL').innerHTML = sum_total_data;
});
</script>
              </div>
              <!-- /.card-body -->
            </div>
     


     <br/>


     <br/>




            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Order History</h3>
              </div>
              <div class="card-body">
          
 
   <div class="row">
            <?php



     
    

    $fld_Id=$_GET['id'];
                             $sql = "SELECT * FROM tbl_user inner join tbl_orders on tbl_user.fld_Id=tbl_orders.fld_Id inner join tbl_products on tbl_orders.fld_Product_Id=tbl_products.fld_product_Id where tbl_user.fld_Id='$fld_Id' and tbl_orders.fld_status='Done' group by tbl_orders.fld_Reference  order by tbl_orders.fld_Date DESC ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);

 if (mysqli_num_rows($result) > 0) { 

    while($row = mysqli_fetch_assoc($result)) {
      $fld_Reference=$row['fld_Reference'] 
?>


             

          
              <div class="col-md-4">
                <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Reference Number: <code style="color: white;"><?php echo $row['fld_Reference']  ?></code></h3>
                <div align="right">
                  <?php echo $row['fld_Date']  ?>
                </div>
              </div>
              <div class="card-body">

                 <div class="input-group mb-3">
         <table class="table table-bordered table-striped" >
          <tr>
       
    <th>Item</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Subtotal</th>
               <th>Status</th>

         </tr>

<?php 
 $sql2 = "SELECT * FROM tbl_user inner join tbl_orders on tbl_user.fld_Id=tbl_orders.fld_Id inner join tbl_products on tbl_orders.fld_Product_Id=tbl_products.fld_product_Id where tbl_user.fld_Id='$fld_Id' and tbl_orders.fld_status='Done' and tbl_orders.fld_Reference='$fld_Reference' order by tbl_orders.fld_Date DESC ";

        $result2 = mysqli_query($conn,$sql2);
 $rowcount2=mysqli_num_rows($result2);



    while($row2 = mysqli_fetch_assoc($result2)) { 
$fld_q=$row['fld_Quantity'];

$fld_p=$row['fld_Price'];

      ?>

           <tr>
                   
              <td><img src=images/<?php echo $row2['fld_pic'];?> style="width: 60px;"><?php echo "  ". $row2['fld_product_name']  ?></td>
          <td><?php echo $row2['fld_Price']  ?></td>
            <td><?php echo $row2['fld_Quantity']  ?></td>
              <td id='subtotal'><?php echo $fld_q*$fld_p;  ?></td>
                <td style="color:green">Completed</td>
       
         </tr>






<?php 

    }
?>
 </table>
     </div>
   






              </div>
            </div>
          </div>
      

<?php
   

  }
   }else{
    ?>

  <p align="center">No Orders</p>
      
      <?php
     }



  ?>
  </div>

       
       
   
 
     <script type="text/javascript">
    $(function() {

      alert('hi');
       var sum_total_data = 0;
       $("tr #subtotal").each(function(index,value){
         getEachRow = parseFloat($(this).text());
         sum_total_data += getEachRow
       });

       document.getElementById('TTL').innerHTML = sum_total_data;
});
</script>
              </div>
              <!-- /.card-body -->
            </div>
          
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src=" plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src=" plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
