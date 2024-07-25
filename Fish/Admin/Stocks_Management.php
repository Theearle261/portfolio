<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FM Fish Company Admin Panel</title>

    <link rel="icon"  href="../logo.png">

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
?>


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php

  include('sidebar.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stocks Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stocks Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



<div align="right">

         <button type="button" class="btn mb-1 btn-success" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
           Add Stock</button>



         </div>




          <div class=" modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="defaultModalLabel">Add Stock</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>

                            </div> 





                           <form method="POST" action="Add_Stock.php" enctype="multipart/form-data" >  
                            <div class="modal-body">




                       <div class="form-group row">

              
                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Item</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" name="fld_product_name" required="required">
                        </div>
                      </div>

                      

                      <div class="form-group row">

                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Price</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" name="fld_price" required="true" >
                        </div>
                      </div>

                      


    






 <div class="form-group row">

  <div class="custom-file">
                        <input type="file" name="fld_Pic" required="required" id="up" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label col-sm-12" for="exampleInputFile" >Upload Photo</label>
                      </div>
                         
</div>

 </div>

                  
                            <div class="modal-footer">
                              <input type="submit" class="btn mb-2 btn-primary"  name="add" value="Add Stock">
                            </div> </form>
                          </div>
                        </div>
                      </div>
        
       




<section class="gallery py-5" id="gallery" style="background-colo:white ; padding-top: 20%;">
	<div class="container py-3">
		<h3 class="heading text-center mb-lg-5 mb-4">Fishes</h3>
		<div class="row gallery_grid-more project-grids w3ls">
<?php

$sql = "SELECT * FROM tbl_products where fld_Status='Active' ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?>



			<div class="col-lg-3 col-md-4 col-6 px-1 w3layoutsits_w3layouts_gallery_grid2 card ">





				<div class="gallery-border">


					<style type="text/css">
						

						.img-prod{


							height: 280px;
							width: 100%;
						}
					</style>
					
						<img src="../images/<?php echo $row['fld_pic'] ?>"   class="img-prod"  >
			
					<div align="center">
					<p class="prod" ><?php echo $row['fld_product_name'] ?></p>
					<p class="price" >$<?php echo $row['fld_price'] ?>.00 USD</p>

				 <button type="btn-sm btn-success fa-shake" class="btn bg-navy" data-toggle="modal" data-target="#modal-sm<?php echo $row['fld_product_Id'] ?>">
                   <i class="fa-solid fa-basket-shopping fa-shake"></i>Edit Stock
                </button>
					<br/><br/>
				</div>
			</div>
			</div>
	


<?php 


}

?>


			
		</div>
	</section>

<style type="text/css">
	.circle{



	background-color: #dc3545;
	color: white;
  border-radius: 50%;
  width: 25px;
  height: 25px;
 
  padding: 20px;
	}


</style>


<?php

$sql = "SELECT * FROM tbl_products where fld_Status='Active' ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?>




<div class="modal fade" id="modal-sm<?php echo $row['fld_product_Id'] ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>	
           <form action="#" method="POST">
            <div class="modal-body">


            	<img src="../images/<?php echo $row['fld_pic'] ?>" alt="Popup Image" class="img-fluid" /><br/><br/>
      	
	<br/>


<div align="center">

<div class="row">
	<div class="col-md-6">
		<h5 class="form-label" align="left">Name:</h5>


	</div>

	<div class="col-md-6">
			
<input type="text"  class="form-control w-10"  name="fld_product_name" value="<?php echo $row['fld_product_name'] ?>"  >

	</div>
</div>

<br/>


<div class="row">
	<div class="col-md-6">
		<h5 class="form-label" align="left">Price:</h5>


	</div>

	<div class="col-md-6">
			
<input type="text"  class="form-control w-10"  name="fld_price" id="Total<?php echo $row['fld_product_Id'] ?>" value="<?php echo $row['fld_price'] ?>"  >

	</div>
</div>

<br/>


	<input type="hidden" name="fld_product_Id" value="<?php echo $row['fld_product_Id'] ?>">

	<input type="submit" class="btn-block  btn-primary" value="Update" name="Update_Product" >
</form>
<br/>


<form method ="POST" action="Update_Image.php" enctype="multipart/form-data">
  <div class="custom-file" align="center" style="overflow: hidden; height: 100px;"  >
     <div class="form-group row">
 <input type="hidden" name="fld_product_Id" value="<?php echo $row['fld_product_Id'] ?>">
    </div>
     
                        <input type="file" name="fld_pic"  class="btn-lg btn-warning"   onchange="form.submit()">
                        <label  ><p>Replace Photo</p></label>
                      </div>


                <br/>
                <br/>

              </form>

<br/>
<form action="#" method="POST">

	<input type="hidden" name="fld_product_Id" value="<?php echo $row['fld_product_Id'] ?>">
	


		<input type="submit" class="btn-block  btn-danger" value="Delete" name="Delete" >
</form>
</div>



            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	
 



<?php 
}











                         if(isset($_POST['Delete'])){
                          

                          

                          $fld_product_Id=$_POST['fld_product_Id'];


    $sqlq ="UPDATE tbl_products SET fld_status='Inactive' WHERE fld_product_Id='$fld_product_Id'";




  



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
 'Deleted',
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



        if(isset($_POST['Update_Product'])){
                          

                          

                          $fld_product_Id=$_POST['fld_product_Id'];
                          $fld_price=$_POST['fld_price'];
                          $fld_product_name=$_POST['fld_product_name'];


    $sqlq ="UPDATE tbl_products SET fld_price='$fld_price', fld_product_name='$fld_product_name' WHERE fld_product_Id='$fld_product_Id'";




  



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


                                <?php

$sql = "SELECT * FROM tbl_products  where fld_Status='Active' ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?> 

                          	<script type="text/javascript">     


                          	 function add<?php echo $row['fld_product_Id']?>(){



                                  var quant<?php echo $row['fld_product_Id'] ?>=document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value;
																document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value= ++quant<?php echo $row['fld_product_Id']?>;
																document.getElementById('quantity2<?php echo $row['fld_product_Id'] ?>').value= quant<?php echo $row['fld_product_Id']?>;
                                
                    
                                

																	document.getElementById('Total<?php echo $row['fld_product_Id'] ?>').value="$ "+ quant<?php echo $row['fld_product_Id']?>*<?php echo $row['fld_price'] ?>+".00 USD" ;
              



                                  
                                }

                                function sub<?php echo $row['fld_product_Id'] ?>(){



                                  var quant<?php echo $row['fld_product_Id'] ?>=document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value;
                                  document.getElementById('quantity2<?php echo $row['fld_product_Id'] ?>').value= quant<?php echo $row['fld_product_Id']?>;

                                  if (quant<?php echo $row['fld_product_Id'] ?><=1){

                                    document.getElementById('minus<?php echo $row['fld_product_Id'] ?>').disabled=true;

                                    	document.getElementById('Total<?php echo $row['fld_product_Id'] ?>').value="$ "+quant<?php echo $row['fld_product_Id']?>*<?php echo $row['fld_price'] ?>+".00 USD" ;


                                  }else{
                                  document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value= --quant<?php echo $row['fld_product_Id'] ?>;
                                  document.getElementById('quantity2<?php echo $row['fld_product_Id'] ?>').value= quant<?php echo $row['fld_product_Id']?>;

                                  	document.getElementById('Total<?php echo $row['fld_product_Id'] ?>').value="$ "+ quant<?php echo $row['fld_product_Id']?>*<?php echo $row['fld_price'] ?> +".00 USD";
                                }
                                }


                             

                               </script>
<?php

}

?>












       
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
 <strong>Copyright &copy; 2023 <a href="../index.php">FM Fish Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
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
