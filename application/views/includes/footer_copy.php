<div class="footer-set">
    <div class="container">




        <div class="right-visa">

            <img onclick="window.location.href='<?= base_url() ?>'" src="<?= base_url() ?>frontend/img/logo.png" alt="" />

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at quae asperiores error sequi fugit. Ratione dolore eveniet amet, quas maiores eligendi. Culpa deserunt dicta molestias, reiciendis explicabo esse. Esse.</p>

        </div>
        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li>
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
                <li>
                    <a href="#">Terms & Conditions </a>
                </li>
                <li>
                    <a href="#">Support </a>
                </li>
                <li>
                    <a href="#">Faq'S </a>
                </li>
                <li>
                    <a href="#">Refund Policy </a>
                </li>
            </ul>
        </div>
        <div class="quick-links">
            <h3>Our Services</h3>
            <ul>
                <li>
                    <a href="<?= base_url() ?>">Destination</a>
                </li>
                <li>
                    <a href="#">Group Tour</a>
                </li>
                <li>
                    <a href="#">Flight </a>
                </li>
                <li>
                    <a href="#">Hotes </a>
                </li>
                <li>
                    <a href="#">Holiday Packages </a>
                </li>
            </ul>
        </div>



        <div class="right-contact">

            <span class="icon ic-phone">
                <p>For best deal call</p>
                <a href="tel:123-456-7890 "> 123-456-7890 </a> Toll Free
            </span>
            <img src="<?= base_url() ?>media/images/pay.png" alt="" />
        </div>



    </div>
</div>



<div class="call-tag">
    <a href="tel:123-456-7890">

        <i class="fa fa-phone" aria-hidden="true"></i> 123-456-7890

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
                        <button class="face-book"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
                        <button onclick="window.location.href = '<?= isset($google) ? $google : '' ?>'" class="goo-gle"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
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
                                <a href="#" onclick="$('#myModal').modal('hide');$('#myModal3').modal('show');">Forget Password</a>
                                <button> Sign-in </button>
                            </div>

                            <div class="reg-here">
                                For new registration <a onclick="$('#myModal2').modal('show');$('#myModal').modal('hide')" href="#">Click Here</a>
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
                            <button class="face-book"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
                            <button onclick="window.location.href = '<?= isset($google) ? $google : '' ?>'" class="goo-gle"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
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
                                Already Registered <a onclick="$('#myModal2').modal('hide');$('#myModal3').modal('show')" href="#">Click Here</a>
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

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="<?= base_url() ?>frontend/js/jquery.ui.js"></script>

<script src="<?= base_url() ?>frontend/js/myjs.js"></script>

<script src="<?= base_url() ?>frontend/js/migrate.js" type="text/javascript"></script>
<script src="<?= base_url() ?>frontend/js/jquery.autocomplete.js" type="text/javascript"></script>




<link rel="stylesheet" href="<?= base_url("frontend/") ?>css/stick.css">

<script src="<?= base_url("frontend/") ?>js/stick.js" type="text/javascript"></script>
<div id="stickLayer" style="display:none;" class="stick_popup">
    <div class="stick_close" onclick="stick_close()">X</div>
    <div class="stick_content">
        <a href="tel:123-456-7890">
            <img src="<?= base_url("media/images/og.png") ?>" alt="" srcset="">
        </a>
    </div>
</div>
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
        }
        // jq.stickToMe({
        //     layer: '#stickLayer'
        // });

    });
</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.scrollTo.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.nav.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.localscroll-1.2.7-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="<?= base_url() ?>frontend/js/validate.js"></script>
<script src="<?= base_url() ?>frontend/js/validator.js"></script>
<script src="<?= base_url() ?>frontend/js/custom.js"></script>

<script src="<?= base_url() ?>media/js/owl.carousel.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>media/js/owlcustom.js" type="text/javascript"></script>


 


<script type="text/javascript">
    $(document).ready(function() {
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
        });
    });
</script>
 







<?php
$error = "";
if (isset($_GET["signup"]) && isset($_GET["status"]) && $_GET["signup"] == "true" && $_GET["status"] == "failed") {

    echo "<script> $('#myModal2').modal('show'); $('#error').text('User already exist ! Please goto login').addClass('paraError'); </script>";
}
if (isset($_GET["signin"]) && isset($_GET["action"]) && $_GET["signin"] == "true" && $_GET["action"] == "false") {
    echo "<script> $('#myModal').modal('show'); $('#error').text('Invalid credentials').addClass('paraError'); </script>";
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
            var total = adultar + childar + infantar + seniors;
            $("#passenger").val(total);
        }
    });
</script>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>

</html>