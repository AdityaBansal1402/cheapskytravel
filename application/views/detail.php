<?php include_once("includes/header.php");

$AirItianeary = json_decode($form);
// echo "<pre>";
// print_r($AirItianeary);
// die;

?>

<div class="detail-section">
    <div class="container">
        <form id="paymentForm" autocomplete="off" action="<?= base_url("payment") ?>/<?= $this->uri->segment("3") ?>" method="POST">
            <div class="detail-section-set">
                <div class="row">
                    <div class="col-md-12 col-xl-9">

                        <div class="detail-left-show">

                            <?php

                            if (isset($AirItianeary->itineraries)) {
                            ?>
                                <div class="step-to-step">
                                    <div class="step-block active " data-mobile="<?= $isMobile ? "1" : "0" ?>">
                                        <button>1</button>

                                        <span><i class="mdi mdi-clipboard-text-play-outline" aria-hidden="true"></i> Review Itinerary</span>
                                    </div>
                                    <div class="step-block" data-mobile="<?= $isMobile ? "1" : "0" ?>">
                                        <button>2</button>
                                        <span><i class="mdi mdi-account-check-outline" aria-hidden="true"></i>Personal Information</span>
                                    </div>
                                    <div class="step-block" data-mobile="<?= $isMobile ? "1" : "0" ?>">
                                        <button>3</button>
                                        <span><i class="mdi mdi-credit-card" aria-hidden="true"></i>Payment Information</span>
                                    </div>
                                </div>

                            <?php } ?>
                            <input type="hidden" name="ita" value=" <?= base64_encode(json_encode($AirItianeary)) ?>">
                            <div class="detail-all-show div1">

                                <?php
                                $array_classWise = [];

                                if (isset($AirItianeary->itineraries)) {
                                    $timeToBeMinus = getAirlineTime();
                                    $timeToBeMinusVal = 0;
                                    if (count($timeToBeMinus) > 0) {
                                        $timeToBeMinusVal = floatval($timeToBeMinus[0]->min);
                                    }
                                    foreach ($AirItianeary->itineraries as $key => $OriginDestinationOption) {
                                        $array_classWise[] = ["class" => $AirItianeary->travelerPricings[0]->fareDetailsBySegment[0]->class, "air" => $OriginDestinationOption->segments[0]->carrierCode];
                                ?>
                                        <div class="show-divide-set ">
                                            <h2>(<?= $key == 0 ? "Outbound" : "Inbound" ?>) From
                                                : <?= getLocName($OriginDestinationOption->segments[0]->departure->iataCode) ?> <? ?></h2>
                                        </div>
                                        <?php
                                        foreach ($OriginDestinationOption->segments as $FlightSegment) {
                                        ?>
                                            <div class="show-divide-set ">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="show-more-info">
                                                            <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= ($FlightSegment->carrierCode) ?>.png" alt="" /><br />
                                                            <span><?= $FlightSegment->carrierCode ?> <?= $FlightSegment->number ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="flight-time-date">
                                                            <h4>
                                                                <?= getLocName($FlightSegment->departure->iataCode) ?>
                                                            </h4>
                                                            <span><?= date("M d, D, h:i a", strtotime($FlightSegment->departure->at)) ?></span>

                                                        </div>
                                                        <div class="flight-md-icon">
                                                            <i class="mdi mdi-airplane " aria-hidden="true"></i>
                                                        </div>


                                                        <div class="flight-time-date">
                                                            <h4>
                                                                <?= getLocName($FlightSegment->arrival->iataCode) ?>
                                                            </h4>
                                                            <span><?= date("M d, D,h:i a", strtotime("-$timeToBeMinusVal minutes", strtotime($FlightSegment->arrival->at))) ?> </span>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="same-day">
                                                            <span><?= str_replace(['PT', 'H', 'M'], [' ', 'H ', 'M'], $FlightSegment->duration) ?></span></span>
                                                            Equipment: <?= $FlightSegment->aircraft->code ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                    <?php }
                                    } ?>

                            </div>
                            <div class="next-btn">
                                <button class="next1">Next</button>
                            </div>
                        <?php } else { ?>

                            <div class="session-out">
                                <div class="out-in">
                                    <h3>session out</h3>
                                    <p>Kindly re-enter your IATA</p>
                                    <button onclick="window.location.href='<?= base_url(); ?>'">X</button>
                                </div>
                            </div>
                        <?php
                                }
                        ?>


                        <div class="personal-information div2 hidden">
                            <h3>Your Personal Information</h3>
                            <p>All passenger names must match Passport or government issued Photo ID. <br /> Passport
                                and/or Photo ID must be valid on date of travel.</p>
                            <?php
                            $passengerCount = 0;
                            for ($i = 0; $i < intval($this->uri->segment(4)); $i++) {
                            ?>

                                <div class="passenger-adult">
                                    <h3>Passenger <?= ++$passengerCount ?>: Adult(12+)</h3>
                                    <input type="hidden" name="number[]" value="1.<?= $i ?>">
                                    <div class="row no-gutters">
                                        <input type="hidden" name="ptype[]" value="ADT">
                                        <div class="form-group col-md-2 col-6 pl-1 pr-1">
                                            <label for="">Title</label>
                                            <select name="title[]" class="form-control pl-2">
                                                <option value="Mr.">Mr</option>
                                                <option value="Mrs.">Mrs</option>
                                                <option value="Ms.">Ms</option>
                                            </select>
                                            <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                        </div>
                                        <div class="form-group col-md-2 col-6 pl-1 pr-1">

                                            <label for="">Gender</label>
                                            <select name="gender[]" class="form-control pl-2">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                            <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>First Name</label>
                                            <input name="fname[]" class="form-control" type="text" required />
                                            <span class="mdi mdi-account oth-tg "></span>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>Last Name</label>
                                            <input name="lname[]" class="form-control" type="text" required />
                                            <span class="mdi mdi-account oth-tg "></span>
                                        </div>

                                        <?php
                                        if ($i == 0) {
                                        ?>
                                            <div class="col-md-4 form-group pl-1 pr-1">
                                                <label>Email</label>
                                                <input class="form-control" onblur="$('input[name=cardholderemail]').val($(this).val());" name="email[]" type="email" required />
                                                <span class="mdi mdi-email-open-outline oth-tg "></span>
                                            </div>
                                            <input type="hidden" name="contact_code[]" value="+1">
                                            <div class="col-md-4 form-group pl-1 pr-1">
                                                <label>Phone No</label>

                                                <input type="tel" id="mobile-number" class="form-input" name="contact[]" required placeholder="e.g. 7896541230">
                                                <!-- <select name="contact_code[]" class=" form-select pl-4" required id="state">
                                                    <?php // foreach ($dial_code as $code_) { 
                                                    ?>
                                                        <option <?php //$code_->code == "+61" ? "selected" : "" 
                                                                ?> value="<?php // $code_->code  
                                                                            ?>"><?php // $code_->code  
                                                                                ?></option>
                                                    <?php //} 
                                                    ?>
                                                </select> -->
                                                <!-- <input class="form-input"  type="text"  /> -->

                                            </div>
                                        <?php } ?>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>Date of Birth</label>
                                            <input class="form-control adultDob" readonly name="dob[]" type="text" required />
                                            <span class="mdi mdi-calendar-month-outline cal-tg "></span>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>
                            <?php

                            for ($j = 0; $j < intval($this->uri->segment(5)); $j++) {
                            ?>
                                <div class="passenger-adult div3 ">
                                    <h3>Passenger <?= ++$passengerCount ?>: Child(2+)</h3>
                                    <div class="row no-gutters">
                                        <input type="hidden" name="ptype[]" value="CNN">
                                        <input type="hidden" name="number[]" value="2.<?= $j ?>">
                                        <div class="form-group col-md-2 col-6 pl-1 pr-1">

                                            <label for="">Title</label>
                                            <select name="title[]" class="form-control pl-2">
                                                <option value="Master">Master</option>
                                                <option value="Ms">Ms</option>

                                            </select>
                                            <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                        </div>
                                        <div class="form-group col-md-2 col-6 pl-1 pr-1">

                                            <label for="">Gender</label>
                                            <select name="gender[]" class="form-control pl-2">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                            <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>First Name</label>
                                            <input name="fname[]" class="form-control" type="text" required />
                                            <span class="mdi mdi-account oth-tg "></span>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>Last Name</label>
                                            <input name="lname[]" class="form-control " type="text" required />
                                            <span class="mdi mdi-account oth-tg "></span>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>Date of Birth</label>
                                            <input class="form-control childDob" readonly name="dob[]" type="text" required />
                                            <span class="mdi mdi-calendar-month-outline cal-tg "></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php

                            for ($k = 0; $k < intval($this->uri->segment(6)); $k++) {
                            ?>
                                <div class="passenger-adult div3">
                                    <h3>Passenger <?= ++$passengerCount ?>: Infant(0-2)</h3>
                                    <div class="row no-gutters">
                                        <input type="hidden" name="ptype[]" value="INF">
                                        <input type="hidden" name="number[]" value="4.<?= $k ?>">
                                        <div class="form-group col-md-2 col-6 pl-1 pr-1">
                                            <label for="">Title</label>
                                            <select name="title[]" class="form-control pl-2">
                                                <option value="Master">Master</option>
                                                <option value="Ms">Ms</option>
                                            </select>
                                            <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                        </div>
                                        <div class="form-group col-md-2 col-6 pl-1 pr-1">
                                            <label for="">Gender</label>
                                            <select name="gender[]" class="form-control pl-2">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                            <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>First Name</label>
                                            <input name="fname[]" class="form-control" type="text" required />
                                            <span class="mdi mdi-account oth-tg "></span>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>Last Name</label>
                                            <input name="lname[]" class="form-control " type="text" required />
                                            <span class="mdi mdi-account oth-tg "></span>
                                        </div>
                                        <div class="col-md-4 form-group pl-1 pr-1">
                                            <label>Date of Birth</label>
                                            <input class="form-control infantDob" readonly name="dob[]" type="text" required />
                                            <span class="mdi mdi-calendar-month-outline cal-tg "></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                            <small>
                                *This information is for airline use during disruptions and will not be used for
                                marketing purpose.
                            </small>
                            <div class="next-btn">
                                <button class="next2">Next</button>
                            </div>
                        </div>


                        <div class="personal-information hidden   div4">
                            <h3>Card Information – Card Holder</h3>
                            <p>Your billing address must match the address listed on your card statement.</p>
                            <div class="passenger-adult">
                                <div class="row no-gutters">

                                    <div class="col-md-5 form-group pl-1 pr-1">
                                        <label for="">First Name</label>
                                        <input class="form-control" name="cardholderfname" type="text" required />
                                        <span class="mdi mdi-account oth-tg "></span>
                                    </div>
                                    <div class="col-md-5 form-group pl-1 pr-1">
                                        <label for="">Last Name</label>
                                        <input class="form-control" name="cardholderlname" type="text" required />
                                        <span class="mdi mdi-account oth-tg "></span>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">Card Number </label>

                                        <input name="card_number" required class="form-control" type="text" required />
                                        <span class="mdi mdi-credit-card oth-tg "></span>
                                    </div>
                                    <div class="form-group col-md-2 col-6 pl-1 pr-1">
                                        <label for="">Expiration Date</label>
                                        <select name="exp_month" required class="form-control pl-2">
                                            <option value="">Month</option>
                                            <?php
                                            for ($i = 1; $i <= 12; $i++) {
                                            ?>
                                                <option value="<?= sprintf("%02d", $i) ?>"><?= sprintf("%02d", $i) ?></option>
                                            <?php
                                            } ?>
                                        </select>
                                        <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group col-md-2 col-6 pl-1 pr-1">
                                        <label for="">&nbsp</label>
                                        <select name="exp_year" required class="form-control pl-2">
                                            <option value="">Year</option>
                                            <?php
                                            for ($i = date("Y"); $i <= intval(date("Y")) + 20; $i++) {
                                            ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php
                                            } ?>
                                        </select>
                                        <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-2 form-group col-6 pl-1 pr-1">
                                        <label for="">CVV </label>
                                        <input class="form-control pl-2" maxlength="4" name="cvv2" type="text" required />
                                    </div>
                                </div>

                            </div>
                            <h3>Billing Information (Card Holder)</h3>
                            <div class="passenger-adult">
                                <div class="row no-gutters">


                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">Email</label>
                                        <input class="form-control " name="cardholderemail" type="email" required />
                                        <span class="mdi mdi-email-open-outline oth-tg "></span>
                                    </div>
                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">Country: </label>
                                        <select name="country" class="form-control pl-2" required id="country">
                                            <?php foreach ($country as $countries) { ?>
                                                <option data-id="<?= $countries->id ?>" <?= $countries->name == "United States" ? "selected" : "" ?> value="<?= $countries->name ?>"><?= $countries->name ?></option>
                                            <?php } ?>
                                        </select>
                                        <i class="mdi mdi-chevron-down " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">State:</label>
                                        <select name="state" class="form-control pl-2" required id="state">
                                            <?php foreach ($state as $states) { ?>
                                                <option <?= $states->name == "Australia" ? "selected" : "" ?> value="<?= $states->name ?>"><?= $states->name ?></option>
                                            <?php } ?>
                                        </select>
                                        <i class="mdi mdi-chevron-down " aria-hidden="true"></i>

                                    </div>
                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">City</label>
                                        <input class="form-control pl-2" name="city" type="text" required />
                                    </div>
                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">Billing Address</label>
                                        <input class="form-control pl-2" name="cardholderaddress" type="text" required />
                                    </div>
                                    <div class="col-md-4 form-group pl-1 pr-1">
                                        <label for="">Zip/Postal Code: * </label>
                                        <input class="form-control pl-2" name="zip" type="text" required />
                                    </div>
                                </div>
                            </div>


                            <div class="passenger-adult">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input checked type="checkbox" class="custom-control-input" id="check1">
                                            <label class="custom-control-label" for="check1">By checking the box,
                                                you agree to our Terms & Conditions.</label>
                                        </div>
                                    </div>
                                </div>
                                <small>
                                    It is important that the billing address and phone number you provide are the
                                    address and phone number that your credit card company has on file for you. We
                                    will not be able to process your order if the information provided does not
                                    match.
                                    Most tickets are E-Tickets and will be issued as E-Tickets whenever possible
                                    All ticket purchases are final and cannot be cancelled. <br />
                                    All ticket purchases are non-refundable, non-exchangeable and non- transferable.
                                    <br />
                                    Usually ticket exchanges once they are issued can not be made and will always
                                    incur substantial penalties, which may exceed the original cost of the ticket
                                    purchased. Please contact us for any assistance
                                    In some cases tickets do not qualify for frequent flyer mileage accrual or
                                    upgrades. Please check with individual Airline for details
                                    Seat assignments can be arranged through our service center or contacting the
                                    airlines directly or will be made at the airport on the day of departure.
                                    <br />
                                    If this is an international trip, special travel documentation like visa may be
                                    required for each traveler. You are solely responsible for any and all such
                                    documentation.
                                </small>
                            </div>
                            <div class="next-btn">
                                <button>Confirm Booking</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xl-3">
                        <?php if (isset($AirItianeary->itineraries)) {

                            $calculate_mark = 0;
                            // $markup_value = getMarkAirline($AirItianeary->TPA_Extensions->ValidatingCarrier->Code);
                            $airlineCode = $AirItianeary->validatingAirlineCodes[0];
                            $cabinCode = getClassCode($AirItianeary->travelerPricings[0]->fareDetailsBySegment[0]->cabin);
                            $from_code = $AirItianeary->itineraries[0]->segments[0]->departure->iataCode;
                            $endLoc = end($AirItianeary->itineraries);
                            $to_code = $AirItianeary->itineraries[0]->segments[array_key_last($endLoc->segments)]->arrival->iataCode;
                            $paxes = intval($this->uri->segment(4)) + intval($this->uri->segment(5));
                            $from_date = $AirItianeary->itineraries[0]->segments[0]->departure->at;
                            $to_date = $endLoc->segments[array_key_last($endLoc->segments)]->departure->at;
                            $markup_value = getMarkAirline($airlineCode, $cabinCode, $from_code, $to_code, $paxes, date("d-m-Y", strtotime($from_date)), date("d-m-Y", strtotime($to_date)));


                            $classWiseMarkup = getMarkupByClass($array_classWise, floatval($AirItianeary->price->total));

                            if ($markup_value != null) {
                                if ($markup_value["type"] == 0) {
                                    $calculate_mark = round($markup_value["price"]);
                                } else {
                                    $calculate_mark = round(floatval($AirItianeary->price->total) * (floatval($markup_value["price"])) / 100);
                                }


                                $this->session->set_userdata("markupdata", json_encode($markup_value));

                                $calculate_mark = +$calculate_mark;
                            }
                            if ($classWiseMarkup != 0) {
                                $calculate_mark = $classWiseMarkup;
                                $this->session->set_userdata("markupdata", json_encode(["price" => $calculate_mark, "type" => "0"]));
                            }

                        ?>
                            <input type="hidden" value="<?= $airlineCode ?>" name="airline">
                            <input type="hidden" value="<?= $cabinCode ?>" name="cabincode">
                            <input type="hidden" value="<?= $from_code ?>" name="fromcode">
                            <input type="hidden" value="<?= $AirItianeary->oneWay == true ? "1" : "2" ?>" name="tripType">
                            <input type="hidden" value="<?= $to_code ?>" name="tocode">
                            <input type="hidden" value="<?= $from_date ?>" name="from_date">
                            <input type="hidden" value="<?= $to_date ?>" name="to_date">
                            <div class="detail-right-show">
                                <div class="right-show-flight">
                                    <h3>Fare Details</h3>
                                    <ul>

                                        <?php foreach ($AirItianeary->travelerPricings as $key => $travelerPricings) {
                                            # code...
                                        ?>
                                            <li>
                                                <?= $travelerPricings->travelerType ?>
                                                x 1
                                                <span><?= $travelerPricings->price->currency ?> <?= floatval($travelerPricings->price->total) + $calculate_mark ?> </span>
                                            </li>
                                        <?php
                                        } ?>

                                        <li>
                                            CABIN
                                            <span> <?= $AirItianeary->travelerPricings[0]->fareDetailsBySegment[0]->cabin ?> </span>
                                        </li>
                                    </ul>

                                    <div class="total-pay">
                                        Total Price
                                        <span> <?= $AirItianeary->price->currency ?> <?= floatval($AirItianeary->price->total) + ($calculate_mark * $paxes) ?></span>
                                    </div>
                                </div>

                                <div class="right-show-flight mt-3">
<h3>Call Us for Urgent </h3>
                                    <a href="tel:<?= TFN ?>">
                                        
<div class="for-changes p-3">
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Booking</span> 
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Changes/Cancellation</span>  
<span><i class="fa fa-check-circle" aria-hidden="true"></i> Assistance</span>
<strong><a href="tel:<?= TFN ?>" class="tfnpay"><i class="fa fa-phone" aria-hidden="true"></i></a></strong>
</div>

                                    </a>
                                </div>


                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
    include_once("includes/footer.php");
    ?>