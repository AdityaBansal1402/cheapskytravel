<?php
include_once("includes/header.php");

?>
<div class="dashboard-set">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <div class=" dashboard-set-in">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Your Trips</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Hotel Bookings</a>
              <!--              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a> -->
            </div>
          </nav>


          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Booking Number</th>
                    <th>Main Passenger</th>
                    <th>#</th>
                    <th>Outbound Data</th>
                    <th>Inbound Data</th>
                    <th>Travel Date</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data as $detail) {
                    $post = json_decode($detail->request);
                    //  $booking = json_decode($detail->booking_data);
                    $booking = json_decode($detail->offline_booking_data);
                    echo "<pre>";
                    print_r($booking);
                    echo "</pre>";
                  ?>

                    <tr>
                      <td><?= $detail->pnr ?></td>
                      <td>
                        <?= $post->title[0] ?> <?= $post->fname[0] ?> <?= $post->lname[0] ?> <br>
                        <?= $post->contact[0] ?> <br>
                      </td>
                      <td> <img style="width:20px" src="https://www.gstatic.com/flights/airline_logos/70px/<?= $booking->data->flightOffers[0]->itineraries[0]->segments[0]->carrierCode ?>.png" alt="" /> </td>
                      <td>
                        <?php
                        foreach ($booking->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment  as $fkey => $FlightSegment) {
                        ?>
                          <b>Depart Date : </b> <?= explode("T", $FlightSegment->DepartureDateTime)[0] . "-" . date("Y") ?> <?= explode("T", $FlightSegment->DepartureDateTime)[1] ?> <br>
                          <b> <?= getAirlineName($FlightSegment->MarketingAirline->Code) ?> : </b> <?= $FlightSegment->MarketingAirline->FlightNumber ?> <br>
                          <b>Deaprt Loc: </b> <?= $FlightSegment->OriginLocation->LocationCode ?> <br>
                          <b>Passenger(s): </b> <?= $FlightSegment->NumberInParty ?> <br>

                        <?php } ?>
                      </td>
                      <td>
                        <?php
                        foreach ($booking->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment  as $fkey => $FlightSegment) {
                        ?>
                          <b>Arrival Date : </b> <?= explode("T", $FlightSegment->ArrivalDateTime)[0] . "-" . date("Y") ?> <?= explode("T", $FlightSegment->ArrivalDateTime)[1] ?> <br>
                          <b> <?= getAirlineName($FlightSegment->MarketingAirline->Code) ?> : </b> <?= $FlightSegment->MarketingAirline->FlightNumber ?> <br>
                          <b>Arrival Loc: </b> <?= $FlightSegment->DestinationLocation->LocationCode ?> <br>
                          <b>Passenger(s): </b> <?= $FlightSegment->NumberInParty ?> <br>
                        <?php } ?>
                      </td>
                      <td><?= $detail->datentime ?> </td>
                    </tr>

                  <?php } ?>


                </tbody>

              </table>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Booking Number</th>
                    <th>Main Passenger</th>
                    <th>Hotel name</th>
                    <th>Checkin </th>
                    <th>Checkout </th>
                    <th>Rooms</th>
                    <th>#</th>

                  </tr>
                </thead>
                <tbody>
                  <?php

                  foreach ($hotel as  $detail_h) {
                    $post_h = json_decode($detail_h->booking_data);
                    $booking_h = json_decode($detail_h->hotel_data);


                  ?>

                    <tr>
                      <td><?= $detail_h->booking_id ?></td>
                      <td>
                        <?= $post_h->title[0][0] ?> <?= $post_h->fname[0][0] ?> <?= $post_h->lname[0][0] ?> <br>
                        <?= $detail_h->first_contact ?> <br>
                      </td>
                      <td> <?= $booking_h->HotelPriceCheckRS->PriceCheckInfo->HotelInfo->HotelName ?> </td>
                      </td>
                      <td>
                        <?= $booking_h->HotelPriceCheckRS->PriceCheckInfo->HotelRateInfo->RateInfos->RateInfo[0]->StartDate ?>
                      </td>
                      <td>
                        <?= $booking_h->HotelPriceCheckRS->PriceCheckInfo->HotelRateInfo->RateInfos->RateInfo[0]->EndDate ?>

                      </td>
                      <td><?= count($post_h->title) ?> </td>
                      <td><a href="<?= base_url('Hotel/thanks/') ?><?= $detail_h->booking_id ?>"> View</a> </td>
                    </tr>

                  <?php } ?>


                </tbody>

              </table>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
            </div>
            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
              Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>


<?php
include_once("includes/footer.php");
?>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#example').DataTable();
</script>