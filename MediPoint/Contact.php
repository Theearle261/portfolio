



<?php 

include('header.php');



		
?>
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
Reach us and tell us something</h2>
							<img src="img/section-img.png" alt="#">
							<p>
Our dedicated team is always prepared and eager to provide you with the assistance you need. Whether you require medical advice, consultation, or treatment, we're here to support you every step of the way. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form  action="Send.php" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input  type="text" placeholder="Name" name="fld_Name" required="required" class="nice-select form-control wide">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input  type="email" placeholder="Email" name="fld_Email" required="required" class="nice-select form-control wide">
									</div>
								</div>
								
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea  placeholder="Write Your Message Here....." name="fld_Message" rows="10" class="form-group"></textarea>
									</div>
								</div>
					
							<div class="row">
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" name="Appoint"  id="Appoint"  class="btn btn-block">Send message</button>
										</div>
									</div>
								</div>
							
							</div>
						</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		
		<!-- /End Newsletter Area -->
		
		<!-- Footer Area -->
		<?php 

include('footer.php');


?>