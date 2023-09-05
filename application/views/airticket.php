<!DOCTYPE html>
<html>

<head>
    <title>Tourcruiser Inc. : Airline ticket</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <style>
        body {
            background-color: fff;
        }

        table {
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid #d8d5d5;
        }

        .table-head {}

        .table-head thead {
            background-color: #1692b7;
            color: #fff;
        }

        .table-head th a {
            color: #fff
        }

        .table-head .info {
            background-color: rgba(167, 167, 167, 0);
            /* border: #000 1px solid; */
            color: #7c7c7c;
        }

        .table-head .details {
            background-color: #ffffff;
        }

        .table-head .date {
            color: #ffffff;
            font-size: 22px !important;
            font-weight: 500;
            background-color: #1692b7;
        }

        .table-head .flight {
            color: #555555;
            font-weight: 600;
            font-size: 18px;
        }

        .table-head .details tr {
            color: #636363;
            font-size: 14px;
            font-weight: 500;
        }

        .table-head .details tr td {
            border-top: none;
            font-size: 16px;
        }

        .table-head .info tr th {
            border-bottom: none;
        }

        .table-head .details tr .dep {
            font-weight: 600;
        }

        .table-head .details tr .arr {
            font-weight: 600;
        }

        .table-head .info tr th td {
            border-top: none;
        }

        .table>thead>tr>td {}

        .table-head h1 {
            font-size: 24px;
            color: #2196f3;
            font-weight: 500;
            margin: 0;
            padding: 7px 0px;
        }

        .table-head .details .refund {
            color: #ff4c4c;
            font-size: 14px;
        }

        .table-head .travl {
            padding: 15px 16px;
        }

        .table-head .trip {
            font-size: 21px;
        }

        .table-head .policy {}

        .table-head .policy h1 {
            font-size: 18px;
            font-weight: 500;
        }

        .table-head .policy p {
            font-size: 10px;
            font-weight: 100;
            color: #868686;
        }

        @media print {
            body {
                background-color: fff;
            }

            table {
                border-collapse: collapse;
            }

            table,
            td,
            th {
                border: 1px solid #d8d5d5;
            }

            .table-head {}

            .table-head thead {
                background-color: #1692b7;
                color: #fff;
            }

            .table-head th a {
                color: #fff
            }

            .table-head .info {
                background-color: rgba(167, 167, 167, 0);
                /* border: #000 1px solid; */
                color: #7c7c7c;
            }

            .table-head .details {
                background-color: #ffffff;
            }

            .table-head .date {
                color: #ffffff;
                font-size: 22px !important;
                font-weight: 500;
                background-color: #1692b7;
            }

            .table-head .flight {
                color: #555555;
                font-weight: 600;
                font-size: 18px;
            }

            .table-head .details tr {
                color: #636363;
                font-size: 14px;
                font-weight: 500;
            }

            .table-head .details tr td {
                border-top: none;
                font-size: 16px;
            }

            .table-head .info tr th {
                border-bottom: none;
            }

            .table-head .details tr .dep {
                font-weight: 600;
            }

            .table-head .details tr .arr {
                font-weight: 600;
            }

            .table-head .info tr th td {
                border-top: none;
            }

            .table>thead>tr>td {}

            .table-head h1 {
                font-size: 24px;
                color: #2196f3;
                font-weight: 500;
                margin: 0;
                padding: 7px 0px;
            }

            .table-head .details .refund {
                color: #ff4c4c;
                font-size: 14px;
            }

            .table-head .travl {
                padding: 15px 16px;
            }

            .table-head .trip {
                font-size: 21px;
            }

            .table-head .policy {}

            .table-head .policy h1 {
                font-size: 18px;
                font-weight: 500;
            }

            .table-head .policy p {
                font-size: 10px;
                font-weight: 100;
                color: #868686;
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147099667-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-147099667-1');
    </script>
</head>



<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-head">


                <thead>
                    <tr>
                        <th colspan="3" class="trip">Your Trip Details</th>

                        <th colspan="2"> <a class="btn btn-xs btn-success" href="<?= base_url() ?>">Go to home</a> </th>
                    </tr>
                </thead>
                <thead class="info">
                    <tr>
                        <th colspan="3" class="travl">Traveler</th>

                        <th>Booking Refrence Number</th>
                        <th>Booking Date<br></th>

                    </tr>
                    <tr class="del">
                        <td colspan="3">
                            <?php foreach ($ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->CustomerInfo->PersonName as $key => $PersonName) { ?>
                                <?= $PersonName->Surname ?> <?= $PersonName->GivenName ?> <br>
                            <?php } ?>
                        </td>
                        <td><?= $ticket->CreatePassengerNameRecordRS->ItineraryRef->ID ?></td>
                        <td><?= date("D,d-M-Y", strtotime($ticket->CreatePassengerNameRecordRS->ApplicationResults->Success[0]->timeStamp)) ?>
                        </td>

                    </tr>

                </thead>

                <tbody class="details">

                    <?php

                    foreach ($ticket->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment  as $fkey => $FlightSegment) {
                        ?>
                        <tr>

                            <td colspan="5" class="date">
                                <?= explode("T", $FlightSegment->DepartureDateTime)[0] . "-" . date("Y") ?>
                                <?= explode("T", $FlightSegment->DepartureDateTime)[1] ?></td>
                        </tr>
                        <tr>
                            <td><img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $FlightSegment->MarketingAirline->Code ?>.png" alt="" /> <?= getAirlineName($FlightSegment->MarketingAirline->Code) ?> </td>
                            <td class="flight"><?= $FlightSegment->MarketingAirline->Code ?>
                                <?= $FlightSegment->MarketingAirline->FlightNumber ?></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td class="dep">Departure (m-d-y)</td>
                            <td><?= explode("T", $FlightSegment->DepartureDateTime)[0] . "-" . date("Y") ?>
                                <?= explode("T", $FlightSegment->DepartureDateTime)[1] ?></td>
                            <td><?= $FlightSegment->OriginLocation->LocationCode ?></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td class="dep">Arrival (m-d-y) </td>
                            <td><?= ((explode("T", $FlightSegment->ArrivalDateTime)[0] . "-" . date("Y"))) ?>
                                <?= explode("T", $FlightSegment->ArrivalDateTime)[1] ?></td>
                            <td><?= $FlightSegment->DestinationLocation->LocationCode ?></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td> </td>
                            <td>Duration</td>
                            <td></td>
                            <td><?= $ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->ItineraryInfo->ReservationItems->Item[$fkey]->FlightSegment[0]->ElapsedTime ?>
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td> </td>
                            <td>Distance</td>
                            <td></td>
                            <td><?= $ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->ItineraryInfo->ReservationItems->Item[$fkey]->FlightSegment[0]->AirMilesFlown ?>
                                Miles</td>
                            <td></td>

                        </tr>
                        <tr>
                            <td> </td>
                            <td>Equipment</td>
                            <td></td>
                            <td> <?= $ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->ItineraryInfo->ReservationItems->Item[$fkey]->FlightSegment[0]->Equipment->AirEquipType ?>
                                <br>
                                Stop(s):<?= $ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->ItineraryInfo->ReservationItems->Item[$fkey]->FlightSegment[0]->StopQuantity ?>
                            </td>
                            <td></td>

                        </tr>
                        <?php
                            if (isset($ticket->CreatePassengerNameRecordRS->AirPrice)) {
                                ?>
                            <tr>
                                <td> </td>
                                <td>Class</td>
                                <td></td>
                                <td><?= getCabinType($ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->AirItineraryPricingInfo[0]->FareCalculationBreakdown[$fkey]->FareBasis->Cabin) ?>
                                </td>
                                <td></td>

                            </tr>

                    <?php }
                    } ?>
                    <tr>
                        <td> </td>
                        <td>Booking status</td>
                        <td></td>
                        <td><?= $ticket->CreatePassengerNameRecordRS->ApplicationResults->status ?></td>
                        <td></td>

                    </tr>

                    <?php
                    $calculate_mark = 0;
                    if (isset($ticket->CreatePassengerNameRecordRS->AirPrice)) {


                        $markup_value =  $this->session->userdata("markupdata") != null ?  json_decode(json_encode(json_decode($this->session->userdata("markupdata"))), TRUE) : null;

                        if (count($markup_value) > 0) {
                            if ($markup_value["type"] == 0) {
                                $calculate_mark =   round($markup_value["price"]);
                            } else {
                                $calculate_mark =   round(floatval($ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->TotalAmount) * (floatval($markup_value["price"])) / 100);
                            }
                        }
                        ?>

                        <tr>
                            <td> </td>
                            <td>Booking Price</td>
                            <td></td>
                            <td></td>
                            <td><?= $ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->CurrencyCode ?>
                                <?= floatval($ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->TotalAmount) + $calculate_mark ?>
                            </td>

                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5" class="refund">1. This is non-refundable unless otherwise stated*<br>
                            2. All fares are not guaranteed until ticketed*<br>
                            3. Tickets are Non – refundable until specified*<br>
                            4. Confirmed tickets can be voided if within 24 hours of booking, post 24 hours, standard
                            airlines rules apply*


                        </td>
                    </tr>



                </tbody>

                <thead class="info">
                    <tr>
                        <th colspan="3" class="travl">Agency Name</th>
                        <th>Email Id</th>
                        <th>Customer Care<br></th>

                    </tr>
                    <tr class="del">
                        <td colspan="3"><b>faregarden Inc</b></td>
                        <td><b>bookings@faregarden.com</b></td>
                        <td><b>123-456-7890</b></td>

                    </tr>

                </thead>
                <tfoot>
                    <tr>
                        <th colspan="4">
                            &nbsp;
                        </th>
                        <th>
                            <img style="width:120px" src="<?= base_url() ?>frontend/img/logo.png" alt="">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="5" class="policy">
                            <h1>Payment Policy:</h1>
                            <p> We accept credit cards and debit cards issued in US, Canada and several other countries
                                as listed in the billings section. We also accept AE/AP billing addresses.</p>
                            <p> 1. Please note: your credit/debit card may be billed in multiple charges totaling the
                                final total price. If your credit/debit card or other form of payment is not processed
                                or accepted for any reason, we will notify you within 24 hours (it may take longer than
                                24 hours for non credit/debit card payment methods). Prior to your form of payment being
                                processed and accepted successfully, if there is a change in the price of air fare or
                                any other change, you may be notified of this change and only upon such notification you
                                have the right to either accept or decline this transaction. If you elect to decline
                                this transaction, you will not be charged.</p>
                            <p> 2. Our Post Payment Price Guarantee: Upon successful acceptance and processing of your
                                payment (credit/debit card), we guarantee that we will honor the total final quoted
                                price of the airline tickets regardless of any changes or fluctuation in the price of
                                air fare.

                                Please note: all hotel, car rental and tour/activity bookings are only confirmed upon
                                delivery of complete confirmation details to the email you provided with your
                                reservation. In some cases, pre-payment may be required to receive confirmation.
                            </p>

                            <p>
                                In order to provide you with further protection, when certain transactions are
                                determined to be high-risk by our systems, we will not process such transactions unless
                                our credit card verification team has determined that it's safe to process them. In
                                order to establish validity of such transactions, we may contact you or your bank.
                            </p>

                        </th>

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</body>

</html>