<script>
document.title = "Contact Us - <?= WEBSITE ?>";
document.getElementsByTagName('meta')["keywords"].content = "";
document.getElementsByTagName('meta')["description"].content = "<?= WEBSITE ?>";
</script>
 
 <div id="services" class="section">
     
<div class="inner-pages">
      <div class="banner-top-sec py-4" style="background: url(../frontend/images/inner-page-bg.jpg) no-repeat center center;min-height: 220px;background-size: cover;display: flex;align-items: center;">
         <div class="container" style="position:relative;">
               <div class="text-cart text-center">
                  <h1 class="heading ttu fwb"> Contact Us</h1>
                  <ol class="breadcrumb justify-content-center">
                     <li><a href="/">Home</a></li>
                     <li class="active"> Contact Us</li>
                  </ol>
               </div>
         </div>
      </div>

   
<div class="contact-info-sec pd-md">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
			<div class="clearfix"></div>
				<div class="ask-form cForm cff">
				<p class="lead m-0">Please fill in the form below and we will contact you shortly:</p><br>
					<form id="cForm2" class="ps-ar" action="<?= base_url() ?>user-inquiry" method="post">
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
			<div class="col-sm-5 cic mt-lg-5 mt-col-3">
					<span class="sh">Contact Info</span>
		<hr>
		<div class="df-address">
		<div class="row">

			<div class="add-sec col-sm-12">
				<div class="adrs-ico"><img src="frontend/images/location2.png" alt="Address icon"></div>
				<div class="adrs-txt">
				<small>Address:</small>
				<p class="subhead2"><?= ADDRESS ?><br>
				
				
				</p><hr class="wt">
				</div>
			</div>
			<div class="add-sec col-sm-12">
				<div class="adrs-ico eml"><img src="<?= base_url(); ?>frontend/images/email2.png" alt="email icon"></div>
				<div class="adrs-txt">
					<small>Email:</small>
					<p class="subhead2"><a href="<?= EMAIL_B ?>"> <?= EMAIL_B ?></a></p>
				</div>
				<hr class="wt">
			</div>
			<div class="add-sec col-sm-12">
				<div class="adrs-ico eml"><img src="<?= base_url(); ?>frontend/images/call.png" alt="phone icon"></div>
				<div class="adrs-txt">
					<small>Phone (Toll-Free):</small>
					<p class="subhead2"><a href="tel:<?= TFN ?>"> <?= TFN ?></a><br></p>
				</div>
				<hr class="wt">
			</div>

			<div class="add-sec col-sm-12">
				<div class="adrs-ico eml"><img src="<?= base_url(); ?>frontend/images/calendar.png" alt="24x7 icon"></div>
				<div class="adrs-txt">
					<small>Opening Hours</small>
					<p class="subhead2">24 Hour Services</p>
				</div>
			
			</div>
		</div>
		</div>
				
			</div>
		</div>
		</div>
<div class="clearfix pd-sm"></div>
	</div>   

   
     
     <div class="container d-none">

         <!-- Four columns -->
         <div class="row">

             <div class="content-sec">
              
                 <div class="contact-sec">
                    
                    
                     <div class="left-sec">
                     <p><strong class="bl-tx">Address:</strong> <?= ADDRESS ?></p>
                        <a href="tel:<?= TFN ?>"><strong>Toll Free:</strong> <?= TFN ?></a><br>
                         <a href="mailto:<?= EMAIL_SER ?>"><strong>Email:</strong> <?= EMAIL_SER ?></a>
                     </div>

                     <div class="right-sec">
                         <h2>Get in Touch</h2>

                         <form name="frm" method="POST" action="<?= base_url(); ?>" >
                             <input type="hidden" name="submitForm" value="submit" />
                           <input name="name" type="text" placeholder="Name" class="int-sec">
                             <input name="email" type="text" placeholder="Email ID" class="int-sec2">
                             <input name="contactno" type="text" placeholder="Phone Numer" class="int-sec2">
                             <textarea name="msg" cols="" rows="" class="int-sec" placeholder="Enter Message"></textarea>
                             <input name="submit" type="submit" value="Submit" class="int-btn">
                         </form>
                     </div>
                     
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 
 
 


 </div>
 

 
 