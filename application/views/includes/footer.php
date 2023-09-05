<div class="footer-set py-3">

<div class="container">
      <div class="row align-items-center">
         <div class="col-12 col-md-3">
             © Copyrights 2023. <?= WEBSITE ?>.com.
            </div>
			<div class="col-12 col-md-5">
            <div class="qlink">
             <a href="<?= base_url() ?>">Home</a>
              <a href="<?= base_url() ?>privacy-policy">Privacy Policy</a>
             <a href="<?= base_url() ?>terms-conditions">Terms & Conditions </a>
             <a href="<?= base_url() ?>refund-policy">Refund Policy </a>
              </div>
            </div>
           
			
         <div class="col-12 col-md-4">
			<ul class="card-option d-flex justify-content-center m-0">
			<li><img src="<?= base_url() ?>frontend/images/visa-card.png" alt="visa card payment options"></li>
			<li><img src="<?= base_url() ?>frontend/images/master-card.png" alt="master card payment options"></li>
			<li><img src="<?= base_url() ?>frontend/images/dicover-card.png" alt="dicover card payment options"></li>
			<li><img src="<?= base_url() ?>frontend/images/american-card.png" alt="american express card payment options"></li>
			<li><img src="<?= base_url() ?>frontend/images/jcb-card.png" alt="jcb card payment options"></li>
			</ul>
         </div>
      </div>
   </div>

</div>




<div class="call-tag d-none">
    <a href="tel:<?= TFN ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?= TFN ?></a>
</div>
<div id="myModal" class="signup-pop modal fade " role="dialog">
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
                        <button onclick="window.location.href = '<?= isset($google) ? $google : '' ?>'" class="goo-gle"><i class="fa fa-google" aria-hidden="true"></i> Google</button> -->
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
                                <button> Sign-up </button>
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

                    <form method="POST" id="sform" action="<?= base_url() ?>Signup/Out">
                        <div class="social-login">
                            <h3>One click sign-in with</h3>
                            <div id="error"></div>
                            <!-- <button class="face-book"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
                            <button onclick="window.location.href = '<?= isset($google) ? $google : '' ?>'" class="goo-gle"><i class="fa fa-google" aria-hidden="true"></i> Google</button> -->
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
                            <div class="forgot-link">
                                <button> Sign-in </button>
                            </div>

                            <div class="reg-here">
                                Already Registered <a onclick="$('#myModal2').modal('close');$('#myModal3').modal('open')" href="#">Click Here</a>
                            </div>


                        </div>
                    </form>
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

  
<div class='popup d-none' >
     <a href="tel:<?= TFN ?>"> 
<div class="cnt223">
        <div class="popup_title">
            <h4>Call Us for Free Chaanges &amp; Cheap Flight Booking <strong>Call Now &amp; Save Big</strong></h4>
        </div>
        <div class="row">

            <div class="col-md-7">
                <div class="right-info">
                    <div class="call-show">
                        <div class="dm-alertT d-flex justify-content-center tfn-ft">
    <a href="tel:<?= TFN ?>" class="tfn-btn clr-opn02 mr-lg-3 d-flex justify-content-between align-items-center">
         <i class="fa fa-phone ffp" aria-hidden="true"></i>
         <span><small>Free Changes or Cancellations (Toll-Free)</small> <?= TFN ?></span>
           
    </a>
    
    
<div class="dm-alert d-none">
    <button type="button" class="close" data-dismiss="alert">×</button>
   
   <a href="tel:<?= TFN ?>" class="d-flex"> 
   <i class="fa fa-phone ffp" aria-hidden="true"></i> 
   <div><small>Call Us for Free Cahanges &amp; Cheap Flight Booking</small> <?= TFN ?></div>
   </a>
  </div>
  </div>
                    </div>
                    <div class="extra-cont">
                        <h3>Also Help for Flight Cancellation and Fee Waiver As <span> (COVID-19) </span></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="support-img">
                    <img src="/frontend/images/support-grl.png" alt="">
                </div>

            </div>
            <div class="col-md-12 ">
                <div class=" bottom-foot"> Call Us for Unpublished Fare</div>
            </div>
        </div>
        <a href="" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
</a>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="<?= base_url("media/") ?>js/material.js" type="text/javascript"></script>
<script src="<?= base_url("media/") ?>js/jquery-ui.min.js" type="text/javascript"></script>











<script>
    $('#country').change((e) => {
        var country = $("#country option:selected").attr('data-id');;


        $.ajax({
            type: "POST",
            url: "<?= base_url("Result/getStates") ?>",
            data: {
                country: country
            },
            success: function(data) {
                var states = JSON.parse(data);
                var html = "";
                states.map((state) => {
                    html += "<option value=" + state.name + ">" + state.name + "</option>";
                });


                $('select[name="state"]').html(html);
            }

        })
    });
</script>
<script src="<?= base_url("media/js/airport.js") ?>" type="text/javascript"></script>
<script src="<?= base_url("media/js/cardvalidator.js") ?>" type="text/javascript"></script>
<script src="<?= base_url("media/js/owl.carousel.min.js") ?>" type="text/javascript"></script>


<script src="<?= base_url("media/") ?>js/form.js" type="text/javascript"></script>






<script>
    $('.modal').modal({
        dismissible: true
    });


    function cardFormValidate() {
        var cardValid = 0;

        //card number validation
        $("input[name='card_number']").validateCreditCard(function(result) {



            if (result.valid) {
                $("input[name='card_number']").removeClass('required');
                cardValid = 1;
            } else {
                $("input[name='card_number']").addClass('required');
                cardValid = 0;
            }
        });
        var expMonth = "";
        var expYear = "";
        //card details validation
        $("select[name='exp_month']").change(function() {
            expMonth = $(this).val();
        });
        $("select[name='exp_year']").change(function() {
            expYear = $(this).val();
        });





        var cvv = $("input[name='cvv2']").val();
        var regName = /^[a-z ,.'-]+$/i;

        var regYear = /^2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
        var regCVV = /^[0-9]{3,3}$/;
        if (cardValid == 0) {
            $("input[name='card_number']").addClass('required');
            // $("input[name='card_number']").focus();
            return false;
        } else if (!regCVV.test(cvv)) {
            $("input[name='card_number']").removeClass('required');
            $("select[name='exp_month']").removeClass('required');
            $("select[name='exp_year']").removeClass('required');
            $("input[name='cvv2']").addClass('required');
            // $("input[name='cvv2']").focus();
            return false;
        } else {
            $("input[name='card_number']").removeClass('required');
            $("select[name='exp_month']").removeClass('required');
            $("select[name='exp_year']").removeClass('required');
            $("input[name='cvv2']").removeClass('required');

            return true;
        }
    }
    $(document).ready(function() {
        //card validation on input fields

        $('#paymentForm input[type=text]').on('keyup', function() {
            return cardFormValidate()
        });

        $('#paymentForm').on("submit", function() {
            return cardFormValidate();
            $('body').append(` <div id="immediate">
            <style>#immediate {
    width: 100%;
    position: fixed;
    top: 0;
    height: 100%;
    z-index: 99999;
    background-color: #fff;
    display: flex;
    align-items: center;
}

#immediate_inner {
    width: 55%;
    margin: 0 auto;
}
.close.clspp{    opacity: 0.1 !important;}
.loader_logo {
    text-align: center;
    padding: 16px;
}

.loader_logo p {
    font-size: 22px;
    font-weight: 700;
    margin: 0;
    color: #404040;
}

.loader_logo img {
    width: 30%
}</style> 
<div id="immediate_inner">
    <div class="loader_logo">
    <img src="<?= base_url() ?>/frontend/img/logo.png" alt="faregarden">
        
          <p style="text-align:center">Please wait meanwhile we are confirming your ticket</p>
    </div>
    
  
  
    
</div>

</div>`);
            $('.next-btn>button').addClass("progress-bar progress-bar-striped progress-bar-animated");
            $('.next-btn>button').attr("disabled", "disabled");

        });
    });
</script>


<script src="<?= base_url("media/") ?>js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url("frontend/") ?>css/stick.css">
<script src="<?= base_url("frontend/") ?>js/stick.js" type="text/javascript"></script>
<div id="stickLayer" style="display:none;" class="stick_popup">
    <div class="stick_close" onclick="$.stick_close()">X</div>
    <div class="stick_content">
        <a href="tel:123-456-7890">
            <img src="<?= base_url("media/images/og.png") ?>" alt="" srcset="">
        </a>
    </div>
</div>


<script type='text/javascript'>
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
</script>

</body>

<script src="<?= base_url() ?>frontend/js/migrate.js" type="text/javascript"></script>
<script src="<?= base_url() ?>frontend/js/jquery.autocomplete.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        if ($().autocomplete) {


            $("#depart1").autocomplete("<?= base_url("read") ?>", {
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

            $("#depart1").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#depart_code1").val(fin.trim());
            });


            $("#arrival1").autocomplete("<?= base_url("read") ?>", {
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

            $("#arrival1").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#arrival_code1").val(fin.trim());
            });



            $("#depart2").autocomplete("<?= base_url("read") ?>", {
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

            $("#depart2").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#depart_code2").val(fin.trim());
            });


            $("#arrival2").autocomplete("<?= base_url("read") ?>", {
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

            $("#arrival2").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#arrival_code2").val(fin.trim());
            });




            $("#depart1-multi1").autocomplete("<?= base_url("read") ?>", {
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

            $("#depart1-multi1").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#depart_code1_multi1").val(fin.trim());

            });


            $("#arrival1-mult1").autocomplete("<?= base_url("read") ?>", {
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

            $("#arrival1-mult1").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#arrival_code1_multi1").val(fin.trim());

                $("#depart1-multi2").val(formatted);
                $("#depart_code1_multi2").val(fin.trim());
            });


            $("#depart1-multi2").autocomplete("<?= base_url("read") ?>", {
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

            $("#depart1-multi2").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#arrival_code1_multi2").val(fin.trim());
            });


            $("#arrival1-multi2").autocomplete("<?= base_url("read") ?>", {
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

            $("#arrival1-multi2").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#arrival_code1_multi2").val(fin.trim());

                $("#depart1-multi3").val(formatted);
                $("#depart_code1_multi3").val(fin.trim());
            });




            $("#depart1-multi3").autocomplete("<?= base_url("read") ?>", {
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

            $("#depart1-multi3").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#depart_code1_multi3").val(fin.trim());
            });



            $("#arrival1-multi3").autocomplete("<?= base_url("read") ?>", {
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

            $("#arrival1-multi3").result(function(event, data, formatted) {
                var fin = formatted.split(',')[1];
                $("#arrival_code1_multi3").val(fin.trim());
            });

        }


    });
    
   
    
</script>

<script src="<?= base_url() ?>media/js/phone.js"></script>
<script>
    $("#mobile-number").intlTelInput();
   
</script>
</html>