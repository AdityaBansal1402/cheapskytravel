<?php
include_once("includes/header.php");

$result = json_decode($result);

$alternateDate = json_decode($alternateDate);
$airline = array();
$airline_price = array();
$airline_price_stops = array();



if (isset($result->OTA_AirLowFareSearchRS->PricedItineraries)) {
    foreach ($result->OTA_AirLowFareSearchRS->PricedItineraries->PricedItinerary as $key => $flightData) {
        $calculate_mark = 0;
        $airlineCode = $flightData->TPA_Extensions->ValidatingCarrier->Code;
        $cabinCode = $flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->Cabin->Cabin;
        $from_code = $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode;
        $to_code = $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption)]->FlightSegment[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption)]->FlightSegment)]->ArrivalAirport->LocationCode;
        $paxes = intval($this->input->get("adult")) + intval($this->input->get("child"));
        $from_date = $this->input->get("departOn");
        $to_date = $this->input->get("returnOn") ? $this->input->get("returnOn") : $this->input->get("departOn");

        $markup_value = getMarkAirline($airlineCode, $cabinCode, $from_code, $to_code, $paxes, $from_date, $to_date);
        $markup_value = $markup_value != null ? $markup_value : "";
        $stops = count($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment) - 1;
        if (count($markup_value) > 0) {
            if ($markup_value["type"] == 0) {
                $calculate_mark = round($markup_value["price"]);
            } else {
                $calculate_mark = round(floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) * (floatval($markup_value["price"])) / 100);
            }
            $calculate_mark = +$calculate_mark;
        }
        $airline_price[$flightData->TPA_Extensions->ValidatingCarrier->Code][] = floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) + $calculate_mark;
        $airline_price_stops[$stops][$flightData->TPA_Extensions->ValidatingCarrier->Code][] = floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) + $calculate_mark;
    }
}





foreach ($airline_price as $key => $code) {
    $airline[] = $key;
}

?>
<div class="result-section">
    <div class="container">
        <div class="head-short-by">
            <h2>Best Price by Airlines: Book Today - <?= WEBSITE ?> Price Match Promise!</h2>
            <table class="table table-bordered table-responsive table-slider">

                <tbody>
                    <tr>
                        <td class="flt-hd"> <a href='#' id='showall'>Show All</a></td>
                        <?php
                        foreach ($airline as $key => $value) {
                        ?>
                            <td data-code="<?= $value ?>">
                                <div class="sh-flt">
                                    <div class="im-tg">
                                        <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $value ?>.png" alt="" />
                                    </div>
                                    <a href="javascript:void(0)"><?= getAirlineName($value) ?><br>
                                        <small>With Others</small>
                                    </a>
                                    <span title="<?= getAirlineName($value) ?> with others" class="ic-flt">
                                        <i class="mdi mdi-airplane go" aria-hidden="true"></i>
                                    </span>

                                </div>

                            </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td class="price-hd">Non Stop</td>
                        <?php
                        foreach ($airline as $key => $value) {
                        ?>
                            <td id="One"> <?= isset($airline_price_stops[0][$value][0]) ? "USD" . $airline_price_stops[0][$value][0] : "-"; ?> </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td class="price-hd2">1+stop</td>
                        <?php
                        foreach ($airline as $key => $value) {
                        ?>
                            <td id="<?= $value ?>OnePlus"> <?= isset($airline_price_stops[1][$value][0]) ? "USD" . $airline_price_stops[1][$value][0] : "-" ?> </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
            <?php
            if (!$isMobile) {
            ?>
                <div class="by-bot">
                    <div class="row">
                        <div class="col-md-9">
                            <p>Fares for our carriers are round trip, incl. all taxes and all fees. Airfares include applied Booking Bonus. Additional baggage fees may apply. ~Some flights displayed may be for alternate dates and/or airports. Certain results may be outside your search criteria.</p>
                        </div>
                        <div class="col-md-3">
                            <span>
                                Multiple Airlines <i class="mdi mdi-airplane go" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <div class="result-section-in">


            <div class="result-left-set ">
                <div class="accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="accordion accordion-default">
                        <div class="accordion-heading" role="tab" id="headingOne">
                            <h4 class="accordion-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="<?= !isset($result->error) && $isMobile ? "false" : "true" ?> " aria-controls="collapseOne">
                                    <i class="more-less mdi mdi-plus " aria-hidden="true"></i>
                                    Modify Your Result
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse <?= !isset($result->error) && $isMobile ? "" : "show" ?>" role="tabaccordion" aria-labelledby="headingOne">
                            <div class=" result-search">

                                <?php
                                $airlines = $airlines;
                                include_once("includes/result-form.php"); ?>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-default">
                        <div class="accordion-heading" role="tab" id="headingTwo">
                            <h4 class="accordion-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="<?= $isMobile ? "false" : "true" ?>" aria-controls="collapseTwo">
                                    <?= $isMobile ? '<i class="more-less mdi mdi-plus " aria-hidden="true"></i>' : '<i class="more-less mdi mdi-minus " aria-hidden="true"></i>' ?>
                                    Filter Your Search
                                </a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="accordion-collapse collapse <?= $isMobile ? "" : "show" ?>" role="tabaccordion" aria-labelledby="headingTwo">
                            <div class="accordion-body">

                                <div class="price-flt">
                                    <h3>Price filter</h3>
                                    <div class="price-val">
                                        <h3>Price Filter</h3>
                                    </div>
                                    <ul class="priceSlider">
                                        <div id="slider"></div>
                                    </ul>
                                </div>
                                <div class="for-only-check">
                                    <h3>Filter By Airline </h3>
                                    <ul>
                                        <?php
                                        foreach ($airline as $key => $value) {
                                        ?>
                                            <li>

                                                <div class="custom-control custom-checkbox ">

                                                    <input checked type="checkbox" class="custom-control-input" value="<?= $value ?>" name="airline" id="airline<?= $key ?>">
                                                    <label class="custom-control-label" for="airline<?= $key ?>"><?= getAirlineName($value) ?> <span>AUD <?= getLowestPrice($value, $airline_price); ?> (<?= getAirlineCount($value, $airline_price) ?>) </span></label>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    <h3>Filter By Stops</h3>
                                    <ul>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" checked class="custom-control-input" value="0" name="stop" id="stop">
                                                <label class="custom-control-label" for="stop">Non-stop flight</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" checked class="custom-control-input" value="1" name="stop" id="stop1">
                                                <label class="custom-control-label" for="stop1">1 stop flight</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" checked class="custom-control-input" value="2" name="stop" id="stop2">
                                                <label class="custom-control-label" for="stop2">2 stop flight</label>
                                            </div>
                                        </li>


                                    </ul>
                                </div>



                            </div>
                        </div>
                    </div>



                </div>
            </div>


            <div class="result-right-set">

                <!--                <div class="result-offer">
                    <a href="tel:1-888-515-5888">
                        <img src="<?= base_url() ?>media/images/result-ban.jpg" alt="Offer" />
                    </a>

                </div>-->
                <div class="filter-top-right">
                    <button class="active" id="cheapest">Cheapest</button>
                    <button id="shortestBy">Shortest</button>
                    <button id="alternateDate">Alternate Dates</button>
                    <button id="nearBy">Nearby Airports</button>
                </div>

                <div class="from-head">
                    <h3><?= getLocName($this->input->get("depart"))  ?> to <?= getLocName($this->input->get("arrival"))  ?> <?= date("D d,M Y", strtotime($this->input->get("departOn"))) ?> - <?= date("D d,M Y", strtotime($this->input->get("returnOn"))) ?></h3>
                    <span>
                        <?= isset($result->OTA_AirLowFareSearchRS->PricedItineraries) ? count($result->OTA_AirLowFareSearchRS->PricedItineraries->PricedItinerary) : 0 ?>
                        <small>Results Found</small>
                    </span>
                </div>
                <ul>
                    <?php

                    if (!isset($result->error) && isset($result->OTA_AirLowFareSearchRS->PricedItineraries)) {

                        $timeToBeMinus = getAirlineTime();
                        $timeToBeMinusVal = 0;
                        if (count($timeToBeMinus)) {
                            $timeToBeMinusVal = floatval($timeToBeMinus[0]->min);
                        }

                        foreach ($result->OTA_AirLowFareSearchRS->PricedItineraries->PricedItinerary as $key => $flightData) {
                            $airlineCode = $flightData->TPA_Extensions->ValidatingCarrier->Code;
                            $cabinCode = $flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->Cabin->Cabin;
                            $from_code = $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode;
                            $to_code = $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption)]->FlightSegment[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption)]->FlightSegment)]->ArrivalAirport->LocationCode;


                            $paxes = intval($this->input->get("adult")) + intval($this->input->get("child"));
                            $from_date = $this->input->get("departOn");
                            $to_date = $this->input->get("returnOn") ? $this->input->get("returnOn") : $this->input->get("departOn");

                            $markup_value = getMarkAirline($airlineCode, $cabinCode, $from_code, $to_code, $paxes, $from_date, $to_date);

                            $calculate_mark = 0;


                            if (count($markup_value) > 0) {
                                if ($markup_value["type"] == 0) {
                                    $calculate_mark = round($markup_value["price"]);
                                } else {
                                    $calculate_mark = round(floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) * (floatval($markup_value["price"])) / 100);
                                }
                                $calculate_mark = +$calculate_mark;
                            }
                    ?>
                            <li data-alternate="0" data-nearby="<?= $this->input->get("depart") != $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode ? 1 : 0 ?>" class="<?= $this->input->get("depart") != $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode ? "cheap-est" : "" ?>" data-mark="<?= $calculate_mark ?>" data-act="<?= floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) ?>" data-price="<?= floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) + $calculate_mark ?>" data-airline="<?= $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->OperatingAirline->Code ?>">
                                <?php
                                if ($this->input->get("depart") != $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode) {
                                ?>
                                    <h3 class="hd-grn">This flight is on a <b>nearby airport.</b> Please verify the dates and airport.</h3>
                                <?php } ?>
                                <div class=" child_results">
                                    <div class="row ">

                                        <div class="col-md-12">

                                            <?php
                                            $array_classWise = [];
                                            foreach ($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption as $key => $OriginDestinationOption) {

                                                $FlightSegmentsLast = count($OriginDestinationOption->FlightSegment) - 1;
                                                $array_classWise[] = ["class" => $OriginDestinationOption->FlightSegment[0]->ResBookDesigCode, "air" => $OriginDestinationOption->FlightSegment[0]->OperatingAirline->Code];
                                            ?>
                                                <div class="fight-detail-show" data-class="<?= $OriginDestinationOption->FlightSegment[0]->ResBookDesigCode ?>" data-airline="<?= $OriginDestinationOption->FlightSegment[0]->OperatingAirline->Code ?>" data-stop="<?= $FlightSegmentsLast ?>">

                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="flight-logo col-md-2 col-2">
                                                                    <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $OriginDestinationOption->FlightSegment[0]->OperatingAirline->Code ?>.png" alt="" />
                                                                    <span><?= getAirlineName($flightData->TPA_Extensions->ValidatingCarrier->Code) ?></span>
                                                                </div>
                                                                <div class="flight-check col-md-4 col-4">
                                                                    <div class="custom-checkbox ">
                                                                        <span class="time"><?= date("h:i",  strtotime($OriginDestinationOption->FlightSegment[0]->DepartureDateTime)) ?> <small><?= date("a", strtotime($OriginDestinationOption->FlightSegment[0]->DepartureDateTime)) ?></small></span>
                                                                        <span class="ct-code"><?= $OriginDestinationOption->FlightSegment[0]->DepartureAirport->LocationCode ?></span>
                                                                        <span class="fx-date"><?= date("M,d,D", strtotime($OriginDestinationOption->FlightSegment[0]->DepartureDateTime)) ?></span>
                                                                    </div>
                                                                </div>
                                                                <?php ?>
                                                                <div class="flight-icon col-md-2 col-2">
                                                                    <i class="mdi mdi-airplane <?= $key == 0 ? "go" : "come" ?>" aria-hidden="true"></i>

                                                                    <p><?= $key == 0 ? "Out-bound" : "In-bound" ?></p>

                                                                </div>

                                                                <div class="flight-check col-md-4 col-4">
                                                                    <div class="custom-checkbox ">
                                                                        <span class="time"><?= date("h:i", strtotime("-$timeToBeMinusVal minutes", strtotime($OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalDateTime))) ?> <small><?= date("a", strtotime($OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalDateTime)) ?></small></span>
                                                                        <span class="ct-code"><?= $OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalAirport->LocationCode ?></span>
                                                                        <span class="fx-date"><?= date("M,d,D", strtotime($OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalDateTime)) ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 total-time">
                                                            <span class="time-text"><?= round(floatval($OriginDestinationOption->ElapsedTime) / 60) ?> H <?= round(floatval($OriginDestinationOption->ElapsedTime - $timeToBeMinusVal)  % 60) ?> M</span>
                                                            <span class="time-text"><?= count($OriginDestinationOption->FlightSegment) - 1 == 0 ? "Non-Stop" : (count($OriginDestinationOption->FlightSegment) - 1) . " Stop(s)"; ?> </span>
                                                        </div>
                                                    </div>
                                                    <?= $key == 0 ? "<hr>" : "" ?>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="book-show">
                                    <div class="row">
                                        <div class="col-md-2">

                                            <div class="show-m-del">
                                                <button onclick="$(this).parent().parent().parent().parent().next('.show-more-details').fadeToggle(500)"><i class="mdi mdi-file-document-outline" aria-hidden="true"></i> Show Details</button>
                                                <!-- <button class="sha-re"><i class="mdi mdi-email-plus-outline" aria-hidden="true"></i>Share Details</button> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="price-show">
                                                <div class="seats">

                                                    <span class="caps"><?= getCabinType($flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->Cabin->Cabin) ?></span></br>
                                                    <span class="caps"><?= $flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->SeatsRemaining->Number ?> seats remaining</span>
                                                </div>
                                                <?php
                                                $classWiseMarkup = getMarkupByClass($array_classWise, floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount));
                                                if ($classWiseMarkup != 0) {
                                                    $calculate_mark = $classWiseMarkup;
                                                }
                                                ?>
                                                <div class="fare">

                                                    AUD <?= number_format(floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) + $calculate_mark, 2, '.', '') ?>
                                                </div>

                                            </div>



                                        </div>
                                        <div class="col-md-3 for-call-set">

                                            <a href="tel:041-037-4786">
                                                <h3>Get unpublished Deals</h3>
                                                <p>Call: 041-037-4786</p>
                                            </a>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="select-bt">
                                                <button onclick="window.location.href = '<?= base_url("Result/form/") ?><?= $flightData->TPA_Extensions->TagID ?>/<?= $this->input->get("adult") ?>/<?= $this->input->get("child") ?>/<?= $this->input->get("infant") ?>/<?= $this->input->get("seniors") ?>'">Select</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>



                                <div class="show-more-details">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="left-show-flight">
                                                <?php
                                                foreach ($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption as $key2 => $OriginDestinationOption) {
                                                    foreach ($OriginDestinationOption->FlightSegment as $FlightSegment) {
                                                ?>
                                                        <div class="show-divide-set">
                                                            <h2><?= $FlightSegment->DepartureAirport->LocationCode ?>, <?= $FlightSegment->ArrivalAirport->LocationCode ?> ‎(<?= round(floatval($FlightSegment->ElapsedTime) / 60) ?>h <?= round(floatval($FlightSegment->ElapsedTime)) % 60 ?>m) ‎(<?= $key2 == 0 ? "Outbound" : "Indbound" ?>)</h2>
                                                            <div class="row">


                                                                <div class="col-md-2 col-12">
                                                                    <div class="show-more-info">
                                                                        <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $FlightSegment->OperatingAirline->Code ?>.png" alt="" /></br>
                                                                        <span class="fl-nm"><?= $FlightSegment->OperatingAirline->Code ?> - <?= $FlightSegment->OperatingAirline->FlightNumber ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-6">

                                                                    <div class="terminal-detail">
                                                                        <span><?= getLocName($FlightSegment->DepartureAirport->LocationCode) ?></span>

                                                                    </div>
                                                                    <div class="flight-time-date">
                                                                        <?= date("M,d,D h:i a", strtotime($FlightSegment->DepartureDateTime)) ?> </br>

                                                                    </div>
                                                                </div>




                                                                <div class="col-md-4 col-6">
                                                                    <div class="terminal-detail">

                                                                        <span> <?= getLocName($FlightSegment->ArrivalAirport->LocationCode) ?></span>
                                                                    </div>
                                                                    <div class="flight-time-date">

                                                                        <?= date("M,d,D,  h:i a", strtotime("-$timeToBeMinusVal minutes", strtotime($FlightSegment->ArrivalDateTime))) ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-12">
                                                                    <div class="same-day">
                                                                        <span> <?= round($FlightSegment->ElapsedTime / 60) ?> H <?= round(($FlightSegment->ElapsedTime - $timeToBeMinusVal) % 60) ?> m,</span>
                                                                        Equipment: <?= $FlightSegment->Equipment[0]->AirEquipType ?>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <hr />
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="right-show-flight">
                                                <h3>Fare Details</h3>
                                                <ul>
                                                    <?php
                                                    $fare = 0.0;
                                                    if ($classWiseMarkup != 0) {
                                                        $calculate_mark = $classWiseMarkup;
                                                    }
                                                    foreach ($flightData->AirItineraryPricingInfo[0]->PTC_FareBreakdowns->PTC_FareBreakdown as $key => $PTC_FareBreakdown) {
                                                    ?>
                                                        <li>
                                                            <?= $PTC_FareBreakdown->PassengerTypeQuantity->Code ?> x <?= $PTC_FareBreakdown->PassengerTypeQuantity->Quantity ?> <span>AUD <?= number_format(floatval($PTC_FareBreakdown->PassengerFare->TotalFare->Amount) * intval($PTC_FareBreakdown->PassengerTypeQuantity->Quantity) + $calculate_mark - (isset($PTC_FareBreakdown->PassengerFare->Taxes) ? floatval($PTC_FareBreakdown->PassengerFare->Taxes->TotalTax->Amount) : 0), 2, '.', '') ?> </span>
                                                        </li>


                                                        <li>
                                                            Tax <span> AUD <?= isset($PTC_FareBreakdown->PassengerFare->Taxes) ? $PTC_FareBreakdown->PassengerFare->Taxes->TotalTax->Amount : 0 ?></span>
                                                        </li>

                                                    <?php

                                                        $fare = $fare + ($PTC_FareBreakdown->PassengerFare->TotalFare->Amount + $calculate_mark);
                                                    }
                                                    ?>
                                                </ul>

                                                <div class="total-pay">
                                                    Total Price
                                                    <span>AUD <?= number_format($fare, 2, '.', '') ?> </span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </li>
                        <?php
                        }
                    } else {

                        ?>
                        <li>
                            <div class="no-item-set">

                                <div style="text-align: left;">

                                    <p style="color: #ff2907;"> <b>Error</b> <br>
                                        No results were found matching your search criteria. Please go back and try again.Unfortunately, no flights met your search criteria for the airports you selected. <br>
                                        <b>Possible Causes</b>
                                        <br>
                                        This could be peak travel time for your destination. <br>
                                        Your search may have been restricted by travel dates, airline, stops, or fare class. <br>
                                        <b> What you can do</b>
                                        <br>
                                        Search for alternate/different dates.
                                        <br>
                                        Try a +/- 1 day flexible date search. <br>
                                        Include all airlines or stops in your search. <br>
                                        Please <a href="<?= base_url() ?>">click here</a> to perform a new search.
                                    </p>
                                </div>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
                        include_once("includes/footer.php");
                        exit;
                    } ?>




</ul>
<ul>
    <?php
    if (!isset($alternateDate->error) &&  isset($alternateDate->OTA_AirLowFareSearchRS->PricedItineraries)) {

        foreach ($alternateDate->OTA_AirLowFareSearchRS->PricedItineraries->PricedItinerary as $key => $flightData) {
            $airlineCode = $flightData->TPA_Extensions->ValidatingCarrier->Code;
            $cabinCode = $flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->Cabin->Cabin;
            $from_code = $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode;
            $to_code = $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption)]->FlightSegment[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[array_key_last($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption)]->FlightSegment)]->ArrivalAirport->LocationCode;
            $paxes = intval($this->input->get("adult")) + intval($this->input->get("child"));
            $from_date = $this->input->get("departOn");
            $to_date = $this->input->get("returnOn") ? $this->input->get("returnOn") : $this->input->get("departOn");

            $markup_value = getMarkAirline($airlineCode, $cabinCode, $from_code, $to_code, $paxes, $from_date, $to_date);

            $calculate_mark = 0;


            if (count($markup_value) > 0) {
                if ($markup_value["type"] == 0) {
                    $calculate_mark = round($markup_value["price"]);
                } else {
                    $calculate_mark = round(floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) * (floatval($markup_value["price"])) / 100);
                }
                $calculate_mark = +$calculate_mark;
            }
    ?>
            <li style="display:none" data-alternate="1" data-nearby="<?= $this->input->get("depart") != $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode ? 1 : 0 ?>" class="cheap-est" data-mark="<?= $calculate_mark ?>" data-act="<?= floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) ?>" data-price="<?= floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) + $calculate_mark ?>" data-airline="<?= $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->OperatingAirline->Code ?>">
                <?php
                if ($this->input->get("depart") != $flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode) {
                ?>
                    <h3 class="hd-grn">This flight is on a <b>nearby airport. and an alternate date</b> Please verify the dates and airport.</h3>
                <?php } else { ?>
                    <h3 class="hd-grn">This flight is on <b> an alternate date</b> Please verify the dates</h3>
                <?php

                }
                ?>
                <div class="child_results">
                    <div class="row ">

                        <div class="col-md-12">

                            <?php
                            foreach ($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption as $key => $OriginDestinationOption) {
                                $FlightSegmentsLast = count($OriginDestinationOption->FlightSegment) - 1;
                                $array_classWise[] = ["class" => $OriginDestinationOption->FlightSegment[0]->ResBookDesigCode, "air" => $OriginDestinationOption->FlightSegment[0]->OperatingAirline->Code];
                            ?>
                                <div data-class="<?= $OriginDestinationOption->FlightSegment[0]->ResBookDesigCode ?>" class="fight-detail-show" data-airline="<?= $OriginDestinationOption->FlightSegment[0]->OperatingAirline->Code ?>" data-stop="<?= $FlightSegmentsLast ?>">

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="flight-logo col-md-2 col-2">
                                                    <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $OriginDestinationOption->FlightSegment[0]->OperatingAirline->Code ?>.png" alt="" />
                                                    <span><?= getAirlineName($flightData->TPA_Extensions->ValidatingCarrier->Code) ?></span>
                                                </div>
                                                <div class="flight-check col-md-4 col-4">
                                                    <div class="custom-checkbox ">
                                                        <span class="time"><?= date("h:i", strtotime($OriginDestinationOption->FlightSegment[0]->DepartureDateTime)) ?> <small><?= date("a", strtotime($OriginDestinationOption->FlightSegment[0]->DepartureDateTime)) ?></small></span>
                                                        <span class="ct-code"><?= $OriginDestinationOption->FlightSegment[0]->DepartureAirport->LocationCode ?></span>
                                                        <span class="fx-date"><?= date("d,D M", strtotime($OriginDestinationOption->FlightSegment[0]->DepartureDateTime)) ?></span>
                                                    </div>
                                                </div>
                                                <?php ?>
                                                <div class="flight-icon col-md-2 col-2">
                                                    <i class="mdi mdi-airplane <?= $key == 0 ? "go" : "come" ?>" aria-hidden="true"></i>

                                                    <p><?= $key == 0 ? "Out-bound" : "In-bound" ?></p>

                                                </div>

                                                <div class="flight-check col-md-4 col-4">
                                                    <div class="custom-checkbox ">
                                                        <span class="time"><?= date("h:i", strtotime($OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalDateTime)) ?> <small><?= date("a", strtotime($OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalDateTime)) ?></small></span>
                                                        <span class="ct-code"><?= $OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalAirport->LocationCode ?></span>
                                                        <span class="fx-date"><?= date("d,D M", strtotime($OriginDestinationOption->FlightSegment[$FlightSegmentsLast]->ArrivalDateTime)) ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 total-time">
                                            <span class="time-text"><?= round(floatval($OriginDestinationOption->ElapsedTime) / 60) ?> H <?= round(floatval($OriginDestinationOption->ElapsedTime - $timeToBeMinusVal) % 60) ?> M</span>
                                            <span class="time-text"><?= count($OriginDestinationOption->FlightSegment) - 1 == 0 ? "Non-Stop" : (count($OriginDestinationOption->FlightSegment) - 1) . " Stop(s)"; ?> </span>
                                        </div>
                                    </div>
                                    <?= $key == 0 ? "<hr>" : "" ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="book-show">
                    <div class="row">
                        <div class="col-md-2">

                            <div class="show-m-del">
                                <button onclick="$(this).parent().parent().parent().parent().next('.show-more-details').fadeToggle(500)"><i class="mdi mdi-file-document-outline" aria-hidden="true"></i> Show Details</button>
                                <!-- <button class="sha-re"><i class="mdi mdi-email-plus-outline" aria-hidden="true"></i>Share Details</button> -->
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="price-show">
                                <div class="seats">

                                    <span class="caps"><?= getCabinType($flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->Cabin->Cabin) ?></span></br>
                                    <span class="caps"><?= $flightData->AirItineraryPricingInfo[0]->FareInfos->FareInfo[0]->TPA_Extensions->SeatsRemaining->Number ?> seats remaining</span>
                                </div>
                                <?php

                                $classWiseMarkup = getMarkupByClass($array_classWise, floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount));
                                if ($classWiseMarkup != 0) {
                                    $calculate_mark = $classWiseMarkup;
                                }
                                ?>
                                <div class="fare">
                                    AUD <?= number_format(floatval($flightData->AirItineraryPricingInfo[0]->ItinTotalFare->TotalFare->Amount) + $calculate_mark, 2, '.', '') ?>
                                </div>

                            </div>



                        </div>
                        <div class="col-md-3 for-call-set">

                            <a href="tel:041-037-4786">
                                <h3>Get unpublished Deals</h3>
                                <p>Call: 041-037-4786</p>
                            </a>

                        </div>

                        <div class="col-md-3">
                            <div class="select-bt">
                                <button onclick="window.location.href = '<?= base_url("Result/form/") ?><?= $flightData->TPA_Extensions->TagID ?>/<?= $this->input->get("adult") ?>/<?= $this->input->get("child") ?>/<?= $this->input->get("infant") ?>/<?= $this->input->get("seniors") ?>'">Select</button>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="show-more-details">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="left-show-flight">
                                <?php
                                foreach ($flightData->AirItinerary->OriginDestinationOptions->OriginDestinationOption as $key2 => $OriginDestinationOption) {
                                    foreach ($OriginDestinationOption->FlightSegment as $FlightSegment) {
                                ?>
                                        <div class="show-divide-set">
                                            <h2><?= $FlightSegment->DepartureAirport->LocationCode ?>, <?= $FlightSegment->ArrivalAirport->LocationCode ?> ‎(<?= round(floatval($FlightSegment->ElapsedTime) / 60) ?>h <?= round(floatval($FlightSegment->ElapsedTime)) % 60 ?>m) ‎(<?= $key2 == 0 ? "Outbound" : "Indbound" ?>)</h2>
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="row">
                                                        <div class="col-md-4 col-6">
                                                            <div class="show-more-info">
                                                                <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $FlightSegment->OperatingAirline->Code ?>.png" alt="" /></br>
                                                                <span class="fl-nm"><?= $FlightSegment->OperatingAirline->Code ?> - <?= $FlightSegment->OperatingAirline->FlightNumber ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-6">

                                                            <div class="terminal-detail">
                                                                <span><?= getLocName($FlightSegment->DepartureAirport->LocationCode) ?></span>

                                                            </div>
                                                            <div class="flight-time-date">
                                                                <?= date("M d, D,h:i a", strtotime($FlightSegment->DepartureDateTime)) ?> </br>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-7 col-6">
                                                            <div class="terminal-detail">

                                                                <span> <?= getLocName($FlightSegment->ArrivalAirport->LocationCode) ?></span>
                                                            </div>
                                                            <div class="flight-time-date">

                                                                <?= date("M d, D,h:i a", strtotime($FlightSegment->ArrivalDateTime)) ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-6">
                                                            <div class="same-day">
                                                                <span> <?= round($FlightSegment->ElapsedTime / 60) ?> H <?= round(($FlightSegment->ElapsedTime - $timeToBeMinusVal) % 60) ?> m,</span>
                                                                Equipment: <?= $FlightSegment->Equipment[0]->AirEquipType ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                <?php
                                    }
                                }
                                ?>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="right-show-flight">
                                <h3>Fare Details</h3>
                                <ul>
                                    <?php
                                    $fare = 0.0;
                                    foreach ($flightData->AirItineraryPricingInfo[0]->PTC_FareBreakdowns->PTC_FareBreakdown as $key => $PTC_FareBreakdown) {
                                    ?>
                                        <li>
                                            <?= $PTC_FareBreakdown->PassengerTypeQuantity->Code ?> x <?= $PTC_FareBreakdown->PassengerTypeQuantity->Quantity ?> <span>AUD <?= number_format(floatval($PTC_FareBreakdown->PassengerFare->TotalFare->Amount) * intval($PTC_FareBreakdown->PassengerTypeQuantity->Quantity) + $calculate_mark - (isset($PTC_FareBreakdown->PassengerFare->Taxes) ? floatval($PTC_FareBreakdown->PassengerFare->Taxes->TotalTax->Amount) : 0), 2, '.', '') ?> </span>
                                        </li>


                                        <li>
                                            Tax <span> AUD <?= isset($PTC_FareBreakdown->PassengerFare->Taxes) ? $PTC_FareBreakdown->PassengerFare->Taxes->TotalTax->Amount : 0 ?></span>
                                        </li>

                                    <?php
                                        $fare = $fare + ($PTC_FareBreakdown->PassengerFare->TotalFare->Amount + $calculate_mark);
                                    }
                                    ?>
                                </ul>

                                <div class="total-pay">
                                    Total Price
                                    <span>AUD <?= number_format($fare, 2, '.', '') ?> </span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </li>
        <?php
        }
    } else {
        ?>
        <li>
            <div class="no-item-set">
                <img src="<?= base_url("") ?>media/images/igt.png" alt="" />
                <p>
                    Error <br>
                    No results were found matching your search criteria. Please go back and try again.Unfortunately, no flights met your search criteria for the airports you selected.
                </p>
                <p> <b>Possible Causes</b></p>
                <p>This could be peak travel time for your destination.</p>
                <p> Your search may have been restricted by travel dates, airline, stops, or fare class.</p>
                <p> <b> What you can do</b></p>
                <p> Search for alternate/different dates.</p>
                <p> Try a +/- 1 day flexible date search.</p>
                <p> Include all airlines or stops in your search.</p>
                <p> Please <a href="<?= base_url() ?>">click here</a> to perform a new search.</p>

            </div>
        </li>
    <?php } ?>




</ul>



</div>




</div>




</div>
</div>


<aside id="divPopup" class="still-searching appear is--fixed" style=" display: none; ">
    <div class="still-searching__bar load03"></div>
    <div class="still-searching__wrapper container txt-center">
        <h2>
            <i class="mdi mdi-timer-sand"></i>Processing Request
        </h2>
    </div>
</aside>
<?php
include_once("includes/footer.php");
?>
<script>
    setTimeout(() => {
        $('.loading-popup-off').show();
    }, 4000);
    $('.cut-close').click(() => {
        $('.loading-popup-off').hide();
    });
</script>