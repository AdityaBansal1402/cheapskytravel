<div class="flight-format">
    <div class="over-lap-in">
        <div class="header-set">
            <div class="logo-left">
            </div>


            <div class="logo-right">
                <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->MiscInformation->HeaderInformation[0]->ValidatingCarrier->Code ?>.png" alt="" />

                <?= $ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->MiscInformation->HeaderInformation[0]->ValidatingCarrier->Code ?>

            </div>

        </div>

        <div class="status-area">
            <div class="left-set">
                Record Locator: <b><?= $ticket->CreatePassengerNameRecordRS->ItineraryRef->ID ?></b>
            </div>
            <div class="right-set">
                Status: <b><?= $ticket->CreatePassengerNameRecordRS->ApplicationResults->status ?></b> -<?= date(" M d, Y", strtotime($ticket->CreatePassengerNameRecordRS->ApplicationResults->Success[0]->timeStamp)) ?>
            </div>
        </div>
        <div class="heading-title">
            Your Itinerary
        </div>
        <table>
            <thead>
                <tr>
                    <th rowspan="2" colspan="1">Carrier</th>
                    <th rowspan="2" colspan="1">Flight No.</th>
                    <th rowspan="1" colspan="2">Departing</th>

                    <th rowspan="1" colspan="2">Arriving</th>
                    <th rowspan="2" colspan="1">Class</th>
                    <th rowspan="2" colspan="1">Number in party</th>
                </tr>
                <tr>
                    <th rowspan="2">City</th>
                    <th rowspan="2">Date & Time</th>
                    <th rowspan="2">City</th>
                    <th rowspan="2">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ticket->CreatePassengerNameRecordRS->AirBook->OriginDestinationOption->FlightSegment  as $fkey=> $FlightSegment) { ?>

                <tr>
                    <td> <img src="https://www.gstatic.com/flights/airline_logos/70px/<?= $FlightSegment->MarketingAirline->Code ?>.png" alt="" />
                        <?= getAirlineName($FlightSegment->MarketingAirline->Code) ?>
                    </td>
                    <td> <?= $FlightSegment->MarketingAirline->FlightNumber ?></td>
                    <td><?= $FlightSegment->OriginLocation->LocationCode ?></td>
                    <td><?= $FlightSegment->DepartureDateTime ?></td>
                    <td><?= $FlightSegment->DestinationLocation->LocationCode ?></td>
                    <td><?= $FlightSegment->ArrivalDateTime ?></td>
                    <td><?= getCabinType($ticket->CreatePassengerNameRecordRS->AirPrice[0]->PriceQuote->PricedItinerary->AirItineraryPricingInfo[0]->FareCalculationBreakdown[$fkey]->FareBasis->Cabin) ?></td>
                    <td><?= $FlightSegment->NumberInParty ?></td>
                </tr>
                <?php }
            
              
                ?>

            </tbody>
        </table>


        <div class="heading-title">
            Traveler information
        </div>


        <table>
            <thead>
                <tr>
                    <th rowspan="2" colspan="1">Sr. No.</th>
                    <th rowspan="2" colspan="1">Passenger first name</th>
                    <th rowspan="2" colspan="1">Passenger last name</th>


                </tr>

            </thead>
            <tbody>
                <?php foreach ($ticket->CreatePassengerNameRecordRS->TravelItineraryRead->TravelItinerary->CustomerInfo->PersonName as $key => $PersonName) { ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $PersonName->GivenName ?></td>
                    <td><?= $PersonName->Surname ?></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>

        <div class="content-st">

            <p>t is important that the billing address and phone number you provide are the address and phone number that your credit card company has on file for you. We will not be able to process your order if the information provided does not match.
                Most tickets are E-Tickets and will be issued as E-Tickets whenever possible.
                All ticket purchases are final and cannot be cancelled.
                All ticket purchases are non-refundable, non-exchangeable and non- transferable.
                Usually ticket exchanges once they are issued can not be made and will always incur substantial penalties, which may exceed the original cost of the ticket purchased. Please contact us for any assistance
                In some cases tickets do not qualify for frequent flyer mileage accrual or upgrades. Please check with individual Airline for details
                Seat assignments can be arranged through our service center or contacting the airlines directly or will be made at the airport on the day of departure.
                If this is an international trip, special travel documentation like visa may be required for each traveler. You are solely responsible for any and all such documentation.</p>

        </div>
    </div>

</div>