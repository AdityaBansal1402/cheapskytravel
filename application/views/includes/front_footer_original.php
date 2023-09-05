<div class="footer-set">
    <div class="container">
       
        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li><a href="<?= base_url() ?>about-us">About Us</a></li>
                <li><a href="<?= base_url() ?>contact-us">Contact Us</a></li>
                <li class="d-noneX"><a href="sitemap.xml">Sitemap </a></li>
                
            </ul>
        </div>
        
        <div class="quick-links">
            <h3>Our Services</h3>
            <ul>
                <li><a href="<?= base_url() ?>first-class-flight-reservations">First Class Flight Deal</a></li>
                <li><a href="<?= base_url() ?>group-travel-flight-reservation">Group Travel Flight Deal</a></li>
                <li><a href="<?= base_url() ?>business-class-flight-reservations">Business Class Flight Deal</a></li>
                
            </ul>
        </div>
<div class="quick-links">
            <h3>Legal</h3>
            <ul>
               <li><a href="<?= base_url() ?>privacy-policy">Privacy Policy</a></li>
                <li><a href="<?= base_url() ?>terms-conditions">Terms & Conditions </a></li>
                <li><a href="<?= base_url() ?>refund-policy">Refund Policy </a></li>
                <li class="d-none"><a href="<?= base_url() ?>landingpage">Landing Page </a></li>
             
                
            </ul>
        </div>


        <div class="right-contact">

            <span class="icon ic-phone">
                 <i class="fa fa-phone" aria-hidden="true"></i>
                <p>For best deal call</p>
                <a href="tel:<?= TFN ?>"> <?= TFN ?></a> Toll Free
            </span>
            <span class="icon ic-phone">
            <i class="fa fa-envelope" aria-hidden="true"></i>
                <p>For support</p>
                <a href="mailto:<?= EMAIL_SER ?>"> <?= EMAIL_SER ?></a> 
            </span>
        
        </div>



    </div>
    <div class="footer-notify">
    <div class="container">
    <h3>Discount and Savings Claim</h3>
    <p>For best deal need support we provide varied rebate and reserve funds freedoms to our shoppers. whereas trying to find airfares, rebate and reserve funds claims rely on varied variables, together with trying over 600 carriers to trace down the smallest amount accessible passage. Coupon codes square measure substantial for reserve funds for qualified appointments off our commonplace help expenses. Seniors and youth could discover express restricted admissions offered by specific carriers subject to craft capabilities. Military, deprivation and externally hindered voyagers square measure qualified for limits off our post-booking administration expenses as ordered enter our sympathy special case strategy.</p><br>

    <h3>Disclaimer:</h3>
    <p>Most reduced offers are non-refundable and have confinements on the date and directing changes subsequent to ticketing and preceding travel. Investment funds may change without notification and different limitations may apply. Clients explicitly concur that utilization of our administration is at the client's sole hazard. Neither we, its associates nor any of their particular workers, specialists, outsider substance suppliers or licensors warrant that we will be continuous or mistake-free; nor do they make any guarantee with regards to the outcomes that might be acquired from utilization of our service, or with regards to the precision, unwavering quality or substance of any data, administration, or stock gave through us.<br>The information regarding our products and services displayed on our website may include errors or inaccuracies, including pricing errors, inadvertently or otherwise. In particular, thereof, Tourcruiser.com doesn’t guarantee the accuracy of, and disclaim all the liability for inaccuracies or any errors related to travel products and services displayed on our website, including airfares, hotels, cruises, vacations, car rentals etc. Additionally, Tourcruiser.com reserves the right to make amends and correct any pricing errors on our website and/or reservations made through us under any incorrect price. In case of such price error corrections, subject to availability, you will be offered opportunity for keep your reservation at the correct price, or else your reservation will be cancelled by us without penalty.</p>
    
        <p class="img-fluid col-md-3 mx-auto"><img src="<?= base_url() ?>media/images/pay.png" alt="payment options" /></p>
    
    
<div class="webrights">
    <p>© Copyrights 2021. Tourcruiser.com | A Unit Of Airtrip Advisor LLC <br>AIRTRIP ADVISOR LLC
SUITE #306,
672 WEST 11TH ST,
TRACY CA 95376</p>
</div>
</div>

</div>
</div>



<div class="call-tag">
    <a href="tel:<?= TFN ?>">

        <i class="fa fa-phone" aria-hidden="true"></i> <?= TFN ?>

    </a>
</div>

<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>


<div id="myModal" class=" signup-pop modal fade " role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="left-set">
                    <div class="unlock-deal">
                        <h3>Sign in or register to unlock
                            <span>Member Only Deals</span>
                            and more savings</h3>
                    </div>
                    <ul>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i> Members get up to 20% off flights and up to 55% off hotels
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i> Earn up to 6 points per dollar on every purchase
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i> Big savings with exclusive promo codes and discounts
                        </li>
                    </ul>


                </div>
                <div class="right-set">
                    <div class="social-login">
                        <h3>One click sign-in with</h3>
                        <!-- <button class="face-book"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
                        <button onclick="window.location.href = ''" class="goo-gle"><i class="fa fa-google" aria-hidden="true"></i> Google</button> -->
                    </div>
                    <form id="sform" method="POST" action="<?= base_url('LoginUser') ?>">
                        <div class="email-put">
                            <h3>Enter Your details</h3>
                            <div id="error"></div>
                            <div class="form-group">
                                <input placeholder="Email" name="email" required="" type="email">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </div>
                            <div class="form-group">
                                <input placeholder="Password" name="password" required="" type="password">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </div>
                            <div class="forgot-link">
                                <a href="#" onclick="$('#myModal').modal('close');$('#myModal3').modal('open');">Forget Password</a>
                                <button> Sign-in </button>
                            </div>

                            <div class="reg-here">
                                For new registration <a onclick="$('#myModal2').modal('open');$('#myModal').modal('close')" href="#">Click Here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Singup-->
<div id="myModal2" class=" signup-pop modal fade " role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="left-set">
                    <div class="unlock-deal">

                        <h3>Sign in or register to unlock
                            <span>Member Only Deals</span>

                            and more savings</h3>
                    </div>
                    <ul>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i> Members get up to 20% off flights and up to 55% off hotels
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i> Earn up to 6 points per dollar on every purchase
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i> Big savings with exclusive promo codes and discounts
                        </li>
                    </ul>


                </div>
                <div class="right-set">

                    <form method="POST" id="sform" action="<?= base_url() ?>Signup/Oauth">
                        <div class="social-login">
                            <h3>One click sign-in with</h3>
                            <div id="error"></div>
                            <!-- <button class="face-book"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
                        <button onclick="window.location.href = ''" class="goo-gle"><i class="fa fa-google" aria-hidden="true"></i> Google</button> -->
                        </div>
                        <div class="email-put">
                            <h3>Enter Your details</h3>
                            <div class="form-group">
                                <input placeholder="User Name" required="" name="username" type="Name">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </div>
                            <div class="form-group">
                                <input placeholder="Email Id" required="" name="email" type="email">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="form-group">
                                <input placeholder="Phone No." required="" name="contact" type="text">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="form-group">
                                <input placeholder="Password" required="" name="password" type="password">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>
                            <div class="form-group">
                                <input placeholder="Company Name" required="" name="companyname" type="text">
                                <i class="fa  fa-building" aria-hidden="true"></i>
                            </div>
                            <div class="form-group">
                                <input placeholder="Company Address" required="" name="address" type="text">
                                <i class="fa  fa-building" aria-hidden="true"></i>
                            </div>
                            <div class="forgot-link">
                                <button> Sign-up </button>
                            </div>
                            <div class="reg-here">
                                Already Registered <a onclick="$('#myModal2').modal('close');$('#myModal3').modal('open')" href="#">Click Here</a>
                            </div>
                        </div>
                    </form>2
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal3" class=" signup-pop modal fade " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="left-set">
                    <div class="unlock-deal">
                        <h3>Sign in or register to unlock
                            <span>Member Only Deals</span>
                            and more savings</h3>
                    </div>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Members get up to 20% off flights and up to 55% off hotels</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Earn up to 6 points per dollar on every purchase</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Big savings with exclusive promo codes and discounts</li>
                    </ul>
                </div>
                <div class="right-set">
                    <div class="email-put">
                        <h3>Enter Email Id</h3>
                        <div class="form-group">
                            <input placeholder="Enter" required="" type="text">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </div>
                        <div class="forgot-link">
                            <button> Submit </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class='popup' >
<div class='cnt223'>
<div class="popup_title">
                         <h4>Looking for the Cheapest Deals?</h4>
                          <h5>Call Now &amp; You Could Save Big</h5>
                        </div>
                        <div class="row">
                          
                             <div class="col-md-7">
                                  <div class="right-info">
                                  <div class="call-show">
                                      
                                 <p>CALL US FOR FLIGHT CANCEL | CHANGE FEE </p>
                                 <a href="tel:<?= TFN ?>">  <img src="<?= base_url() ?>frontend/images/phone-icons.gif" alt="" /> <?= TFN ?></a>
                                  </div>
                                  <div class="extra-cont">
                                      <h3>Also Help for Flight Cancellation and Fee Waiver As <span> CORONAVIRUS (COVID-19) </span></h3>
                                  
                                  </div>
                                  </div>
                             </div>
                               <div class="col-md-5">
                                <div class="support-img">
                                    <img src="<?= base_url() ?>frontend/images/support-grl.png" alt="" />
                                     </div>
                                
                            </div>
                             <div class="col-md-12 ">
                             <div class=" bottom-foot">
                                 
                            Due to availability and demand fare prices change quite frequently. Let us notify you when your fare drops!
                            
                        </div>
                        </div>
                        </div>
                       
                     
<a href='' class='close'><i class="fa fa-times-circle" aria-hidden="true"></i></a>
</p>
</div>
</div> -->











<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="<?= base_url() ?>frontend/js/myjs.js"></script>

<script src="<?= base_url() ?>frontend/js/migrate.js" type="text/javascript"></script>
<script src="<?= base_url() ?>frontend/js/jquery.autocomplete.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url("frontend/") ?>css/stick.css">
<script src="<?= base_url("frontend/") ?>js/stick.js" type="text/javascript"></script>

<script src="<?= base_url() ?>media/js/owl.carousel.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>media/js/owlcustom.js" type="text/javascript"></script>






<!--

<script src="<?= base_url() ?>frontend/js/tc-aos.js"></script>
<script src="<?= base_url() ?>frontend/js/custom.js"></script>

<script src="<?= base_url() ?>frontend/js/tc-typed.min.js"></script>
<script src="<?= base_url() ?>frontend/js/tc-popup-plugin.js"></script>
<script src="<?= base_url() ?>frontend/js/tc-parsley.min.js"></script>
<script src="<?= base_url() ?>frontend/js/tc-jarallax.min.js"></script>
<script src="<?= base_url() ?>frontend/js/tc-validatelib.js"></script>
<script src="<?= base_url() ?>frontend/js/tc-webslidemenu.js"></script>
<script src="<?= base_url() ?>frontend/js/tc-wow.js"></script>
<script src="<?= base_url() ?>frontend/js/custom.js"></script>

-->





<script type="text/javascript">
    $(document).ready(function() {
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
          
        });
        


    });
</script>






<!---<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>-->


<script type="text/javascript">
    var jq = $.noConflict();


    jq(document).mouseup(function(e) {

        var _header = [];
        _header.push('.ulPassenger');
        jq.each(_header, function(key, value) {
            if (!jq(value).is(e.target) && jq(value).has(e.target).length === 0) {

                jq(value).hide();
            }
        });


    });
    jq(document).ready(function() {


        if (jq().autocomplete) {

            jq("#flight-from").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-from").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-from2").val(fin.trim());
            });


            jq("#flight-to").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-to").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-to2").val(fin.trim());
            });


            jq("#destination").autocomplete("<?= base_url("readHotel") ?>", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();
                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();
                    return airportcode2 + ", " + iatacode2;
                }
            });
            jq("#destination").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#destination2").val(fin.trim());
            });


            jq("#flight-from-multi1").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-from-multi1").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-from2-multi1").val(fin.trim());
              
            });




            jq("#flight-to-multi1").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;

                }
            });

            jq("#flight-to-multi1").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-to2-multi1").val(fin.trim());
                jq("#flight-from-multi2").val(formatted);
                jq("#flight-from2-multi2").val(fin.trim());
            });




            jq("#flight-from-multi2").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-from-multi2").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-from2-multi2").val(fin.trim());
            });


            jq("#flight-to-multi2").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-to-multi2").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-to2-multi2").val(fin.trim());
                jq("#flight-from-multi3").val(formatted);
                jq("#flight-from2-multi3").val(fin.trim());
                
            });




            jq("#flight-from-multi3").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-from-multi3").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-from2-multi3").val(fin.trim());
            });


            jq("#flight-to-multi3").autocomplete("<?= base_url() ?>read", {
                autoFill: true,
                mustMatch: false,
                selectFirst: false,
                minChars: 3,
                formatItem: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var countrycode = value[0].split(',')[1];
                    var countrycode2 = countrycode.trim();
                    var countrycode3 = countrycode2.toUpperCase();

                    return countrycode + ", " + airportcode2;
                },
                formatResult: function(value) {
                    //alert(value);

                    var airportcode = value[0].split(',')[0];
                    var airportcode2 = airportcode.trim();
                    //alert(airportcode2);

                    var iatacode2 = value[0].split(',')[1];
                    iatacode2 = iatacode2.trim();
                    iatacode2 = iatacode2.toUpperCase();

                    return airportcode2 + ", " + iatacode2;
                }
            });

            jq("#flight-to-multi3").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                jq("#flight-to2-multi3").val(fin.trim());
            });

        }
        // jq.stickToMe({
        //     layer: '#stickLayer'
        // });

    });
</script>




<script src="<?= base_url() ?>frontend/js/jquery.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.scrollTo.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.nav.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.localscroll-1.2.7-min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.prettyPhoto.js"></script>
<script src="<?= base_url() ?>frontend/js/isotope.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.flexslider.js"></script>
<script src="<?= base_url() ?>frontend/js/inview.js"></script>
<script src="<?= base_url() ?>frontend/js/animate.js"></script>
<script src="<?= base_url() ?>frontend/js/validate.js"></script>
<script src="<?= base_url() ?>frontend/js/validator.js"></script>
<script src="<?= base_url() ?>frontend/js/custom.js"></script>


<?php
$error = "";
if (isset($_GET["signup"]) && isset($_GET["status"]) && $_GET["signup"] == "true" && $_GET["status"] == "failed") {

    echo "<script> $('#myModal2').modal('open'); $('#error').text('User already exist ! Please goto login').addClass('paraError'); </script>";
}
if (isset($_GET["signin"]) && isset($_GET["action"]) && $_GET["signin"] == "true" && $_GET["action"] == "false") {
    echo "<script> $('#myModal').modal('open'); $('#error').text('Invalid credentials').addClass('paraError'); </script>";
}
?>





<script type="text/javascript">
    $(document).ready(function() {
        var adultar = 1;
        var childar = 0;
        var infantar = 0;
        var seniors = 0;
        $('.count').prop('disabled', true);
        $(document).on('click', '.plusadt', function() {
            $('.countAdt').val(parseInt($('.countAdt').val()) + 1);

            adultar++;
            if ($('.countAdt').val() > 8) {
                $('.countAdt').val(9);
                adultar = 9;
            }
            $('#sformdata').find("input[name='adult']").remove();
            $('#sformdata').append("<input name='adult'  value=" + adultar + " type='hidden'/>").val(adultar);
            callme();
        });
        $(document).on('click', '.minusadt', function() {
            $('.countAdt').val(parseInt($('.countAdt').val()) - 1);
            adultar--;
            if ($('.countAdt').val() == 0) {
                $('.countAdt').val(1);
                adultar = 1;
            }
            $('#sformdata').find("input[name='adult']").remove();
            $('#sformdata').append("<input name='adult' value=" + adultar + "  type='hidden'/>").val(adultar);
            callme();
        });
        $(document).on('click', '.pluschd', function() {

            $('.countChd').val(parseInt($('.countChd').val()) + 1);
            childar++;
            if ($('.countChd').val() > 8) {

                $('.countChd').val(9);
                childar = 9;
            }
            $('#sformdata').find("input[name='child']").remove();
            $('#sformdata').append("<input name='child' value=" + childar + " type='hidden'/>").val(adultar);
            callme();
        });
        $(document).on('click', '.minuschd', function() {
            $('.countChd').val(parseInt($('.countChd').val()) - 1);
            childar--;
            if ($('.countChd').val() <= 0) {
                $('.countChd').val(0);
                childar = 0;
            }
            $('#sformdata').find("input[name='child']").remove();
            $('#sformdata').append("<input name='child' value=" + childar + " type='hidden'/>");
            callme();
        });



        $(document).on('click', '.minussen', function() {
            $('.countSen').val(parseInt($('.countSen').val()) - 1);
            seniors--;
            if ($('.countSen').val() <= 0) {
                $('.countSen').val(0);
                seniors = 0;
            }
            $('#sformdata').find("input[name='seniors']").remove();
            $('#sformdata').append("<input name='seniors' value=" + seniors + " type='hidden'/>");
            callme();
        });

        $(document).on('click', '.plussen', function() {
            $('.countSen').val(parseInt($('.countSen').val()) + 1);
            seniors++;
            if ($('.countSen').val() > 8) {
                $('.countSen').val(9);
                seniors = 9;
            }
            $('#sformdata').find("input[name='seniors']").remove();
            $('#sformdata').append("<input name='seniors' value=" + seniors + " type='hidden'/>");
            callme();
        });



        $(document).on('click', '.minusinf', function() {
            $('.countInf').val(parseInt($('.countInf').val()) - 1);
            infantar--;
            if ($('.countInf').val() <= 0) {
                $('.countInf').val(0);
                infantar = 0;
            }
            $('#sformdata').find("input[name='infant']").remove();
            $('#sformdata').append("<input name='infant' value=" + infantar + " type='hidden'/>");
            callme();
        });


        $(document).on('click', '.plusinf', function() {
            $('.countInf').val(parseInt($('.countInf').val()) + 1);
            infantar++;
            if ($('.countInf').val() > 8) {
                $('.countInf').val(9);
                infantar = 9;
            }
            $('#sformdata').find("input[name='infant']").remove();
            $('#sformdata').append("<input name='infant' value=" + infantar + " type='hidden'/>");
            callme();
        });


        function callme(params) {
            var total = adultar + childar + infantar;
            $("#passenger").val(total);
        }
    });
</script>
<!--
<script>
  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
	typeSpeed: 130,
	 backSpeed: 40,
	 loop: true
  });
</script>
<script>
jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.2
});
</script>
<script>$.noConflict();// Code that uses other library's $ can follow here.</script>

<script>
    $(document).ready(function(){
        // Add down arrow icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-angle-down").removeClass("fa-angle-right");
        });
        
        // Toggle right and down arrow icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    });
</script>-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<script>
    
    function showModal(){
  $('#exampleModalCenter').modal('show');
  }
    setTimeout(function(){ showModal(); }, 10000);
	
	
	
	
	
	
	
	
	
</script>

<script>
    $(document).ready(function(){
        // Add down arrow icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-angle-down").removeClass("fa-angle-right");
        });
        
        // Toggle right and down arrow icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    });
</script>




</body>

</html>