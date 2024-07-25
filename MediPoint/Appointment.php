



<?php 

include('header.php');



		
?>
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>
We stand prepared to assist you whenever you need us. Schedule an appointment today!</h2>
							<img src="img/section-img.png" alt="#">
							<p>
Our dedicated team is always prepared and eager to provide you with the assistance you need. Whether you require medical advice, consultation, or treatment, we're here to support you every step of the way. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form  action="Appoint.php" method="POST">
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
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input  type="text" placeholder="Phone"  name="fld_Phone" required="required" class="nice-select form-control wide">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<select class="nice-select form-control wide" placeholder="Service" name="fld_Service" required="required">
									
												<option value="General" class="option ">General Treatment</option>
												<option value="Dental" class="option">Dental Procedure</option>
												<option value="PE" class="option">Physical Examination</option>
												<option value="Ear" class="option">Ear Treatment</option>
												<option value="Vision" class="option">Vision Correction</option>
												<option value="Blood" class="option">Blood Transfusion</option>
											
										</select>
									</div>
								</div>
							<!-- 	<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div> -->
								<div class="col-lg-12 col-md-6 col-12">
									<div class="form-group">
										<input type="date" id="datepickers" name="fld_Date" required class="nice-select form-control wide" onchange="datess()" >
									</div>
								</div>

								<script type="text/javascript">
									
									function datess(){

											
										var x=document.getElementById('datepickers').value;

									
										var currentDate = new Date();
										currentDate.setDate(currentDate.getDate());
										var formattedDate = currentDate.toISOString().slice(0, 10);
								
										if(x>=formattedDate){

											document.getElementById('Appoint').disabled=false;

										}else{
										alert('Please Select Valid Date');

										document.getElementById('Appoint').disabled=true;
									}

									}


								</script>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea  placeholder="Write Your Message Here....." name="fld_Message" class="nice-select form-control wide"></textarea>
									</div>
								</div>
					
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" name="Appoint"  id="Appoint" disabled class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an email )</p>
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