<body class="ptrn_a grdnt_a mhover_a">
<?php
include_once("includes/nav.php");

?>

<link rel="stylesheet" href="<?= base_url("admin_media/") ?>lib/datatables/css/demo_table_jui.css" media="all"/>

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
                                <th class="essential">Booking ID</th>
                                <th class="essential">Hotel Details</th>
                                <th class="essential">Room Details</th>
                                <th class="essential">Booking Details</th>
                                <th class="essential">Card Details</th>
                                <th class="essential">Pax Details</th>
                                <th class="essential">Booking Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php
                            foreach ($data as $key => $booking) {
                                $passenger = json_decode($booking->booking_data);
                                $ticket = json_decode($booking->hotel_data);


                                ?>
                                <td><?= $key + 1 ?></td>
                                <td><?= $booking->booking_id ?></td>
                                <td>
                                    <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->HotelName ?>
                                    <br>

                                    <b>Address: </b> <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->LocationInfo->Address->AddressLine1 ?>
                                    ,
                                    <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->LocationInfo->Address->CityName->value ?>
                                    ,
                                    <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->LocationInfo->Address->StateProv->StateCode ?>
                                    ,
                                    <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->LocationInfo->Address->PostalCode ?>
                                    ,
                                    <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->LocationInfo->Address->CountryName->value ?>

                                </td>
                                <td><?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelRateInfo->Rooms->Room[0]->RoomDescription->Name ?></td>
                                <td>
                                    <b>Checkin </b> <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelRateInfo->RateInfos->RateInfo[0]->StartDate ?>
                                    <br>
                                    <b>Checkout </b> <?= $ticket->HotelPriceCheckRS->PriceCheckInfo->HotelRateInfo->RateInfos->RateInfo[0]->EndDate ?>

                                </td>
                                <td>
                                    <b>Card holder name
                                        : </b> <?= $passenger->cardholderfname ?> <?= $passenger->cardholderlname ?>
                                    <br>
                                    <b>Card number : </b> <?= $passenger->card_number ?> <br>
                                    <b>Expiry : </b> <?= $passenger->exp_month ?>/<?= $passenger->exp_year ?> <br>
                                    <b>CVV : </b> <?= $passenger->cvv2 ?> <br>
                                    <b>Email : </b> <?= $passenger->cardholderemail ?> <br>
                                    <b>Address : </b> <?= $passenger->state ?>,<?= $passenger->city ?>
                                    ,<?= $passenger->zip ?> ,<?= $passenger->country ?> <br>

                                </td>
                                <td>
                                    <?php
                                    foreach ($passenger->ptype as $room_key => $rooms) {
                                        foreach ($rooms as $rom => $da) {
?>
                                            <b>Room :<?=$room_key?> =></b>
                                            <br>
                                            <span> <?=$da?> : <?=$passenger->title[$room_key][$rom]?>  <?=$passenger->fname[$room_key][$rom]?>  <?=$passenger->lname[$room_key][$rom]?> <?=isset($passenger->age[$room_key][$rom])?"Age ".$passenger->age[$room_key][$rom]:""?></span>
                                            <br>
                                            <span> <b>Email : </b><?=isset($passenger->email[$room_key][$rom])?$passenger->email[$room_key][$rom]:""?> </span>
                                    <?php
                                        }
                                    }
                                    ?>

                                </td>
                                <td> <?=$booking->datentime?> </td>
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
    <img class="sw_full" title="switch to full width" alt="" src="img/blank.gif"/>
    <img style="display:none" class="sw_fixed" title="switch to fixed width (980px)" alt="" src="img/blank.gif"/>
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
    $(document).ready(function () {
        //* common functions
        prth_common.init();

        if (!jQuery.browser.mobile) {
            prth_datatable.dte_1();


        } else {
            prth_datatable.mobile_dt();
        }
        ;
    });
</script>
</body>

</html>