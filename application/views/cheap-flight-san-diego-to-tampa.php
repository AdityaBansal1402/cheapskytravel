<?php
define('FROM_LOCATION', 'SAN');
define('TO_LOCATION', 'TPA');
define('full_name_fl', 'San Diego');
define('full_name_tl', 'Tampa');

// Get the current year, month, and day
// $currentYear = date('Y');
// $currentMonth = date('m');
// $currentDay = date('d');

// // Calculate the middle day of the month
// $middleDay = ceil(cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear) / 2);

// if ($currentDay <= $middleDay) {
//     // Define the OfferDateRange for the first half of the month
//     define('OfferDateRange', date('d M', strtotime("$currentYear-$currentMonth-01")) . " - " . date('d M', strtotime("$currentYear-$currentMonth-$middleDay")));
// } else {
//     // Define the OfferDateRange for the second half of the month
//     define('OfferDateRange', date('d M', strtotime("$currentYear-$currentMonth-" . ($middleDay + 1))) . " - " . date('d M', strtotime("$currentYear-$currentMonth-" . cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear))));
// }

$currentDate = date('Y-m-d');

// Calculate the OfferDateRange for the next 7 to 14 days
$startDate = date('d M', strtotime($currentDate . ' +7 days'));
$endDate = date('d M', strtotime($currentDate . ' +14 days'));

// Define the OfferDateRange
define('OfferDateRange', $startDate . " - " . $endDate);

defined('DR_DATE') or define('DR_DATE', OFFER_DATE_RANGE);

defined('D_DATE') or define('D_DATE', "2023-06-15");
defined('R_DATE') or define('R_DATE', "2023-07-30");
?>

<script>
   document.title = "Book Cheap Flight Ticket on British Airways | Get Cheap Flight Deal British Airways - Cheapskytravel";
   document.getElementsByTagName('meta')["keywords"].content = "";
   document.getElementsByTagName('meta')["description"].content = "Find cheap flight at Cheapskytravel. Get the best fairs With US - call us @ <?= TFN ?>";   
</script>
<div id="header-wrapper" class="wrap-inpg py-4 py-md-5"
   style="background-image: url('frontend/images/destination.avif'); background-position: 60% center;background-no-repeat: no-repeat; background-size: cover;">
   <?php include 'includes/api-banner.php'; ?>

</div>
<div class="whysky mb-4 mb-md-5">
   <?php include 'includes/deals.php'; ?>
</div>

<div class="container mb-3 mb-md-4 ">
   <div class="flight-list">
      <div class="row g-3">
         <div class="col-md-8 col-12 fdl mt-5">
         <div class="headingtxt hdadjt text-center">
         <div class="headh3 txt-ff fw-bold">
         <?= full_name_fl ?> to
         <?= full_name_tl ?>
         </div>
      </div>
            <div class="row g-3">
               <div class="col-md-12 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From <?= full_name_fl ?> to <?= full_name_tl ?>"
                        href="<?= base_url() ?>Result?depart=<?= FROM_LOCATION ?>&arrival=<?= TO_LOCATION ?>&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-end no-gutters">
                           <div class="col-lg-9 col-9"> <!-- Modify width setting -->
                              <div class="dd-box">
                              <?= FROM_LOCATION ?> <i class="ti-exchange-vertical"></i> <?= TO_LOCATION ?><br>
                                 <span><?= full_name_fl ?> to <?= full_name_tl ?></span>
                                 <hr>
                                 <span>
                                    <?= OfferDateRange ?>
                                 </span>
                              </div>
                           </div>

                           <div class="col-lg-3 col-3 no-gutters p-2"> <!-- Modify width setting -->
                              <strong>$95<i class="ti-info-alt price-info"></i></strong>
                              <button class="bknw">Book Now</button>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-12 col-12">
                  <div class="flight-status fs-indx bxd">
                     <a title="Flight From <?= full_name_tl ?> to <?= full_name_fl ?>"
                        href="<?= base_url() ?>Result?depart=<?= TO_LOCATION ?>&arrival=<?= FROM_LOCATION ?>&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
                        <div class="row align-items-center no-gutters">
                           <div class="col-lg-9 col-9"> <!-- Modify width setting -->
                              <div class="dd-box">
                              <?= TO_LOCATION ?> <i class="ti-exchange-vertical"></i> <?= FROM_LOCATION ?><br>
                                 <span><?= full_name_tl ?> to <?= full_name_fl ?></span>
                                 <hr>
                                 <span>
                                    <?= OfferDateRange ?>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-3 col-3 p-3"> <!-- Modify width setting -->
                              <strong>$97<i class="ti-info-alt price-info"></i></strong>
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

<div class="about-spirit-airlines content-wrap mb-4 mb-md-4">
   <div class="container">
      <div class="headingtxt hdadjt text-center">
         <div class="headh3 txt-ff fw-bold">Book Flights from
         <?= full_name_fl ?> to
         <?= full_name_tl ?>
         </div>
      </div>

      <h3 class='fw-bold'>Get Cheap Flights from
         <?= full_name_fl ?> to
         <?= full_name_tl ?>
      </h3>
      Experience seamless air travel ticket booking with Cheapskytravel. Our Expert Travel agents ensure quick and
         convenient reservations to a multitude of global destinations. Benefit from transparent pricing and incredible
         offers to book your tickets today.

      <h3 class='fw-bold'>How to avail the best prices from
         <?= full_name_fl ?> to
        <?= full_name_tl ?>
      </h3>
      <ol>
         <li>While last-minute deals can occasionally be found, it's generally advisable to book your flight at least a
            few weeks in advance. Airlines often offer lower prices for those who plan ahead, ensuring you secure your
            preferred flight and seat.</li>
         <li>Cheapskytravel Experience Travel Experts can assist to provide personalised expert guidance.</li>
         <li> Bundle Deals that combine flights, accommodation, and even car rentals to help you enjoy significant cost
            savings</li>
      </ol>


      <div class="all-content">
         <h3 class='fw-bold'>Booking Method</h3>
         To book a low-cost flight, passengers must go to the Cheapskytravel website. Online flight booking saves money
            since it may be done without paying a service fee. Nobody needs to travel to the airport to reserve a seat.
            The most convenient option is to book your affordable flight tickets online, but you may
            also arrange your trip by phoning our reservation number. Call us at
            <?= TFN ?> to book your flight. To take advantage of the new low-cost airfare with
            all-inclusive facilities, please contact us.&nbsp;
         
         <h3 class='fw-bold'>What distinguishes Cheapskytravel as a rare star?</h3>
         Cheapskytravel may provide you with happiness and smiles at the lowest cost. There are several inexpensive
            airlines offers available, and you do not need to look hard for them. Booking in advance will help you save
            money on plane tickets, as last-minute purchases may incur expensive surcharges. If you are planning a
            family vacation, be sure to let the travel agent know in advance so they can provide you with better
            bargains that will give you a lovely trip with cost-saving values. Be with us and enjoy a hassle-free
            affordable flight journey.
         
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
               <a href="tel:<?= TFN ?>" class="tfn-url"
                  title="Call Us For Urgent Flights Booking, Changes/Cancellation Or Assistance">

                  <div class="row align-items-top align-items-center mb-0">
                     <div class="col-md-8 col-9 pl-lg-0">
                        <div class="tc-child-div-s">
                           <h3 class="afm-call-booking">Can't find the perfect fare? Let us help you.</h3>
                           <div class="clearfix"></div>
                           <span class="tcsv">Don't miss out on unbeatable deals.</span>
                           <span class="tcsv tcsv2">Call Now</span>
                           <div class="tc-tfn tfnp tfn-no"><i class="fa fa-phone" aria-hidden="true"></i>
                              <?= TFN ?>
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
   $('.airline-name').text('<?= full_name_fl ?> to <?= full_name_tl ?>');
   $('.txt02').text('Best Flights ');

   $(document).ready(function () {


      // Change the flight information dynamically
      $('#flight-info').text('Flights from <?= FROM_LOCATION ?> to <?= TO_LOCATION ?> with Cheapskytravel');


      // Change the value of the input field with ID "flight-to" to "LAX"
      $('#flight-from').val('<?= FROM_LOCATION ?>');

      // Change the value of the hidden input field with ID "flight-to2" to "LAX"
      $('#flight-from2').val('<?= FROM_LOCATION ?>');

      // Change the value of the input field with ID "flight-to" to "LAX"
      $('#flight-to').val('<?= TO_LOCATION ?>');

      // Change the value of the hidden input field with ID "flight-to2" to "LAX"
      $('#flight-to2').val('<?= TO_LOCATION ?>');
   });
</script>