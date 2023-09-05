<script>
document.title = "Book Flights Under $49 now on - <?= WEBSITE ?>";       
document.getElementsByTagName('meta')["keywords"].content = "";       
document.getElementsByTagName('meta')["description"].content = "Find cheap flight at <?= WEBSITE ?>.";   
</script>
   <div id="header-wrapper" class="wrap-inpg py-4 py-md-5"  style="background-image:url('frontend/images/flightflybg.jpg');background-position: bottom;background-size: cover;background-repeat: no-repeat;">
 <?php include 'includes/api-banner.php'; ?>  
</div>
<div class="whysky mb-4 mb-md-5">
 <?php include 'includes/deals.php'; ?>
</div> 
   <div class="container mb-4 mb-md-5">
      <div class="flight-list">
		 <div class="headingtxt mb-3">
		 <h3 class="headh3 txt-ff"><span>Book Flights Under <b>$49</b></span>  <small>One Way Flight Deals</small> </h3>
		 <span class="mxw lead text-center center-block txt-ff" data-aos="fade-down"></span>
		 </div>
		 
		 <div class="row g-5">
            <div class="col-12 col-md-6 col-lg-6">
                <h4 class="mb-2 txt-ff d-none">Domestic Flight Deals </h4>
            <div class="row g-3">
            <div class="col-12">
               <div class="flight-status fs-indx bxd">
<a title="Flight From Las Vegas to San Diego" href="<?= base_url() ?>Result?depart=SAN&arrival=ORL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAS <i class="ti-exchange-vertical"></i> SAN<br>
							<span>Las Vegas to San Diego</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$49<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                  <a onclick="nav()" title="Flight From Las Vegas to Phoenix" href="<?= base_url() ?>Result?depart=LAS&arrival=PHX&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAS <i class="ti-exchange-vertical"></i> PHX<br>
							<span>Las Vegas to Phoenix</span>
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
                <a onclick="nav()" title="Flight From New York to Atlanta" href="<?= base_url() ?>Result?depart=NYC&arrival=ATL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							NYC <i class="ti-exchange-vertical"></i> ATL<br>
							<span>New York to Atlanta</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$39<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Denver to Phoenix" href="<?= base_url() ?>Result?depart=DEN&arrival=PHX&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							DEN <i class="ti-exchange-vertical"></i> PHX<br>
							<span>Denver to Phoenix</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$39<i class="ti-info-alt price-info"></i></strong>
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
<a title="Flight From Boston to Philadelphia" href="<?= base_url() ?>Result?depart=BOS&arrival=PHL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							BOS <i class="ti-exchange-vertical"></i> PHL<br>
							<span>Boston to Philadelphia</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$29<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                  <a onclick="nav()" title="Flight From Atlanta to Raleigh" href="<?= base_url() ?>Result?depart=ATL&arrival=RDU&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							ATL <i class="ti-exchange-vertical"></i> RDU<br>
							<span>Atlanta to Raleigh</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$34<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Salt Lake City to Las Vegas" href="<?= base_url() ?>Result?depart=SLC&arrival=LAX&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							SLC <i class="ti-exchange-vertical"></i> LAX<br>
							<span>Salt Lake City to Las Vegas</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$19<i class="ti-info-alt price-info"></i></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Las Vegas to Oakland" href="<?= base_url() ?>Result?depart=LAS&arrival=OAK&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							LAS <i class="ti-exchange-vertical"></i> OAK<br>
							<span>Las Vegas to Oakland</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$28<i class="ti-info-alt price-info"></i></strong>
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
            <div class="headh3 txt-ff">Explore the World with Low-Cost Flight Tickets!</div>
         </div>
         <h3>Discover Affordable Adventures</h3>
<p>Ready to embark on unforgettable journeys without breaking the bank? Look no further! Our travel agency is delighted to offer you an exclusive selection of low-cost flight tickets to destinations worldwide. Whether you dream of tropical beaches, cultural landmarks, or bustling cities, we've got you covered.</p>
<ol>
<li>
<p><strong>Unbelievable Savings:</strong> At our travel agency, we understand the importance of budget-friendly travel. That's why we've scoured the market to bring you the best deals on flight tickets. Explore breathtaking destinations without compromising on your wallet!</p>
</li>
<li>
<p><strong>Diverse Destinations:</strong> From exotic getaways to popular tourist hotspots, we have an extensive range of destinations to suit every traveler's taste. Immerse yourself in the vibrant streets of Bangkok, unwind on the pristine beaches of Bali, or indulge in the romantic charm of Paris - all at an affordable price.</p>
</li>
<li>
<p><strong>Easy Booking Process:</strong> Booking your dream getaway is a breeze with our user-friendly online platform. Simply enter your desired travel dates, and select your destination, and our smart search engine will present you with the lowest-cost flight options available. Say goodbye to endless browsing and hello to convenience!</p>
</li>
<li>
<p><strong>Flexible Travel Options:</strong> We believe that travel should be accessible to everyone. That's why we offer flexible travel options to accommodate your schedule and preferences. Whether you're planning a weekend escape or a long-term adventure, our low-cost flight tickets can be tailored to meet your needs.</p>
</li>
<li>
<p><strong>Expert Customer Support:</strong> Our team of experienced travel advisors is dedicated to providing exceptional customer service. Have a question or need assistance? Reach out to our friendly experts who are ready to assist you at every step of your journey, ensuring a smooth and hassle-free travel experience.</p>
</li>
<li>
<p><strong>Exclusive Deals and Promotions:</strong> Stay tuned for our exciting promotions and special offers. We regularly update our deals to bring you even greater savings on flights, making your dream vacation more affordable than ever before.</p>
</li>
</ol>
<p>Start your affordable adventure today! Book your low-cost flight tickets with our travel agency and unlock a world of incredible experiences without straining your budget. Don't let expensive flights hold you back from exploring the wonders of the world. Travel more, spend less!</p>
<p><strong>Cheapskytravel.com</strong> Your Gateway to Affordable Exploration.</p>
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
$('.airline-name').text('Top Flight Deals - Book Flights Under ');
$('.txt02').text('$49');

</script>