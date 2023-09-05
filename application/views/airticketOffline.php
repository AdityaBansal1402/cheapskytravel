<!DOCTYPE html>
<html>

<head>
    <title><?= WEBSITE ?> : Airline ticket</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <style>
        body {
            background-color: fff;
        }

        .for-policy {}

        .for-policy p {
            font-size: 11px;
            color: #76809d;
        }

        .for-policy h3 {
            margin: 0;
            font-size: 15px;
            color: #d66b6b;
            padding-bottom: 10px;
            border-bottom: #b9b9b9 1px solid;
            margin-bottom: 13px;
            margin-top: 11px;
        }

        .container {
            width: 929px;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
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
            background-color: rgba(227, 163, 163, 0.15);
            border: #cecece 1px solid;
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
            font-size: 12px;
            vertical-align: middle;
            padding: 6px 10px;
        }

        .table-head .info tr th {
            border-bottom: none;
            vertical-align: middle;
            padding: 7px 6px;
            font-size: 13px;

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

        .head-set {
            overflow: hidden;
        }

        .head-set .logo {
            float: left;
            width: 17%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .head-set .logo img {
            width: 68%;
        }

        .head-set .pnr-set {
            float: right;
            text-align: right;
        }

        .head-set .pnr-set h3 {
            font-size: 16px;
        }

        .head-set .pnr-set p {}

        .top-detail {
            padding: 11px 14px;
            border: #adadad 1px solid;
        }

        .top-detail p {
            font-size: 12px;
        }

        .top-detail p a {
            color: #ed3d55;
        }

        .heading {
            background-color: #1676bd;
            padding: 6px 22px;
            overflow: hidden;
        }

        .del {}

        .for-bt {
            float: right;
            background-color: #d4001d;
            color: #fff;
            padding: 3px 9px;
            font-size: 13px;
            border-radius: 3px;
        }

        .for-price {
            text-align: right;
            font-size: 16px;
            color: #e15918;
            font-weight: 700;
        }

        .heading span {
            margin: 0;
            color: #fff;
            font-size: 16px;
            display: block;
            text-align: right;
            /* width: 89%; */
            float: right;
        }

        .heading h3 {
            margin: 0;
            color: #fff;
            font-size: 15px;

            float: left;
            padding: 3px 0px;
        }

        .heading span a {
            color: #ffb039;
        }

        @media print {
            body {
                background-color: fff;
            }

            .for-policy {}

            .for-policy p {
                font-size: 11px;
                color: #76809d;
            }

            .for-policy h3 {
                margin: 0;
                font-size: 15px;
                color: #d66b6b;
                padding-bottom: 10px;
                border-bottom: #b9b9b9 1px solid;
                margin-bottom: 13px;
                margin-top: 11px;
            }

            .container {
                width: 995px;
                margin: 0 auto;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            table,
            td,
            th {
                border: 1px solid #d8d5d5;
                width: 100%;
            }

            .table-head {}

            .table-head thead {
                background-color: #1692b7;
                color: #fff;
                width: 100%;
            }

            .table-head th a {
                color: #fff
            }

            .table-head .info {
                background-color: rgba(227, 163, 163, 0.15);
                border: #cecece 1px solid;
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
                font-size: 12px;
                vertical-align: middle;
                padding: 6px 10px;
            }

            .table-head .info tr th {
                border-bottom: none;
                vertical-align: middle;
                padding: 7px 6px;
                font-size: 13px;

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

            .head-set {
                overflow: hidden;
            }

            .head-set .logo {
                float: left;
                width: 17%;
                margin-top: 20px;
            }

            .head-set .logo img {
                width: 100%;
            }

            .head-set .pnr-set {
                float: right;
                text-align: right;
            }

            .head-set .pnr-set h3 {
                font-size: 16px;
            }

            .head-set .pnr-set p {}

            .top-detail {
                padding: 11px 14px;
                border: #adadad 1px solid;
            }

            .top-detail p {
                font-size: 12px;
            }

            .top-detail p a {
                color: #ed3d55;
            }

            .heading {
                background-color: #09277c;
                padding: 6px 22px;
                overflow: hidden;
            }

            .del {}

            .for-bt {
                float: right;
                background-color: #d4001d;
                color: #fff;
                padding: 3px 9px;
                font-size: 13px;
                border-radius: 3px;
            }

            .for-price {
                text-align: right;
                font-size: 16px;
                color: #e15918;
                font-weight: 700;
            }

            .heading span {
                margin: 0;
                color: #fff;
                font-size: 16px;
                display: block;
                text-align: right;
                /* width: 89%; */
                float: right;
            }

            .heading h3 {
                margin: 0;
                color: #fff;
                font-size: 15px;
                width: 20%;
                float: left;
                padding: 3px 0px;
            }

            .heading span a {
                color: #ffb039;
            }


        }
    </style>


</head>



<body>
    <div class="container">

        <div class="head-set">
            <div class="logo">
                <img src="<?= base_url("media/") ?>images/logo.png" alt="<?= WEBSITE ?>">
            </div>
            <div class="pnr-set">
                <h3>Booking Confirmation(PNR) XXXXXX</h3>
                <p> <strong>Reference No. :</strong> <?= $data->pnr ?></p>
            </div>


        </div>
        <div class="heading">

            <span>Need help, Our 24x7 Toll Free Support: <a href="tel:<?= TFN ?>"><?= TFN ?></a> </span>
        </div>
        <div class="top-detail">

            <p>Your Booking is Pending with booking reference number <strong>:<?= $data->pnr ?></strong></p>
            <p> If any query please contact our customer support at <a href="tel:<?= TFN ?>"><?= TFN ?></a> or send us an email at <a href="mailto:<?= EMAIL_S ?>"><?= EMAIL_S ?></a> and one of our travel expert will be pleased to assist you.In Such unlikely event, if your tickets cannot be processed for any reason you will be notified via email or by telephone and your payment will NOT be processed.</p>
        </div>

        <div class="table-responsive">
            <div class="heading">
                <h3> Traveler(s) Information</h3>
                <a class="for-bt" href="<?= base_url() ?>">Go to home</a>

            </div>
            <table class="table table-head">
                <?php

                $ticket = json_decode($data->offline_booking_data);
                $post = json_decode($data->request);
                ?>

                <thead class="info">

                    <tr>
                        <th style="width: 10" class="travl">S.No.</th>
                        <th class="travl"> Pax Type</th>
                        <th class="travl">Traveler Name</th>
                        <th class="travl"> Email</th>
                        <th class="travl"> Contact </th>
                        <th class="travl"> Gender</th>
                        <th class="travl"> Date of Birth</th>


                    </tr>
                </thead>
                <tbody class="details">
                    <?php

                    foreach ($post->fname as $key => $PersonName) { ?>
                        <tr class="del">
                            <td><?= $key + 1 ?></td>
                            <td><?= $post->ptype[$key] ?></td>
                            <td>
                                <?= $PersonName ?> <?= $post->lname[$key] ?> <br>
                            </td>
                            <td><?= isset($post->email[$key]) ? $post->email[$key] : "-" ?></td>
                            <td><?= $key == 0 ? (isset($post->contact[$key]) ? $post->contact[$key] : "-") : "-" ?></td>
                            <td><?= $post->gender[$key] ?></td>
                            <td><?= isset($post->dob[$key]) ? $post->dob[$key] : "-" ?></td>
                        </tr>
                    <?php } ?>

                </tbody>

            </table>
            <div class="heading">
                <h3> Flight Details</h3>


            </div>

            <table class="table table-head">
                <thead class="info">
                    <tr>
                        <th> Airline</th>
                        <th> Departure</th>
                        <th> Arrival </th>
                        <th> Class</th>
                        <th> Duration</th>

                    </tr>
                </thead>

                <tbody class="details">
                    <?php

                    foreach ($ticket->data->flightOffers[0]->itineraries  as $fkey => $itineraries) {
                        foreach ($itineraries->segments as $FlightSegment) {
                    ?>
                            <tr>
                                <td>

                                    <img width="40" src="https://www.gstatic.com/flights/airline_logos/70px/<?= $FlightSegment->carrierCode ?>.png" alt="" /> <br> <?= getAirlineName($FlightSegment->carrierCode) ?> <br>
                                    <strong>
                                        <?= $FlightSegment->carrierCode ?> <br> <?= $FlightSegment->number ?>
                                    </strong>
                                </td>
                                <td>
                                    <strong><?= getLocName($FlightSegment->departure->iataCode) ?></strong> <br>
                                    <?= explode("T", $FlightSegment->departure->at)[0] ?>
                                    <?= explode("T", $FlightSegment->departure->at)[1] ?>
                                </td>
                                <td>
                                    <strong><?= getLocName($FlightSegment->arrival->iataCode) ?></strong> <br>
                                    <?= explode("T", $FlightSegment->arrival->at)[0] ?>
                                    <?= explode("T", $FlightSegment->arrival->at)[1] ?>
                                </td>
                                <td><?= $ticket->data->flightOffers[0]->travelerPricings[0]->fareDetailsBySegment[0]->cabin ?></td>
                                <td> <?= str_replace(['PT', 'H', 'M'], [' ', 'H ', 'M'], $FlightSegment->duration)  ?></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>




            </table>
            <div class="heading">
                <h3> Price Info</h3>


            </div>
            <table class="table table-head">

                <tbody>
                    <tr>
                        <td><b> Total Price (inclusive all taxes and fee)</b></td>

                        <td class="for-price"><?= $ticket->data->flightOffers[0]->price->currency ?> <?= round(floatval($ticket->data->flightOffers[0]->price->total) + floatval($data->markup_value)) ?> <?= $this->session->userdata("currency"); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p style="font-size: 11px">
                                Please feel free to contact us to confirm your itinerary, or other special requests (Seats, Meals, Wheelchair, etc.) and luggage weight allowances (a number of airlines have recently made changes to the luggage weight limits) 72 hours prior to the departure date. We look forward to help you again with your future travel plans.
                            </p>
                        </td>
                    </tr>
                </tbody>

            </table>
            <div class="heading">
                <h3> Terms & Conditions</h3>


            </div>
            <table class="table table-head">

                <tbody>
                    <tr>
                        <td colspan="5" class="refund">1. This is non-refundable unless otherwise stated*<br>
                            2. All fares are not guaranteed until ticketed*<br>
                            3. Tickets are Non – refundable until specified*<br>
                        </td>
                    </tr>
                </tbody>

            </table>
            <div class="heading">
                <h3> Contact Info</h3>
            </div>
            <table class="table table-head">


                <thead class="info">
                    <tr>
                        <th colspan="3" class="travl">Agency Name</th>
                        <th>Email Id</th>
                        <th>Customer Care<br></th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="del">
                        <td colspan="3"><b><?= WEBSITE ?></b></td>
                        <td><b><?= EMAIL_B ?></b></td>
                        <td><b><?= TFN ?></b></td>

                    </tr>


                </tbody>

            </table>
            <table class="table table-head">
                <div class="heading">
                    <h3> Policy</h3>


                </div>


                <tbody>
                    <tr>
                        <td class="for-policy">
                            <h3>Payment Policy:</h3>
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
                        </td>

                    </tr>
                    <tr>
                        <td class="for-policy">
                            <h3>Change/ Cancellation Policy</h3>

                            <p>All travelers must confirm that their travel documents required are current and valid for their preferred destinations. The ticket(s) are refundable within 4 hours from the time of purchase ONLY for ticketed Airlines, at no extra cost. Once ticket is purchased, name changes are not allowed according to Airlines Policies, but some Specific Airlines allow minor corrections, usually involving 1-2 characters attracting a fees for this service. Prices do not include Baggage and Carry-On or other fees charged directly by the airline. Fares are not guaranteed until ticketed. Fare changes are subject to seat or class availability. All tickets are considered non-transferable & non-endorsable.</p>
                        </td>
                    </tr>



                </tbody>

            </table>

        </div>
    </div>

</body>

</html>