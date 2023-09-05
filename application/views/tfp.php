<script>
   document.title = "Flight Tickets Booking, Online Tickets at Low Airfares - Skyhyglobal";
   document.getElementsByTagName('meta')["keywords"].content = "Airline Booking in USA, Online Tickets Booking USA, Airline Ticket Booking Services, Flight Reservation USA, Aeroplane Ticket Booking, Flight Ticket Rates in USA, Flight Ticket Online, Airline Ticket Prices in USA, Airfare Prices in USA, Air Flight Tickets";
   document.getElementsByTagName('meta')["description"].content = "Get Our Low Cost Flight Tickets on Skyhyglobal. Book Now to Save! Experience Fast, Easy & Secure Flight Booking on Skyhyglobal. Book Now! For Booking Call @ <?= TFN ?>.";
</script>
<div id="header-wrapper" class="wrap-inpg py-4 py-md-5"  style="background-image: url('frontend/images/bg.jpg'); background-position: bottom;background-no-repeat: no-repeat; background-size: cover;">
 <?php include 'includes/api-banner.php'; ?>  
</div>
<div class="whysky mb-4">
 <?php include 'includes/deals.php'; ?>
</div> 

<div class="latest-deals my-lg-5 my-4">
<div class="offer-include">
 <div class="container">
<ul>
<li>
<figure><img class="dimg1" src="<?= base_url() ?>frontend/images/01_offer.jpg" alt="last minute flight"></figure>
<span class="col-x d1" id="d1">
 <span>Book a Cheap Flight Easy &amp; fast</span>
 <h2>Exclusive Flight Offers</h2>
</span>
</li>
<li>
<figure><img class="dimg2" src="<?= base_url() ?>frontend/images/02_holiday-packages.jpg" alt="family tour packages"></figure>
<span class="col-x d2">
 <span>Book now and enjoy great savings</span>
   <h2>Family Tour Packages</h2>
</span>
</li>
<li>
<figure><img class="dimg3" src="<?= base_url() ?>frontend/images/03_travel-expert.jpg" alt="Travel Expert 24/7"></figure>
<span class="col-x d3">
 <span>For urgent  booking call us &amp; Save Big!</span>
 <h2><a href="tel:<?= TFN ?>"><i class="fa fa-phone ffpX" aria-hidden="true"></i> <?= TFN ?></a></h2>
</span>
</li>
</ul>
 </div>
</div>
</div>
 

 <div class="container mb-lg-5 mb-4">
    <div class="flight-list">
        <div class="headingtxt mb-3">
            <h3 class="headh3 txt-ff" data-aos="zoom-out-up">Best Deals For Top Destinations <small>Get Best Price <a href="tel:<?= TFN ?>" style="color:#070dff;
    text-decoration: underline !important;">Deals</a></small></h3>
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-12">
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
                           <strong>$54<sup>*</sup></strong>
                           <button class="bknw">Book Now</button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12">
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
                           <strong>$40<sup>*</sup></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12">
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
                           <strong>$199<sup>*</sup></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12">
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
                           <strong>$249<sup>*</sup></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12">
               <div class="flight-status fs-indx bxd">
                <a onclick="nav()" title="Flight From Oakland to Honolulu" href="<?= base_url() ?>Result?depart=OAK&arrival=HNL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <div class="row align-items-center no-gutters">
                        <div class="col-lg-8 col-8">
                          <div class="dd-box">
							OAK <i class="ti-exchange-vertical"></i> HNL<br>
							<span>Oakland to Honolulu</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-4">
                           <strong>$260<sup>*</sup></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12">
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
                           <strong>$98<sup>*</sup></strong>
                           <button class="bknw">Book Now </button>   
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
    </div>
</div>
 
 
<div class="destination-gallery my-4">
 <div class="container">
 <div class="headingtxt mb-3">
            <h3 class="headh3 txt-ff">Grab The Cheapest Airfares  For Top Destinations</h3>
        </div>
 <div class="row g-2">
 <div class="col-md-8 col-12">
 <div class="row g-2">
  <div class="col-md-4 col-12">
 <a href="#" class="dga position-relative">
  <img src="frontend/images/New-York-City.jpg" class="img-fluid" alt="New York">
  <h5 class="destination-name">New York</h5>
 </a>
  </div>
<div class="col-md-4 col-12">
<a href="#" class="dga position-relative">
<img src="frontend/images/Chicago.jpg" class="img-fluid" alt="Chicago">
 <h5 class="destination-name">Chicago</h5>
 </a>
</div>
<div class="col-md-4 col-12">
<a href="#" class="dga position-relative">
<img src="frontend/images/los-angeles.jpg" class="img-fluid" alt="Los Angeles">
 <h5 class="destination-name">Los Angeles</h5>
 </a>
  </div>

<div class=" col-12">
<a href="#" class="dga position-relative">
<img src="frontend/images/grand-canyon.jpg" class="img-fluid" alt="Grand Canyon">
 <h5 class="destination-name">Grand Canyon</h5>
 </a>
</div>
 </div>
 </div>

 <div class="col-md-4 col-12">
 <a href="#" class="dga position-relative">
<img src="frontend/images/California.jpg" class="img-fluid" alt="San Francisco">
 <h5 class="destination-name">San Francisco</h5>
 </a>

 </div>
</div>
 
 </div>
 </div>
 
 <div class="container mb-lg-5 mb-4 d-none">
    <div class="flight-list">
        <div class="headingtxt mb-3">
            <h3 class="headh3 txt-ff">Grab The Cheapest Airfares  For Top Destinations <small>Book Now <a href="tel:+1 229-935-3336" style="color:#070dff;
    text-decoration: underline !important;">Deals</a></small></h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 form-group fdl">
               <div class="flight-status fs-indx bxd p-0">
<a title="Flight From New York to Orlando" href="<?= base_url() ?>Result?depart=NYC&arrival=MCO&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=" >
     <img src="<?= base_url() ?>frontend/imgl/oralando01.png" class="img-fluid" alt="New York/Newark to Orlando">
                     <div class="row align-items-center no-gutters">
                       <!-- <div class="col-lg-2 col-2">
						<img src="https://www.Skyhyglobal.com/Images/AirLogos/nk.gif" alt="Spirit Airlines">
                        </div>-->
                        <div class="col-12">
                          <div class="dd-box p-2">
							NYC <i class="ti-exchange-vertical"></i> MCO<br>
							<span>Flights From New York to Orlando</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                       
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12 form-group fdl">
               <div class="flight-status fs-indx bxd p-0">
                  <a onclick="nav()" title="Flights From Dallas to Las Vegas" href="<?= base_url() ?>Result?depart=DFW&arrival=LAS&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                  <img src="<?= base_url() ?>frontend/imgl/lasvegas02.png" class="img-responsive" alt="Dallas to Las Vegas">
                     <div class="row align-items-center no-gutters">
                       <!-- <div class="col-lg-2 col-2">
						<img src="https://www.Skyhyglobal.com/Images/AirLogos/F9.gif" alt="Frontier Airlines">
                        </div>-->
                        <div class="col-12">
                          <div class="dd-box p-2">
							DFW <i class="ti-exchange-vertical"></i> LAS<br>
							<span>Flights From Dallas to Las Vegas</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                       
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12 form-group fdl">
               <div class="flight-status fs-indx bxd p-0">
                <a onclick="nav()" title="Flights From San Jaoun to Orlando" href="<?= base_url() ?>Result?depart=SJU&arrival=MCO&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                       <img src="<?= base_url() ?>frontend/imgl/oralando03.png" class="img-responsive" alt="San Jaoun to Orlando">
                     <div class="row align-items-center no-gutters">
                        <div class="col-12">
                          <div class="dd-box p-2">
							SJU <i class="ti-exchange-vertical"></i> MCO<br>
							<span>Flights From San Jaoun to Orlando</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                        
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12 form-group mb-lg-0 fdl">
               <div class="flight-status fs-indx bxd p-0">
                <a onclick="nav()" title="Flights New York to Houston" href="<?= base_url() ?>Result?depart=NYC&arrival=IAH&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                     <img src="<?= base_url() ?>frontend/imgl/houston.png" class="img-fluid" alt="New York/Newark to Houston">
                     <div class="row align-items-center no-gutters">
                        <div class="col-12">
                          <div class="dd-box p-2">
							LAX <i class="ti-exchange-vertical"></i> HNL<br>
							<span>Flights New York to Houston</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                       
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12 form-group mb-lg-0 fdl">
               <div class="flight-status fs-indx bxd p-0">
                <a onclick="nav()" title="Flights From New York to Atlanta" href="<?= base_url() ?>Result?depart=NYC&arrival=ATL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                       <img src="<?= base_url() ?>frontend/imgl/atlanta05.png" class="img-fluid" alt="New York/Newark to Atlanta">
                     <div class="row align-items-center no-gutters">
                        <div class="col-12">
                          <div class="dd-box p-2">
							NYC <i class="ti-exchange-vertical"></i> ATL<br>
							<span>Flights From New York to Atlanta</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                       
                     </div>
                  </a>
               </div>
            </div>
           <div class="col-lg-4 col-md-6 col-12 form-group mb-0 fdl">
               <div class="flight-status fs-indx bxd p-0">
                  <a onclick="nav()" title="Flights From Las Vegas to Los Angeles" href="<?= base_url() ?>Result?depart=LAX&arrival=LAS&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                         <img src="<?= base_url() ?>frontend/imgl/lodsangles.png" class="img-fluid" alt="Las Vegas to Los Angeles">
                     <div class="row align-items-center no-gutters">
                        <div class="col-12">
                          <div class="dd-box p-2">
							LAX <i class="ti-exchange-vertical"></i> LAS<br>
							<span>Flights From Las Vegas to Los Angeles</span>
							<hr>
							<span><?= DR_DATE ?></span>
                          </div>
                        </div>
                       
                     </div>
                  </a>
               </div>
            </div>
              <div class="col-12 btndldmr text-right my-2"><a href="#" id="loadMore">Load More</a></div>
         </div>
    </div>
</div>

   <div class="vh100 bgc cms-sl-sec04 pd-md w-100 jarallax d-none" style="background-image: url('frontend/imgl/bg1.png') !important;">
      <div class="vam">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="web-service">
                  <div class="hdadjt pb-5">
                     <h3 class="headh3 text-center" data-aos="fade-down" style="color:#fff !important">Why Book with Us.<span class="thc"></span></h3>
                     <span class="lead text-center center-block" data-aos="fade-down">We Are Professionals with Experience and Commitment</span>
                     </div>
                     <ul class="cms-sl">
                        <li class="bd-r bdr-b" data-aos="flip-up">
                           <a href="#">
                           <img src="<?= base_url() ?>frontend/imgl/cc.png" />
                           Big Savings On Top Airlines Tickets
                           </a>
                        </li>
                        <li class="bdr-b" data-aos="flip-up">
                           <a href="#">
                           <img src="<?= base_url() ?>frontend/imgl/price-tag.png" />
                           Get Unpublished <br>Airfares
                           </a>
                        </li>
                        <li class="bd-r" data-aos="flip-up">
                           <a href="#">
                           <img src="<?= base_url() ?>frontend/imgl/hand1.png" />
                           Free! Flight <br>Cancellation
                           </a>
                        </li>
                        <li class="" data-aos="flip-up">
                           <a href="#">
                           <img src="<?= base_url() ?>frontend/imgl/24-hours-support.png" />
                           24/7 Booking <br>Assistance
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-6">
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bottom-txt mt-5 mb-5">
      <div class="container">
         <p>With us, you can purchase the most affordable airline tickets. Year-round, SkyHyGlobal provides inexpensive flights to both tourist and business destinations. You may always leave on an enjoyable holiday without bothering about your finances thanks to our affordable tickets. Look no further if you're searching for inexpensive round-trip or one-way flights. Right here on SkyHyGlobal, discover the top travel offers. We have a wide range of travel offers to all of your preferred locations.</p>
<p>Online purchasing of inexpensive airline tickets has never been simpler. Simply go on to SkyHyGlobal.com to examine the selection of available travel bargains. Pick the option that works best for your book and budget. If you have any problems with your booking, our customer support team is available around the clock and will be pleased to assist you. Don't forget to utilize our discount coupons when making your reservation to save even more money and take advantage of tempting airfare savings.</p>

         <h3>We ensure simplicity and convenience</h3>
        <p>Look forward to destinations you may visit right now to find the best offers among thousands of<strong> domestic and international flights</strong>.</p>
<p>Our services are completely free of any additional fees or levies. You'll always be aware of where your money is going with us. As a result, you can unwind before your journey even begins.</p>
<p>Furthermore, we discover that there are many options for travel. You don't fly across the globe every day to marvel at stunning sights and take in a romantic sunrise. But it's what we do every day. Let's just say that we are aware of what travelers want. We give you the greatest travel products, outline their advantages and disadvantages, and allow you to decide which is ideal for you and your family. Many travel agencies make the claim to be the finest, but we believe that very few can equal our experts in providing accurate, first-hand knowledge.</p>
<p>We combine first-hand experience with fantastic deals, we take care of minor to small statistics, and we construct a vacation that is as unique as you are. As all of your needs are met under one roof at SkyHyGlobal, you won't need to worry about arranging flight tickets any longer.</p>
<p>Follow these easy suggestions when purchasing your airline tickets for your upcoming vacation. You can significantly reduce the cost of your flight with these suggestions.</p>
<h3>Most affordable times to book flights</h3>
<p>One great strategy for reducing airfares is to book your flight at the right time.</p>
<h3>Boarding a connecting flight</h3>
<p>Make travel arrangements so that your departure and arrival dates are flexible. This will enable you to reserve a connecting flight rather than a straight journey. Although you may need to spend a while in the airport, connecting flight costs are frequently less expensive.</p>
<h3>Make advance plans</h3>
<p>The best strategy for finding low-cost flights is to plan and reserve your vacation in advance. The optimal time to purchase airline tickets, in the opinion of many travel experts, is 60 days prior to your scheduled departure.</p>
<h3>Receive the Special Experience</h3>
<p>We strive to make your travels exceptional. We are committed to achieving your travel goals so you can consistently become richer day by day. We provide you with exclusive discounts and offers so you may save your hard-earned cash. Contact us right away for additional details!</p>

      </div>
   </div>
   <div class="container text-right btnrm d-none">
      <button onclick="myFunction()" id="myBtn" class="mb-5 ml-auto">Read more</button>
   </div>
   <div class="modal fade pop-form" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Send Query</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="">
                  <div class="form-group">
                     <input type="text" placeholder="Your Name" class="form-control"/>
                  </div>
                  <div class="form-group">
                     <input type="text" placeholder="Your Mail Id" class="form-control"/>
                  </div>
                  <div class="form-group">
                     <input type="text" placeholder="Your Phone No:" class="form-control"/>
                  </div>
                  <div class="form-group">
                     <select class=" form-control" >
                        <option >Select Service Type</option>
                        <option value="1">Flight</option>
                     </select>
                  </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div>
   
<script>
$('.airline-name').text('Top Airlines');
</script>

<style>
.fdl{display:none;}
.idxpg .container {width: 100%;padding: 0;}
.offersD.ofd2 {width:140px;padding: 8px;}
.offersD.ofd2 span:nth-child(2) {font-size: 35px;}
.text-left.ofd2n2 a {font-size: 26px !important;}
.pb-0.pt-1.df.d-none.d-lg-block {display: none !important;}
.lastmd.my-5 {margin: 0 !important;}
.last-min-deal span b {border: 1px dashed #ffe082;padding: 0 6px;border-radius: 8px;}
.container.mb-5.mt-5 {margin-top: 0px !important;}
.offersD.pb-0.pt-1.df {padding: 0;}

</style>