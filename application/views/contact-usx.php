<script>
document.title = "Contact Us - Skyhyglobal";
document.getElementsByTagName('meta')["keywords"].content = "";
document.getElementsByTagName('meta')["description"].content = "Skyhyglobal ";
</script>
 
 <div id="services" class="section">
     
<div class="inner-pages">
      <div class="banner-top-sec py-4" style="background: url(../frontend/images/inner-page-bg.jpg) no-repeat center center;min-height: 220px;background-size: cover;display: flex;align-items: center;">
         <div class="container" style="position:relative;">
               <div class="text-cart mt-3 text-center">
                  <h1 class="heading ttu fwb"> Contact Us</h1>
                  <ol class="breadcrumb justify-content-center">
                     <li><a href="/">Home</a></li>
                     <li class="active"> Contact Us</li>
                  </ol>
               </div>
			   
			   
			   <div class="mt-5">
		
		<div class="df-address">
		<div class="row g-4">

			<div class="add-sec col-12 col-md-3">
				<div class="adrs-ico"><img src="frontend/images/location2.png" alt="Address icon"></div>
				<div class="adrs-txt">
				<small>Address:</small>
				<p class="subhead2"><?= ADDRESS ?><br>
				
				
				</p><hr class="wt">
				</div>
			</div>
			<div class="add-sec col-12 col-md-3">
				<div class="adrs-ico eml"><img src="<?= base_url(); ?>frontend/images/email2.png" alt="email icon"></div>
				<div class="adrs-txt">
					<small>Email:</small>
					<p class="subhead2"><a href="<?= EMAIL_B ?>"> <?= EMAIL_B ?></a></p>
				</div>
				<hr class="wt">
			</div>
			<div class="add-sec col-12 col-md-3">
				<div class="adrs-ico eml"><img src="<?= base_url(); ?>frontend/images/call.png" alt="phone icon"></div>
				<div class="adrs-txt">
					<small>Phone (Toll-Free):</small>
					<p class="subhead2"><a href="tel:<?= TFN ?>"> <?= TFN ?></a><br></p>
				</div>
				<hr class="wt">
			</div>

			<div class="add-sec col-12 col-md-3">
				<div class="adrs-ico eml"><img src="<?= base_url(); ?>frontend/images/calendar.png" alt="24x7 icon"></div>
				<div class="adrs-txt">
					<small>Opening Hours</small>
					<p class="subhead2">24 Hour Services</p>
				</div>
			<hr class="wt">
			</div>
		</div>
		</div>
				
			</div>
			   
         </div>
      </div>

   
<div class="contact-info-sec pd-md">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3">
			<div class="clearfix"></div>
				<div class="ask-form cForm cff">
				<p class="lead m-0">Please fill in the form below and we will contact you shortly:</p><br>
					<form id="cForm2" class="ps-ar  p-3 p-md-5" action="<?= base_url() ?>user-inquiry" method="post">
					<div class="row g-2">
					
					<div class="col-12 col-md-6">
							<label>First Name<sup>*</sup> </label>
					<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="" aria-required="true">
					</div>
					<div class="col-12 col-md-6">
							<label>Last Name<sup>*</sup> </label>
			      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="" aria-required="true">			
			      </div>
			
						    <div class="col-12 col-md-6">
							<label>Email Id<sup>*</sup></label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="" aria-required="true">
					     </div>
						    <div class="col-12 col-md-6">
							<label>Phone No.<sup>*</sup></label>
							<input type="text" class="form-control" id="phone" placeholder="Phone No." name="phone" data-parsley-type="digits" data-parsley-length="[10, 11]" required="" aria-required="true">
						</div>
				
						<div class="col-12">
							<label>Subject<sup>*</sup></label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="" aria-required="true">
						</div>
						<div class="col-12">
							<label>Comments and Questions<sup>*</sup></label>
							<textarea class="form-control" placeholder="Comments &amp; Questions" id="comments" name="comments" rows="4" required="" aria-required="true"></textarea>
						
						</div>
						<div class="col-12 text-end">
						<button type="submit" name="submit" class="abt-b mt-2">Submit</button>
						</div>
						<!--<div class="FormContactMsg" id="FormContactMsg"></div>-->
						</div>
					</form>
				</div>
			</div>
			
		</div>
		</div>
	</div>   
 </div>
 
 
 
 


 </div>
 
<style>
.df-address, .df-address a {color: #fff;}
</style>
 
 