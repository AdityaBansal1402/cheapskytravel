 <body class="ptrn_a grdnt_a mhover_a">
     <?php
        include_once("includes/nav.php");

        ?>

     <link rel="stylesheet" href="<?= base_url("admin_media/") ?>lib/datatables/css/demo_table_jui.css" media="all" />

     <div class="container">
         <?php
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            ?>
         <div class="row">
             <div class="twelve columns">
                 <div class="box_c">
                     <div class="box_c_heading cf box_actions">
                         <p>Data table</p>
                     </div>
                     <div class="box_c_content">

                         <div class="sepH_c">
                             <p class="inner_heading sepH_c">All Bookings</p>
                             <table cellpadding="0" cellspacing="0" border="0" class="display" id="dte_1">
                                 <thead>
                                     <tr>
                                         <th class="essential">SN</th>
                                         <th class="essential">Record Locator</th>
                                         <th class="essential">Passenger Details</th>
                                         <th class="essential">Card Details</th>
                                         <th class="essential">Flight</th>
                                         <th class="essential">Depart Details</th>
                                         <th class="essential">Arrival Details</th>
                                         <th class="essential">Booking Date</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        foreach ($data as $booking) {
                                            $passenger = json_decode($booking->request);
                                            $ticket = json_decode($booking->booking_data);
                                            ?>
                                         <tr class="">
                                             <td><?= $booking->id ?></td>
                                             <td>
                                                 <b style="color:red"><?= $booking->pnr ?></b> <br>
                                                 <?php
                                                        if (isset($ticket->CreatePassengerNameRecordRS->AirPrice[0])) {
                                                            ?>
                                                     <b>Total Price : </b>
                                                     <?= $ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->CurrencyCode ?> <?= $ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->TotalAmount ?><br>
                                                     <b>Markup value: </b> <?= $booking->markup_value ?><br>
                                                     <b>Grand Total : <?= floatval($ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->TotalAmount) + floatval($booking->markup_value) ?></b>
                                                 <?php } ?>
                                             </td>

                                             <td>


                                                 <?php foreach ($ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->CustomerInfo->PersonName as $key => $PersonName) { ?>
                                                     <b>Name :</b> <?= $PersonName->Surname ?> <?= $PersonName->GivenName ?> <br>
                                                 <?php } ?>
                                             </td>
                                             <td>
                                                  
                                                 <b>Card Holder Name : </b> <?= $passenger->cardholderfname ?> <?= $passenger->cardholderlname ?> <br>
                                                 <b>Card Number : </b> <?= $passenger->card_number ?> <br>
                                                 <b>Card Expiry : </b> <?= $passenger->exp_month ?> / <?= $passenger->exp_year ?> <br>
                                                 <b>Card Cvv : </b> <?= $passenger->cvv2 ?> <br>
                                                 <b>Email : </b> <?= $passenger->email[0] ?> <br>
                                                 <b>Contact : </b> <?= $passenger->contact[0] ?> <br>
                                             </td>
                                             <td> <img style="width:20px" src="https://www.gstatic.com/flights/airline_logos/70px/<?= $ticket->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment[0]->MarketingAirline->Code ?>.png" alt="" /> </td>
                                             <td>
                                                 <?php
                                                        foreach ($ticket->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment  as $fkey => $FlightSegment) {
                                                            ?>
                                                     <b>Depart Date : </b> <?= explode("T", $FlightSegment->DepartureDateTime)[0] . "-" . date("Y") ?> <?= explode("T", $FlightSegment->DepartureDateTime)[1] ?> <br>
                                                     <b> <?= getAirlineName($FlightSegment->MarketingAirline->Code) ?> : </b> <?= $FlightSegment->MarketingAirline->FlightNumber ?> <br>
                                                     <b>Deaprt Loc: </b> <?= $FlightSegment->OriginLocation->LocationCode ?> <br> <br>
                                                 <?php } ?>
                                             </td>
                                             <td>
                                                 <?php
                                                        foreach ($ticket->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment  as $fkey => $FlightSegment) {
                                                            ?>
                                                     <b>Arrival Date : </b> <?= explode("T", $FlightSegment->ArrivalDateTime)[0] . "-" . date("Y") ?> <?= explode("T", $FlightSegment->ArrivalDateTime)[1] ?> <br>
                                                     <b> <?= getAirlineName($FlightSegment->MarketingAirline->Code) ?> : </b> <?= $FlightSegment->MarketingAirline->FlightNumber ?> <br>
                                                     <b>Arrival Loc: </b> <?= $FlightSegment->DestinationLocation->LocationCode ?> <br> <br>
                                                 <?php } ?>
                                             </td>

                                             <td><?= $booking->datentime ?> </td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </div>
     <footer class="container" id="footer">
         <div class="row">
             <div class="twelve columns">

             </div>
         </div>
     </footer>
     <div class="sw_width">
         <img class="sw_full" title="switch to full width" alt="" src="img/blank.gif" />
         <img style="display:none" class="sw_fixed" title="switch to fixed width (980px)" alt="" src="img/blank.gif" />
     </div>

     <script src="<?= base_url("admin_media/") ?>js/jquery.min.js"></script>
     <script src="<?= base_url("admin_media/") ?>lib/jQueryUI/jquery-ui-1.8.18.custom.min.js"></script>
     <script src="<?= base_url("admin_media/") ?>js/s_scripts.js"></script>
     <script src="<?= base_url("admin_media/") ?>js/jquery.ui.extend.js"></script>
     <script src="<?= base_url("admin_media/") ?>lib/qtip2/jquery.qtip.min.js"></script>
     <script src="<?= base_url("admin_media/") ?>js/jquery.rwd-table.js"></script>
     <script src="<?= base_url("admin_media/") ?>lib/datatables/js/jquery.dataTables.min.js"></script>
     <script src="<?= base_url("admin_media/") ?>lib/datatables/js/dataTables.plugins.js"></script>
     <script src="<?= base_url("admin_media/") ?>lib/datatables/extras/ColVis/media/js/ColVis.min.js"></script>
     <script src="<?= base_url("admin_media/") ?>js/pertho.js"></script>
     <script>
         $(document).ready(function() {
             //* common functions
             prth_common.init();

             if (!jQuery.browser.mobile) {
                 prth_datatable.dte_1();


             } else {
                 prth_datatable.mobile_dt();
             };
         });
     </script>
 </body>

 </html>