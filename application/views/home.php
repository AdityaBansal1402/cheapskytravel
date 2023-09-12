<script>
document.title = "Fast and Cheap Fares at Cheapskytravel";
document.getElementsByTagName('meta')["keywords"].content = "Flight Reservation USA,";
document.getElementsByTagName('meta')["description"].content =
    "Get Our Low Cost Flight Tickets on Cheapskytravel. Book Now to Save! Experience Fast, Easy & Secure Flight Booking on Cheapskytravel. Book Now! For Booking Call @ <?= TFN ?>.";
</script>
<div id="header-wrapper" class="wrap-inpg py-4 py-md-5"
    style="background-image: url('frontend/images/bg.png'); background-position: bottom; background-size: cover;">
    <?php include 'includes/api-banner.php'; ?>
</div>
<div class="whysky mb-4">
    <?php include 'includes/deals.php'; ?>
</div>

<div class="container mb-lg-5 mb-4">
    <div class="flight-list">
        <div class="headingtxt mb-4 col-lg-8">
            <h3 class="headh3 txt-ff ">Discover the world's most breathtaking destinations and create unforgettable
                memories.</h3>
        </div>
        <div class="row g-5">
            <div class="col-12 col-md-6 col-lg-6">
                <h4 class="mb-2 txt-ff">Domestic Flight Deals </h4>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="flight-status fs-indx bxd">
                            <a title="Flight From New York to Orlando"
                                href="<?=   base_url() ?>Result?depart=NYC&arrival=ORL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a onclick="nav()" title="Flight From Denver to Las Vegas"
                                href="<?= base_url() ?>Result?depart=DFW&arrival=LAS&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a onclick="nav()" title="Flight From Los Angeles to Kahului"
                                href="<?= base_url() ?>Result?depart=LAX&arrival=OGG&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a onclick="nav()" title="Flight From Los Angeles to Honolulu"
                                href="<?= base_url() ?>Result?depart=LAX&arrival=HNL&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a title="Flight From Boston to London"
                                href="<?= base_url() ?>Result?depart=BOS&arrival=LHR&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a onclick="nav()" title="Flight From Boston to Paris"
                                href="<?= base_url() ?>Result?depart=BOS&arrival=CDG&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a onclick="nav()" title="Flight From New York to Bogota"
                                href="<?= base_url() ?>Result?depart=JFK&arrival=BOG&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
                            <a onclick="nav()" title="Flight From Los Angeles to Sydney"
                                href="<?= base_url() ?>Result?depart=LAX&arrival=SYD&trip=round&page=1&departOn%5B%5D=<?= D_DATE ?>&returnOn=<?= R_DATE ?>&adult=1&child=0&infant=0&cabin=ECONOMY&airline=">
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
    </div>
</div>

<div class="latest-deals my-lg-5 my-4">
    <div class="offer-include">
        <div class="container">
            <ul>
                <li>
                    <figure><img class="dimg1" src="<?= base_url() ?>frontend/images/01_offer.jpg"
                            alt="last minute flight"></figure>
                    <span class="col-x d1" id="d1">
                        <span>Book a Cheap Flight Easy &amp; fast</span>
                        <h2>Exclusive Flight Offers</h2>
                    </span>
                </li>
                <li>
                    <figure><img class="dimg2" src="<?= base_url() ?>frontend/images/02_holiday-packages.jpg"
                            alt="family tour packages"></figure>
                    <span class="col-x d2">
                        <span>Book now and enjoy great savings</span>
                        <h2>Family Tour Packages</h2>
                    </span>
                </li>
                <li>
                    <figure><img class="dimg3" src="<?= base_url() ?>frontend/images/03_travel-expert.jpg"
                            alt="Travel Expert 24/7"></figure>
                    <span class="col-x d3">
                        <span>For urgent booking call us &amp; Save Big!</span>
                        <h2><a href="tel:<?= TFN ?>"><i class="fa fa-phone ffpX" aria-hidden="true"></i> <?= TFN ?></a>
                        </h2>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="destination-gallery my-4">
    <div class="container">
        <div class="headingtxt mb-3">
            <h3 class="headh3 txt-ff">Grab The Cheapest Airfares For Top Destinations</h3>
        </div>
        <div class="row g-2">
            <div class="col-md-4 col-12">
                <a href="#" class="dga position-relative">
                    <img src="frontend/images/new-york.jpg" class="img-fluid" alt="New York">
                    <h5 class="destination-name">New York</h5>
                </a>

            </div>
            <div class="col-md-8 col-12">
                <div class="row g-2">
                    <div class="col-md-4 col-12">
                        <a href="#" class="dga position-relative">
                            <img src="frontend/images/san-francisco.jpg" class="img-fluid" alt="San Francisco">
                            <h5 class="destination-name">San Francisco</h5>
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


        </div>

    </div>
</div>



<div class="bottom-txt mt-5 mb-5 content-wrap">
    <div class="container">
        <p>With us, you can purchase the most affordable airline ticket. Cheapskytravel provides inexpensive flights to
            both tourist and business destinations. Look no further if you're searching for inexpensive round-trip or
            one-way flights. Right here on Cheapskytravel, discover the top travel offers. </p>
        <p>Booking for your desired destination tickets has never been simpler. Search and pick the most suitable flight
            offerings presented to you by our searches. If you have any further queries with your booking, our customer
            support team is available 24x7 to asssit you to make a booking asyou’re your preferences.</p>

        <h3>We ensure simplicity and convenience. </h3>
        <p>Look forward to destinations you may visit right now to find the best offers among thousands of domestic and
            international flights.</p>
        <div class="all-content">
            <p>Apart from the convenience, choice, flexibility, and price comparison, Cheapskytravel offers plain-sailing
                services such as Package deals, Last-minute deals, and Customized Recommendations. We also prioritize
                traveller safety and security, offering secure payment options, protecting personal information, and
                adhering to industry regulations and standard, helping travellers make informed decisions and ensuring
                their peace of mind.</p>
            <h3>Boarding a connecting flight </h3>
            <p>Make travel arrangements so that your departure and arrival dates are flexible. This will enable you to
                reserve a connecting flight rather than a straight journey. Although you may need to spend a while in
                the airport, connecting flight costs are frequently less expensive.</p>
            <h3>Make advance plans! </h3>
            <p>The best strategy for finding low-cost flights is to plan and reserve your vacation in advance. The
                optimal time to purchase airline tickets, in the opinion of many travel experts, is 60 days prior to
                your scheduled departure. </p>
            <h3>Receive the Special Experience </h3>
            <p>We strive to make your travels exceptional. We are committed to achieving your travel goals so you can
                consistently become richer day by day. We provide you with exclusive discounts and offers so you may
                save your hard-earned cash. Contact us right away for additional details!</p>

            <p>As a seasoned online travel agency, we understand that airline travelers have different requests and
                preferences while booking their flights. The common requests made by airline travelers are Seat
                Selection, Special Meals,Assistnce for Passengers with Disabilities or Medical Condtions and many more.
                Air Fare Moss strives to accommodate the various requests by airline travelers to ensure a seamless and
                personalized travel experience. It's important for travelers to familiarize themselves with the
                airline's policies, procedures, and requirements, and communicate their requests clearly and in advance
                to avoid any inconvenience or disappointment during their flights. Our customer service team is always
                ready to assist travelers with their requests and provide necessary information for the ease of the
                travel.</p>
        </div>
        <a class="readmore stmpbtn" href="#">Read more...</a>
    </div>
</div>
<div class="container text-right btnrm d-none">
    <button onclick="myFunction()" id="myBtn" class="mb-5 ml-auto">Read more</button>
</div>
<!-- <div class="modal fade pop-form" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                        <input type="text" placeholder="Your Name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your Mail Id" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your Phone No:" class="form-control" />
                    </div>
                    <div class="form-group">
                        <select class=" form-control">
                            <option>Select Service Type</option>
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
</div> -->
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

<script>
$('.airline-name').text('Cheapskytravel');
</script>

<style>
    .tfn-bottom-section{display:block !important;}
.fdl {
    display: none;
}

.idxpg .container {
    width: 100%;
    padding: 0;
}

.offersD.ofd2 {
    width: 140px;
    padding: 8px;
}

.offersD.ofd2 span:nth-child(2) {
    font-size: 35px;
}

.text-left.ofd2n2 a {
    font-size: 26px !important;
}

.pb-0.pt-1.df.d-none.d-lg-block {
    display: none !important;
}

.lastmd.my-5 {
    margin: 0 !important;
}

.last-min-deal span b {
    border: 1px dashed #ffe082;
    padding: 0 6px;
    border-radius: 8px;
}

.container.mb-5.mt-5 {
    margin-top: 0px !important;
}

.offersD.pb-0.pt-1.df {
    padding: 0;
}
</style>