<script>
document.title = "Book Flights Under $99 on Now - <?= WEBSITE ?>";       
document.getElementsByTagName('meta')["keywords"].content = "";       
document.getElementsByTagName('meta')["description"].content = "Find cheap flight at <?= WEBSITE ?>.";   
</script>
   <div id="header-wrapper" class="wrap-inpg py-4 py-md-5"  style="background-image: url('frontend/images/cheap-flight-bg2.jpg'); background-position: bottom;background-no-repeat: no-repeat; background-size: cover;">
 <?php include 'includes/api-banner.php'; ?>  
</div>
<div class="whysky mb-4 mb-md-5">ac
 <?php include 'includes/deals.php'; ?>
</div> 
   <div class="container mb-4 mb-md-5">
      <div class="flight-list">
		 <div class="headingtxt mb-3">
		 <h3 class="headh3 txt-ff"><span>Book Flights Under <b>$99</b></span>  <small>One Way Flight Deals</small> </h3>
		 <span class="mxw lead text-center center-block txt-ff" data-aos="fade-down"></span>
		 </div>
		 
		 <div class="row g-5">
            <div class="col-12 col-md-6 col-lg-6">
                <h4 class="mb-2 txt-ff d-none">Domestic Flight Deals </h4>
            <div class="row g-3">
            <div class="col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From Miami to Montego Bay" href="<?= base_url() ?>Result?depart=MIA&arrival=MBJ&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							MIA <i class="ti-exchange-vertical"></i> MBJ<br>
							<span>Miami to Montego Bay</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$82<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                  <a onclick="nav()" title="Flight From Orlando to Cancún" href="<?= base_url() ?>Result?depart=MCO&arrival=CUN&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							MCO <i class="ti-exchange-vertical"></i> CUN<br>
							<span>Orlando to Cancún</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$87<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Orlando to San Juan" href="<?= base_url() ?>Result?depart=MCO&arrival=SJU&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							MCO <i class="ti-exchange-vertical"></i> SJU<br>
							<span>Orlando to San Juan</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$83<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Los Angeles to Puerto Vallarta" href="<?= base_url() ?>Result?depart=DEN&arrival=PHX&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAX <i class="ti-exchange-vertical"></i> PVR<br>
							<span>Los Angeles to Puerto Vallarta</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$85<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           
            </div>
            </div>
            
            
            
            <div class="col-12 col-md-6 col-lg-6">
                <h4 class="mb-2 txt-ff d-none">International Flight Deals </h4>
            <div class="row g-3">
            <div class="col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From Boston to Las Vegas" href="<?= base_url() ?>Result?depart=BOS&arrival=LAS&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							BOS <i class="ti-exchange-vertical"></i> LAS<br>
							<span>Boston to Las Vegas</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$77<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                  <a onclick="nav()" title="Flight From Chicago to Orlando" href="<?= base_url() ?>Result?depart=ORD&arrival=MCO&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							ORD <i class="ti-exchange-vertical"></i> MCO<br>
							<span>Chicago to Orlando</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$79<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Orlando to Pittsburgh" href="<?= base_url() ?>Result?depart=MCO&arrival=PIT&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							MCO <i class="ti-exchange-vertical"></i> PIT<br>
							<span>Orlando to Pittsburgh</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$48<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Los Angeles to Chicago" href="<?= base_url() ?>Result?depart=LAX&arrival=ORD&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAX <i class="ti-exchange-vertical"></i> ORD<br>
							<span>Los Angeles to Chicago</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$80<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           
           
            </div>
            
         </div>
         </div>
		 
		 
		 
		 
		 
	
		 
		 
		 
      
      </div>
   </div>
   <div class="about-Frontier-airlines content-wrap my-5">
      <div class="container">
         <div class="headingtxt hdadjt">
            <div class="headh3 txt-ff">Cheap Flight Tickets Booking- Grab the Best Flight Deals</div>
         </div>
         <h3>Discounted Flight Tickets</h3>
        <p>At Cheapskytravel, we deliver you with the best online platform to book flights at the best prices. Use our easy-to understand interface, look-up your favourite destinations and book your reservation at your ease.</p>


<h3>Why do Airline prices fluctuate from day to day?</h3>
<p>Dynamic pricing is a technique of pricing a product according to current market conditions. </p>
<p>Factors such as customer booking patterns, competitor prices, even weather and popular events can impact the product demand and require adjusting the prices.
</p>
<h3>Why Air Fare Moss?</h3>
<p>Many benefits besides convenience, choices and price comparison provided by Cheapskytravel are 24x7 customer service and ease of accessiblity. Allowing travelers to book travel services anytime, anywhere, without being bound by business hours or time zones.</p>
<p>Cheapskytravel aggregates information from multiple travel consolidators and service providers, allowing travelers to compare prices, promotions, and discounts in real-time. </p>
<strong>This enables travelers to find the best deals and save money on flights, hotels, and other travel services, making travel more affordable and accessible.</strong>
      </div>
   </div>
   

  <div class="modal fade best-dealx" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
         <div class="modal-content">
            <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                 <div class="pdl text-center">Book now and save up to $20!</div>
              <div class="afm-offer-card01 p-3">
               <a href="tel:<?= TFN ?>" class="tfn-url" title="Call Us For Urgent Flights Booking, Changes/Cancellation Or Assistance">
                  
                  <div class="row align-items-top align-items-center mb-0">
                           <div class="col-md-8 col-9 pl-lg-0">
                        <div class="tc-child-div-s">
                           <h3 class="afm-call-booking">Can't find the perfect fare? Let us help you.</h3>
                           <div class="clearfix"></div>
                           <span class="tcsv">Don't miss out on unbeatable deals.</span>
                           <span class="tcsv tcsv2">Call Now</span>
                           <div class="tc-tfn tfnp tfn-no"><i class="fa fa-phone" aria-hidden="true"></i> <?= TFN ?></div>
                        </div>
                     </div>
                     <div class="col-md-4 col-3 offset-sm-1">
                       
                     </div>
                
                  </div>
               </a>
            </div>
            </div>
         </div>
      </div>
   </div>


<!--end here us-airlines-->

<style>
.tfn-bottom-section{display:block !important;}
body{margin-bottom:45.5px} a {color:#343a40;}
.modal {top: 0 !important;}
.rmpc {background: #bd98ff;padding: 15px;}
.txt01{display:none;}
.flight-status span, .flight-status strong, .dd-box {font-size: 26px;}
</style>



<script>
$('.airline-name').text('Flight Deals - Book Flight Under');
$('.txt02').text('$99');

</script>