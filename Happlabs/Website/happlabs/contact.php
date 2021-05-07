<?php include("header.php"); ?> 
<section class="contact-us-section">
	<div class="container">
		<div class="row contact-us-row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 contact-us mt-5">
				<h1 class="font-oneday text-center mb-4">How can we help ?</h1>
				<p class="font-roboto-regular text-center">Learn about how HappLabs can help you reach your business growth. Please write to us, and we will get back to you shortly.</p>	
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 contact-us-form px-5">
				<div class="alert alert-success contact-alert d-none">
  					<strong>Success!</strong> We will get back to you shortly.
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>
				<form method="POST" id='contact-form'>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						 	<div class="form-group">
								<label for="full_name">Full Name<span class="mandatory">&nbsp;*</span></label>
					        	<input type="text" id="full_name" name="full_name" class="form-control" required>
			      			</div>
			      		</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					      	<div class="form-group">
								<label for="cemail">Email Address<span class="mandatory">&nbsp;*</span></label> 
						        <input type="email" id="cemail" name="cemail" class="form-control" required>
					      	</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					      	<div class="form-group">
								<label for="about">Tell us a bit about<span class="mandatory">&nbsp;*</span></label>
			        			<textarea id="about" name="about" class="form-control md-textarea" rows="3" required></textarea>
			    			</div>
			    		</div>
			    	</div>
			    	<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="font-roboto-regular text-left">Preferred consultation time</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<div class="md-form">
	  							<input type="text" id="contact_date" name="contact_date" class="form-control datepicker" required readonly>
	  							<label for="contact_date">Date<span class="mandatory">&nbsp;*</span></label>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-1">
							<div class="md-form">
							  <input type="text" id="contact_time" name="contact_time" class="form-control timepicker" required readonly>
							  <label for="contact_time">Time<span class="mandatory">&nbsp;*</span></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="checkbox" name="contactcheck" class="form-check-input" id="ccheck" required>
        		 			<label class="form-check-label" for="ccheck">I consent to be approached by HappLabs Tech team for further communication.</label>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<button type="submit" class="btn submit-button" name="contact_submit"><p class="font-roboto-bold">SUBMIT</p></button>
						</div>
					</div>
				</form>		
			</div>
		</div>
	</div>
</section>
<section class="contact-office-section">
        <div class="container">
                <div class="row contact-office">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8 contact-office-col-1">
                                <h5 class="font-oneday text-left template-base-text-color mb-4">Manhattan office</h5>
                                <p class="font-roboto-regular text-left">
                                HappLabs Tech Inc.,<br/>
                                733 3rd Avenue, <br/>
                                16th Floor,<br/>
                                New York, NY 10017</p>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-8 col-8 contact-office-col-2">
                                <h5 class="font-oneday text-left template-base-text-color mb-4">Bangalore office</h5>
                                <p class="font-roboto-regular text-left">
                                743, Shri Krishna Temple Rd,<br/>
                                Indira Nagar 1st Stage,<br/>
                                Stage 1, Indiranagar,<br/>
                                Bengaluru, Karnataka 560038</p>
                        </div>
                </div>
        </div>
</section>
<?php include("footer.php"); ?> 
