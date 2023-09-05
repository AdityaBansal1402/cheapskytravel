<script>
document.title = "Book Cheap Flight Ticket on Now - <?= WEBSITE ?>";       
document.getElementsByTagName('meta')["keywords"].content = "";       
document.getElementsByTagName('meta')["description"].content = "Find cheap flight at <?= WEBSITE ?>.";   
</script>
   <div id="header-wrapper" class="wrap-inpg py-4 py-md-5"  style="background-image: url('frontend/images/cheap-flight.jpg'); background-position: bottom;background-no-repeat: no-repeat; background-size: cover;">
 <?php include 'includes/api-banner.php'; ?>  
</div>
<div class="whysky mb-4 mb-md-5">
 <?php include 'includes/deals.php'; ?>
</div> 
   <div class="container mb-4 mb-md-5">
      <div class="flight-list">
		 <div class="headingtxt mb-3">
		 <h3 class="headh3 txt-ff"><span>Cheap Flight Deals</span>  <small>(Round Trip)</small> </h3>
		 <span class="mxw lead text-center center-block txt-ff" data-aos="fade-down"></span>
		 </div>
		 
		 <div class="row g-5">
            <div class="col-12 col-md-6 col-lg-6">
                <h4 class="mb-2 txt-ff">Domestic Flight Deals </h4>
            <div class="row g-3">
            <div class="col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From New York to Orlando" href="<?= base_url() ?>Result?depart=NYC&arrival=ORL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							NYC <i class="ti-exchange-vertical"></i> ORL<br>
							<span>New York to Orlando</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$54<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                  <a onclick="nav()" title="Flight From Denver to Las Vegas" href="<?= base_url() ?>Result?depart=DFW&arrival=LAS&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							DFW <i class="ti-exchange-vertical"></i> LAS<br>
							<span>Denver to Las Vegas</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$40<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Los Angeles to Kahului" href="<?= base_url() ?>Result?depart=LAX&arrival=OGG&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAX <i class="ti-exchange-vertical"></i> OGG<br>
							<span>Los Angeles to Kahului</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$199<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Los Angeles to Honolulu" href="<?= base_url() ?>Result?depart=LAX&arrival=HNL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAX <i class="ti-exchange-vertical"></i> HNL<br>
							<span>Los Angeles to Honolulu</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$249<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           
            </div>
            </div>
            
            
            
            <div class="col-12 col-md-6 col-lg-6">
                <h4 class="mb-2 txt-ff">International Flight Deals </h4>
            <div class="row g-3">
            <div class="col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From Boston to London" href="<?= base_url() ?>Result?depart=BOS&arrival=LHR&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							BOS <i class="ti-exchange-vertical"></i> LHR<br>
							<span>Boston to London</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$799<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                  <a onclick="nav()" title="Flight From Boston to Paris" href="<?= base_url() ?>Result?depart=BOS&arrival=CDG&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							BOS <i class="ti-exchange-vertical"></i> CDG<br>
							<span>Boston to Paris</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$849<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From New York to Bogota" href="<?= base_url() ?>Result?depart=JFK&arrival=BOG&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							JFK <i class="ti-exchange-vertical"></i> BOG<br>
							<span>New York to Bogota</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$329<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Los Angeles to Sydney" href="<?= base_url() ?>Result?depart=LAX&arrival=SYD&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAX <i class="ti-exchange-vertical"></i> SYD<br>
							<span>Los Angeles to Sydney</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$999<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           
           
            </div>
            
         </div>
         </div>
		 
		 
		 
		 
		 
	
		 
		 
		 
        <div class="row g-3 d-none">
		<div class="col-md-8 col-12 fdl">
        <div class="row g-3">
           <div class="col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From Denver to San Diego" href="<?= base_url() ?>Result?depart=DEN&arrival=SAN&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							DEN <i class="ti-exchange-vertical"></i> SAN<br>
							<span>Denver to San Diego</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$84<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From Atlanta to Denver" href="<?= base_url() ?>Result?depart=ATL&arrival=DEN&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							ATL <i class="ti-exchange-vertical"></i> DEN<br>
							<span>Atlanta to Denver</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$159<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
                <a title="Flight From Atlanta to San Francisco" href="<?= base_url() ?>Result?depart=ATL&arrival=SFO&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							ATL <i class="ti-exchange-vertical"></i> SFO<br>
							<span>Atlanta to San Francisco</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$159<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
                <a title="Flight From Tampa to Denver" href="<?= base_url() ?>Result?depart=TPA&arrival=DEN&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							TPA <i class="ti-exchange-vertical"></i> DEN<br>
							<span>Tampa to Denver</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$299<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
                <a title="Flight From Denver to Montego Bay" href="<?= base_url() ?>Result?depart=DEN&arrival=MBJ&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							DEN <i class="ti-exchange-vertical"></i> MBJ<br>
							<span>Denver to Montego Bay</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$229<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
                  <a title="Flight From Las Vegas to Orlando" href="<?= base_url() ?>Result?depart=LAS&arrival=MCO&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAS <i class="ti-exchange-vertical"></i> MCO<br>
							<span>Las Vegas to Orlando</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$299<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            </div>
            </div>
<div class="col-md-4 col-12">
<div class="right-side-card p-3 d-md-flex">
<div class="w-md-50 w-100">
</div>
<div class="w-md-50 w-100">
<b>SAVE BIG</b><br>on <span class="airline-name">Airlines</span> Tickets Booking With Our Travel Experts
<div class="for-changes"><a href="tel:+1 844-304-9595">
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Booking</span> 
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Changes</span>  
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Cancellation</span>  
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Assistance</span>
<strong></strong></a><strong class="text-center"><a href="tel:<?= TFN ?>" class="tfnpay"><i class="fa fa-phone" aria-hidden="true"></i></a><p>(TOLL-FREE)</p></strong>
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
</style>



<script>
$('.airline-name').text('Travel Smart, Book Low Cost Flights & ');
$('.txt02').text('Save Big!');

</script>