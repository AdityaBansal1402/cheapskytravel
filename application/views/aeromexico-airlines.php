<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('Airline', 'AirMexico Airlines');
define('FROM_LOCATION', 'Mexico City');
define('FROM_LOCATION_CODE', 'MEX');


// Get the current year, month, and day
$currentYear = date('Y');
$currentMonth = date('m');
$currentDay = date('d');

// Calculate the middle day of the month
$middleDay = ceil(cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear) / 2);

if ($currentDay <= $middleDay) {
    // Define the OfferDateRange for the first half of the month
    define('OfferDateRange', date('d M', strtotime("$currentYear-$currentMonth-01")) . " - " . date('d M', strtotime("$currentYear-$currentMonth-$middleDay")));
} else {
    // Define the OfferDateRange for the second half of the month
    define('OfferDateRange', date('d M', strtotime("$currentYear-$currentMonth-" . ($middleDay + 1))) . " - " . date('d M', strtotime("$currentYear-$currentMonth-" . cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear))));
}

?>
<script>
   document.title = "Book Cheap Flight Ticket on <?= Airline ?> | Get Cheap Flight Deal <?= Airline ?> - Cheapskytravel";
   document.getElementsByTagName('meta')["keywords"].content = "<?= Airline ?>, <?= Airline ?> , <?= Airline ?> Flights, <?= Airline ?> Reservations, <?= Airline ?> Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking, <?= Airline ?> Flight Deals, <?= Airline ?> Flight Tickets, <?= Airline ?> Flight Reservations, <?= Airline ?> Flight Booking"; ";       
   document.getElementsByTagName('meta')["description"].content = "Find cheap flight at Cheapskytravel. Get the best fairs With US - call us @ <a href='tel:<?= TFN ?>";'><?= TFN ?></a>    
</script>
<div id="header-wrapper" class="wrap-inpg py-4 py-md-5"
   style="background-image: url('frontend/images/aeromexico.jpg'); background-postion: 5px; background-size: cover;">
   <?php include 'includes/api-banner.php'; ?>
</div>
<div class="whysky mb-4 mb-md-5">
   <?php include 'includes/deals.php'; ?>
</div>
<div class="container mb-3 mb-md-4">
   <div class="flight-list">
      <div class="headingtxt mb-3 text-center">
         <h3 class="headh3 txt-ff"><span>
               <?= Airline ?>
            </span> Flight Deals <small>(Round Trip)</small> </h3>
         <span class="mxw lead text-center center-block txt-ff" data-aos="fade-down"></span>
      </div>
      <div class="row g-3">
         <div class="col-md-8 col-12 fdl">
            <div class="row g-3">
               <!-- Mexico City to Tuxtla Gutierrez -->
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Mexico City to Tuxtla Gutierrez"
                        href="<?= base_url() ?>Result?depart=MEX&arrival=TGZ&trip=round&page=1&departOn%5B%5D=18/09/2023&returnOn=03/10/2023&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MEX <i class="ti-exchange-vertical"></i> TGZ<br>
                                 <span>Mexico City to Tuxtla Gutierrez</span>
                                 <hr>
                                 <span>
                                    18/09/2023 - 03/10/2023
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$100<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- Mexico City to Tijuana -->
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Mexico City to Tijuana"
                        href="<?= base_url() ?>Result?depart=MEX&arrival=TIJ&trip=round&page=1&departOn%5B%5D=20/10/2023&returnOn=23/10/2023&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MEX <i class="ti-exchange-vertical"></i> TIJ<br>
                                 <span>Mexico City to Tijuana</span>
                                 <hr>
                                 <span>
                                    20/10/2023 - 23/10/2023
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$101<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- Mexico City to Puerto Escondido -->
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Mexico City to Puerto Escondido"
                        href="<?= base_url() ?>Result?depart=MEX&arrival=PXM&trip=round&page=1&departOn%5B%5D=24/10/2023&returnOn=27/10/2023&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MEX <i class="ti-exchange-vertical"></i> PXM<br>
                                 <span>Mexico City to Puerto Escondido</span>
                                 <hr>
                                 <span>
                                    24/10/2023 - 27/10/2023
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$125<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- Mexico City to Torreon -->
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Mexico City to Torreon"
                        href="<?= base_url() ?>Result?depart=MEX&arrival=TRC&trip=round&page=1&departOn%5B%5D=20/10/2023&returnOn=23/10/2023&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MEX <i class="ti-exchange-vertical"></i> TRC<br>
                                 <span>Mexico City to Torreon</span>
                                 <hr>
                                 <span>
                                    20/10/2023 - 23/10/2023
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$125<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Mexico City to Cancun"
                        href="<?= base_url() ?>Result?depart=MEX&arrival=CUN&trip=round&page=1&departOn%5B%5D=28/08/2023&returnOn=30/08/2023&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MEX <i class="ti-exchange-vertical"></i> CUN<br>
                                 <span>Mexico City to Cancun</span>
                                 <hr>
                                 <span>
                                    28/08/2023 - 30/08/2023
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$167<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- Mexico City to Guadalajara -->
               <div class="col-md-6 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From Mexico City to Guadalajara"
                        href="<?= base_url() ?>Result?depart=MEX&arrival=GDL&trip=round&page=1&departOn%5B%5D=30/08/2023&returnOn=02/09/2023&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-8 col-8">
                              <div class="dd-box">
                                 MEX <i class="ti-exchange-vertical"></i> GDL<br>
                                 <span>Mexico City to Guadalajara</span>
                                 <hr>
                                 <span>
                                    30/08/2023 - 02/09/2023
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-4 col-4">
                              <strong>$146<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <?php include 'sm-inc.php'; ?>
         </div>
      </div>
   </div>
</div>
<div class="about-spirit-airlines content-wrap my-5">
   <div class="container">
      <div class="headingtxt hdadjt">
         <div class="headh3 txt-ff">Aeromexico Airlines </div>
      </div>
      <p>Experience exceptional offers with Aeromexico, catering to a diverse
         range of preferences. At Cheapskytravel, we extend an exclusive key to a realm of
         confidential,phone-only deals. Our commitment ensures your desired outcomes while
         staying within your budget. Join us, a prominent travel company in the United States,
         and unlock unparalleled deals for both Aeromexico's international and domestic
         flights, granting you access to economical flight options.</p>

      <h3>About&nbsp;</h3>
      <p>Established as Mexico's flag carrier in 1934, Aeromexico has since expanded its
         flight network to encompass over 87 destinations across four continents.
         The strategic alliances forged with SkyTeam further empower the airline
         to offer cost-effective flight options to diverse global destinations.
      </p>
      <p>The airline uses Monterrey International Airport as its operational base and is offering services in two
         cabins; Main Cabin and Premier Class Cabin. It allows the opportunity for passengers to choose their service
         according to their preferences.</p>
      <p>In case you wish to secure a preferred seat at <strong>affordable bargains</strong>, the Cheapskytravel
         reservation team is the soundest explanation for you. Reach us at <strong>
            <a href='tel:<?= TFN ?>'><?= TFN ?></a> 
         </strong> and gain
         <strong>cheap flight tickets</strong> quite effortlessly.
      </p>
      <h3>Destinations</h3>
      <p>Aeromexico serves its <strong>cheap flight journeys</strong> to over 87 locations including multiple cities
         in South America, Asia, North America, Europe, Central America, and multiple others. On some occasions, the
         airline promotes many seasonal flights to various destinations. You can have a gaze at them by contacting
         the Cheapskytravel team. Reach us at
         <a href='tel:<?= TFN ?>'><?= TFN ?></a>  and enjoy <strong>affordable flight deals</strong> to your
         requested destinations. Get <strong>cheap flight tickets</strong> with minimal compromises with us. We will
         provide you with the opportunity to seize incredible undisclosed deals which help you enjoy the breeze of
         Mexico without tilting Pico de Orizaba.
      </p>
      <div class="all-content">
         <h3>Baggage Allowance</h3>
         <p><strong>Carry-on:</strong> On multiple routes, passengers are permitted to carry up to 10 kg of luggage
            as their cabin luggage. Passengers traveling within domestic regions may carry up to 15 kg of cabin
            luggage depending on their ticket holdings. To carry cabin luggage, passengers will need to maintain the
            total dimension of allowed bags within 21.5 X 15.7 X 10 inches.</p>
         <p><strong>Checked:</strong> On most routes, the airline will allow you to carry up to two checked baggage
            with Main Cabin tickets. The weight of each checked bag needs to be within 25 kg. Passengers holding a
            Premier class ticket are permitted to check up to three pieces of baggage. Aeromexico may not allow
            passengers to check any bags if the checked baggage does not satisfy the requirements listed. Travelers
            may be required to pay baggage fees based on the fare class and membership level. Speak with the team for
            better deals, you can reach the team at <strong>
               <a href='tel:<?= TFN ?>.'><?= TFN ?></a> 
            </strong></p>
         <h3>Check-in Process</h3>
         <p>The check-in facility is available on both platforms:</p>
         <p><strong>Online</strong>: <strong>Web and Mobile App</strong></p>
         <p><strong>Offline</strong>: <strong>Airport check-in desk and Self-check-in center</strong></p>
         <p>The <strong>Aeromexico international flight check-in window </strong>opens at least three hours prior to
            departure. On domestic routes, the passenger makes changes at the same hour of departure, however, the
            team won&rsquo;t allow you to check in within 30 minutes prior to the scheduled departure.</p>
      </div>
      <a class="readmore stmpbtn" href="#">Read more...</a>
   </div>
</div>

<div class="modal fade best-dealx" id="exampleModalCenter" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
         <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
         <div class="modal-body">
            <div class="pdl text-center">Book now and save up to $20!</div>
            <div class="afm-offer-card01 p-3">
               <a href="tel:<a href='tel:<?= TFN ?>"'><?= TFN ?></a>  class="tfn-url"
                  title="Call Us For Urgent Flights Booking, Changes/Cancellation Or Assistance">

                  <div class="row align-items-top align-items-center mb-0">
                     <div class="col-md-8 col-9 pl-lg-0">
                        <div class="tc-child-div-s">
                           <h3 class="afm-call-booking">Can't find the perfect fare? Let us help you.</h3>
                           <div class="clearfix"></div>
                           <span class="tcsv">Don't miss out on unbeatable deals.</span>
                           <span class="tcsv tcsv2">Call Now</span>
                           <div class="tc-tfn tfnp tfn-no"><i class="fa fa-phone" aria-hidden="true"></i>
                              <a href='tel:<?= TFN ?>'><?= TFN ?></a> 
                           </div>
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
   .tfn-bottom-section {
      display: block !important;
   }

   body {
      margin-bottom: 45.5px
   }

   a {
      color: #343a40;
   }

   .modal {
      top: 0 !important;
   }

   .rmpc {
      background: #bd98ff;
      padding: 15px;
   }

   .txt01 {
      display: none;
   }
</style>



<script>
   $('.airline-name').text('<?= Airline ?>');
   $('.txt02').text('Flight Deals');

</script>