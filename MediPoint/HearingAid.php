



<?php 

include('header.php');
include('config.php');


		
?>
	<section class="gallery py-5" id="gallery">

			<div class="container">
			
	

<div class="container py-3">
		<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
Hearing Aid Equipments</h2>
							<img src="img/section-img.png" alt="#">
							
						</div>
					</div>
				</div>
		<div class="row gallery_grid-more project-grids w3ls">
<?php

$sql = "SELECT * FROM tbl_products where fld_Status='Active' ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?>



			<div class="col-lg-4 col-md-4 col-6 px-1 w3layoutsits_w3layouts_gallery_grid1" style="border-color: black;
							border: 1px solid;">




					<style type="text/css">
						

						.img-prod{


							height: 400px;
							width: 100%;


						}
					</style>

				<div class="gallery-border" align="center">

					<img src="images/<?php echo $row['fld_Pic'] ?>" style="max-height: 200px; align-content: center;"   />
					
					
			
					<div align="center" style="vertical-align: bottom;">
					<p class="prod" ><?php echo $row['fld_Product_Name'] ?></p>
					<p class="prod" style="  color: teal;" ><?php echo $row['fld_Brand_Name'] ?></p>
					<p class="price" >₹<?php echo $row['fld_Price'] ?>.00 </p>

				 <button type="btn-sm btn-dark fa-shake" class="btn btn-dark" data-toggle="modal" data-target="#modal-sm<?php echo $row['fld_product_Id'] ?>">
                   <i class="fa-solid fa-basket-shopping fa-shake"></i>More Info
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
	
	.prod{

  font-weight: bold;
  color: black;
 font-size: 15px;

}

.price{

  font-weight: bold;
  color: navy;
 font-size: 20px;

}



</style>

















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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo $row['fld_Product_Name'] ?></h4>
               <!-- <h4 class="modal-title"><?php echo $row['fld_product_name_local'] ?></h4> -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            	<div class="row">
           	<div class="col-md-4">
            	<img src="images/<?php echo $row['fld_Pic'] ?>" alt="Popup Image" class="img-fluid" />
            </div>
	<br/><br/>

 	<div class="col-md-8">
<div align="center">

              


                      <table >
                      	<tr>
                      	 	<td><b>Aid Placement:</b> <?php echo $row['fld_Aid_Placement'] ?></td>

                       	<td><b>Brand Name:</b> <?php echo $row['fld_Brand_Name'] ?></td>
                      </tr>

                        	<tr>
                      	 	<td><b>Model Name/ Number: </b><?php echo $row['fld_Model_Name_Number'] ?></td>

                      	 	<td><b>Number of Channels: </b> <?php echo $row['fld_Channels'] ?></td>
                      </tr>

                      	<tr>
                      	<td><b>Color: </b><?php echo $row['fld_Color'] ?></td>

                      
                      </tr>

                      </table>












		<p class="price" >₹<?php echo $row['fld_Price'] ?>.00</p>
<button class="btn-sm btn-dark" onclick="sub<?php echo $row['fld_product_Id'] ?>()">-</button> <input type="text"  value="1" readonly style="width:50px;text-align: center;" id='quantity<?php echo $row['fld_product_Id'] ?>' > <button onclick="add<?php echo $row['fld_product_Id']?>()" class="btn-sm btn-dark">+</button>
	<form action="Order.php" method="POST">
<input type="text"  name="fld_Quantity" value="1" hidden readonly style="width:50px;text-align: center;" id='quantity2<?php echo $row['fld_product_Id'] ?>' >
<input type="hidden" name="fld_product_Id" value="<?php echo $row['fld_product_Id'] ?>">

<br/>
<br/>

<div class="row">
	<div class="col-md-6">
		<h5 class="form-label" align="left">Total Price:</h5>


	</div>

	<div class="col-md-6">
			<input type="hidden"  name="fld_Price" value="<?php echo $row['fld_Price'] ?>">
<input type="text"  class="form-control w-10"  id="Total<?php echo $row['fld_product_Id'] ?>" value="₹<?php echo $row['fld_Price'] ?>.00" readonly >

	</div>
</div>


<br/>











</div>


	<input type="submit" class="btn-block btn-lg btn-dark" value="Buy Now" name="Order"  id="Order<?php echo $row['fld_product_Id'] ?>"  >
</form>

</div>
</div>
<br/>
    		<div class="form-group row">

                         <b><label for="disabledInput" class="col-sm-12 col-form-label">More Details</label></b>
                        <div class="col-sm-12">
                     
	<p><?php echo $row['fld_Product_Details']?></p>
 </div>
                      </div>


            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	
 



<?php 
}





?>


                                <?php

$sql = "SELECT * FROM tbl_products  where fld_Status='Active' ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?> 

                          	<script type="text/javascript">    



                          	function check<?php echo $row['fld_product_Id'] ?>(){


                          	
                          		document.getElementById('Order<?php echo $row['fld_product_Id'] ?>').hidden=false;
                            	
                          				document.getElementById('combo<?php echo $row['fld_product_Id'] ?>').hidden=true;
                          				document.getElementById('combo2<?php echo $row['fld_product_Id'] ?>').hidden=false;
                          					document.getElementById('box2<?php echo $row['fld_product_Id'] ?>').checked=true;

                          	} 

                          	 	function check2<?php echo $row['fld_product_Id'] ?>(){


                          
                          		document.getElementById('Order<?php echo $row['fld_product_Id'] ?>').hidden=true;
                          		
                          				document.getElementById('combo<?php echo $row['fld_product_Id'] ?>').hidden=false;
                          				document.getElementById('combo2<?php echo $row['fld_product_Id'] ?>').hidden=true;
                          				document.getElementById('box1<?php echo $row['fld_product_Id'] ?>').checked=false;

                          	} 


                          	 function add<?php echo $row['fld_product_Id']?>(){



                                  var quant<?php echo $row['fld_product_Id'] ?>=document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value;
																document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value= ++quant<?php echo $row['fld_product_Id']?>;
																document.getElementById('quantity2<?php echo $row['fld_product_Id'] ?>').value= quant<?php echo $row['fld_product_Id']?>;
                                
                    
                                

																	document.getElementById('Total<?php echo $row['fld_product_Id'] ?>').value="₹ "+ quant<?php echo $row['fld_product_Id']?>*<?php echo $row['fld_Price'] ?>+".00" ;
              



                                  
                                }

                                function sub<?php echo $row['fld_product_Id'] ?>(){



                                  var quant<?php echo $row['fld_product_Id'] ?>=document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value;
                                  document.getElementById('quantity2<?php echo $row['fld_product_Id'] ?>').value= quant<?php echo $row['fld_product_Id']?>;

                                  if (quant<?php echo $row['fld_product_Id'] ?><=1){

                                    document.getElementById('minus<?php echo $row['fld_product_Id'] ?>').disabled=true;

                                    	document.getElementById('Total<?php echo $row['fld_product_Id'] ?>').value="₹ "+quant<?php echo $row['fld_product_Id']?>*<?php echo $row['fld_Price'] ?>+".00 " ;


                                  }else{
                                  document.getElementById('quantity<?php echo $row['fld_product_Id'] ?>').value= --quant<?php echo $row['fld_product_Id'] ?>;
                                  document.getElementById('quantity2<?php echo $row['fld_product_Id'] ?>').value= quant<?php echo $row['fld_product_Id']?>;

                                  	document.getElementById('Total<?php echo $row['fld_product_Id'] ?>').value="₹ "+ quant<?php echo $row['fld_product_Id']?>*<?php echo $row['fld_Price'] ?> +".00";
                                }
                                }


                             

                               </script>
<?php

}

?>
















			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		
		<!-- /End Newsletter Area -->
		
		<!-- Footer Area -->
		<?php 

include('footer.php');


?>


<script src="fonts\fontawesome-free\js\all.min.js"></script>
<script src="fonts\fontawesome-free\js\conflict-detection.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

