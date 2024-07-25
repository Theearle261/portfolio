



<?php 

include('header.php');



		
?>
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
Cart</h2>
							<img src="img/section-img.png" alt="#">
							
						</div>
					</div>
				</div>
	





<?php
 include('config.php');
 include('session.php');
$fld_session_Id= substr($_GET['id'], 0,50);



if (isset($_POST['Remove']) ) {

$fld_order_Id=$_POST['fld_order_Id'];







$sqlq = "DELETE FROM tbl_orders where fld_order_Id='$fld_order_Id'";
  
          

          
if ($conn->query($sqlq) === TRUE) {


 echo "<script>alert('Removed');</script>";

}else{


	 echo "<td>Error updating record: " . mysqli_error($conn);
}





}



?>










			<div id="content" class="site-content">
		<div class="ast-container">
					<div id="primary" class="content-area primary">

				
				<main id="main" class="site-main">
					<div class="ast-woocommerce-container">
		
	
<div class="page-description"><div data-block-name="woocommerce/cart" class="wp-block-woocommerce-cart alignwide is-loading">

	<div class="summary entry-summary">


	

		


					<?php 
				




					$sql = "SELECT * FROM tbl_orders inner join tbl_products on tbl_products.fld_product_Id=tbl_orders.fld_Product_Id where tbl_orders.fld_Id='$deviceId' and  tbl_orders.fld_status='New Order' ";

       				 $result = mysqli_query($conn,$sql);
 					$rowcount=mysqli_num_rows($result);

 					if (mysqli_num_rows($result) > 0) { 


 						?>

<div class="row">


			<div class="col-md-9">

				<table>
					<tr>
					<th colspan="2">Product</th>

					<th colspan="2">Total</th>
				</tr>



 						<?php
                      while($row = mysqli_fetch_assoc($result)) {



		?>


				<tr>
				<td width="20%" >
					<img src="images/<?php echo $row['fld_Pic'] ?>"  >


				</td>
				<td width="80%" >
					<span class="single-product-category">
							<span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value"><b><?php echo  $row['fld_Product_Name'];   ?></b></span>
				<span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value"><?php echo "₹". $row['fld_Price'] . ".00";   ?></span>
				
			
				<div class="woocommerce-product-details__short-description">
					<p>Quantity:<?php echo " ".$row['fld_Quantity'] ;  ?></p>
				</div>


				<div>

					<form method="POST" action="#">

						<input type="hidden" name="fld_order_Id" value="<?php echo $row['fld_order_Id']; ?>">
					<button type="submit" onclick="this.form.submit()" name="Remove" class="components-button wp-element-button wc-block-cart__submit-button contained"><span class="btn btn-sm btn-danger">Remove Item</span></button>

				</form>

				</div>


				</td>

				<td align="right">
					<span class="woocommerce-Price-amount amount" style="font-size:20px">
					<bdi><span class="woocommerce-Price-currencySymbol">₹</span>&nbsp;<?php echo $row['fld_Price']*$row['fld_Quantity']. ".00" ;  ?></bdi></span>

				</td>

		
			</tr>





			<?php 
			ini_set('display_errors', 0);
$Grand=$Grand+= $row['fld_Price']*$row['fld_Quantity'];


$order= $row['fld_order_Id'];
		}

	?>

	<tr>
				
				<td colspan="2" align="right"> Grand Total </td>
				<td align="left"><h6 id='grand'><?php echo "  "  ?>₹ &nbsp;<?php echo $Grand. ".00"; ?></h6></td>

			</tr>




			<tr>


				<td colspan="2">Personal Details:
				<br/> 

					<select class="nice-select form-control wide" name=fld_Payment required style="height:70px">

						<option disabled value="SBI">SBI(Temporarily not available)</option>
						<option disabled value="idfc">IDFC(Temporarily not available)</option>
						<option disabled value="Indus">INDUS(Temporarily not available)</option>
						<option disabled value="PayTM">PayTM(Temporarily not available)</option>
						<option  value="COD">Cash on Delivery</option>

					</select>






				</td>
			</tr>


			<tr>

			<td colspan="2">Pay Thru:
				<br/> 

				<form action="Checkout.php" method="POST">
					<input  type="text" placeholder="Name" name="fld_Name" required="required" class="nice-select form-control wide">
						<input  type="text" placeholder="Address" name="fld_Billing_Address" required="required" class="nice-select form-control wide">
							<input  type="text" placeholder="Contact Number" name="fld_Contact_Number" required="required" class="nice-select form-control wide">

						



				</td>				
								
							

			</tr>



			<tr>




				<br/>	<br/>



			<td>	<button onclick="this.form.submit()" class="components-button wc-block-components-button wp-element-button wc-block-cart__submit-button contained"><span class="btn btn-primary">Proceed to Checkout</span></a></td>

			</tr>






</table>



			</div>


			



		</div>

		<?php 
		}else{

		?>

	




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