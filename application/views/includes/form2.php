<div class="booking-selection">

    <!--<ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Flight</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hotel</a>
        </li>
    </ul>-->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane  active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="search-box1">


                <form name="frm" id="sformdata" class="form" method="get" action="<?= base_url() ?>Result">

                    <input type="hidden" name="submitForm" value="flights" />

                    <h3>Book Flight With Us</h3>
                    <div class="element-radio">
                        <div class="column activebutton">
                            <input type="radio" name="trip" value="round" id="phone_yes" checked />
                            <span>Round trip</span></div>
                        <div class="column1">
                            <input type="radio" name="trip" value="oneway" id="phone_no" class="radioBtn" />
                            <span>One way</span><br />
                        </div>
                        <div class="column3">
                            <input type="radio" name="trip" value="multi" id="multi-set" class="radioBtn" />
                            <span>Multi city</span><br />
                        </div>
                    </div>
                    <div class="clear"></div>


                    <div class="lowerform">
                        <div id="ordinary">
                            <div class="element-input">
                                <label>Flying From</label>
                                <input placeholder="Origin" class="large" required="" value="LOS ANGELES: INTERNATIONAL USA (LAX), LAX" type="text" id="flight-from" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                <input type="hidden" value="LAX" name="depart" id="flight-from2" />

                            </div>
                            <div class="element-input">
                                <label>Flying To</label>
                                <input placeholder="Destination" value=" MIAMI: INTERNATIONAL USA (MIA), MIA" required="" class="large" type="text" id="flight-to" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                <input type="hidden" value="MIA" name="arrival" id="flight-to2" />

                            </div>

                            <div class="element-date">
                                <label for="">Departing</label>
                                <input id="checkin" placeholder="Depart" required="" value="<?= date("Y-m-d") ?>" class="large-date" type="text" name="departOn[]" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                            </div>
                            <div class="element-date">

                                <label for="">Returning</label>
                                <input id="checkout" required="" placeholder="Return" value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +2 days")); ?>" class="large-date" type="text" name="returnOn" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                            </div>
                        </div>
                        <div style="display: none" id="for-multicity">

                            <div class="element-input">
                                <label>Flying From</label>
                                <input placeholder="Origin" class="large" value="" type="text" id="flight-from-multi1" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                <input type="hidden" value="" name="depart-multi[]" id="flight-from2-multi1" />

                            </div>
                            <div class="element-input">
                                <label>Flying To</label>
                                <input placeholder="Destination" value="" class="large" type="text" id="flight-to-multi1" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                <input type="hidden" value="" name="arrival-multi[]" id="flight-to2-multi1" />
                            </div>
                            <div class="element-date">
                                <label for="">Departing</label>
                                <input id="checkin-multi1" placeholder="Depart" value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +3 days")); ?>" class="large-date" type="text" name="departOn[]]" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                            </div>
                            <div class="clearfix"></div>
                            <div id="repeat-from-here1">
                                <div class="element-input">
                                    <label>Flying From</label>
                                    <input placeholder="Origin" class="large" value="" type="text" id="flight-from-multi2" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                    <input type="hidden" value="" name="depart-multi[]" id="flight-from2-multi2" />

                                </div>

                                <div class="element-input">
                                    <label>Flying To</label>
                                    <input placeholder="Destination" value="" class="large" type="text" id="flight-to-multi2" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                    <input type="hidden" value="" name="arrival-multi[]" id="flight-to2-multi2" />
                                </div>
                                <div class="element-date">
                                    <label for="">Departing</label>
                                    <input id="checkin-multi2" placeholder="Depart" value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +5 days"));  ?>" class="large-date" type="text" name="departOn[]" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                                </div>
                                <br>
                                <a class="addMore" href="javascript:;" onclick="$('#repeat-from-here2').show();$(this).hide()"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                            </div>

                            <div class="clearfix"></div>
                            <div style="display: none" id="repeat-from-here2">
                                <div class="element-input">
                                    <label>Flying From</label>
                                    <input placeholder="Origin" class="large" value="" type="text" id="flight-from-multi3" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                    <input type="hidden" value="" name="depart-multi[]" id="flight-from2-multi3" />
                                </div>

                                <div class="element-input">
                                    <label>Flying To</label>
                                    <input placeholder="Destination" value="" class="large" type="text" id="flight-to-multi3" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                                    <input type="hidden" value="" name="arrival-multi[]" id="flight-to2-multi3" />
                                </div>
                                <div class="element-date">
                                    <label for="">Departing</label>
                                    <input id="checkin-multi3" placeholder="Depart" value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +9 days")); ?>" class="large-date" type="text" name="departOn[]" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                                </div>
                                <br>
                                <a class="addMore" href="javascript:;" onclick="$('#repeat-from-here2').hide();$('.addMore').show()"> <i class="fa fa-times" aria-hidden="true"></i> </a>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="element-adult">
                            <label>Passenger</label>
                            <input required="" readonly="" value="1" placeholder="Select" onclick="$(this).next('ul').toggle();" class="large-date" autocomplete="off" type="text" name="" id="passenger" style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right;" />
                            <ul class="ulPassenger">
                                <li>
                                    <div class="ad-cut">
                                        <i class="fa fa-user" aria-hidden="true"></i> Adult (+12)
                                    </div>

                                    <div class="qty ">
                                        <span class="minus  minusadt bg-dark">-</span>
                                        <input type="number" class="count countAdt" name="adultC" value="1">
                                        <span class="plus plusadt bg-dark">+</span>
                                    </div>
                                </li>
                                <input type="hidden" name="adult" value="1">
                                <input type="hidden" name="child" value="0">
                                <input type="hidden" name="infant" value="0">

                                <li>
                                    <div class="ad-cut">
                                        <i class="fa fa-user" aria-hidden="true"></i> Children (2-12)
                                    </div>
                                    <div class="qty ">
                                        <span class="minus minuschd bg-dark">-</span>
                                        <input type="number" class="count countChd" name="childC" value="0">
                                        <span class="plus  pluschd bg-dark">+</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="ad-cut">
                                        <i class="fa fa-user" aria-hidden="true"></i> Infant (0-23m)
                                    </div>
                                    <div class="qty ">
                                        <span class="minus  minusinf bg-dark">-</span>
                                        <input type="number" class="count countInf" name="infantC" value="0">
                                        <span class="plus plusinf bg-dark">+</span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="element-adult">
                            <label>Cabin</label>
                            <select name="cabin" class="large-adult" style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right;">
                                <option value="ECONOMY">Economy</option>
                                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                <option value="BUSINESS">Business </option>
                                <option value="FIRST">First Class</option>
                            </select>
                        </div>

                        

                        <div class="element-search">
                            <button name="submit" id="submit" value="Search Flight" type="submit" class="search-button">BOOK NOW <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>

                        </div>
                    </div>


                </form>



            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="search-box1">


                <form name="frm" id="sformdata2" class="form" method="post" action="<?= base_url() ?>Hotel/sendQuery">

                    <input type="hidden" name="submitForm" value="hotels" />

                    <h3>Find your best Hotel</h3>
                    <div class="lowerform">
                        <div class="element-input">
                            <label>Destination</label>
                            <input placeholder="Destination" class="forhotel-dest" required="" type="text" name="destination" id="destination" style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" onclick="if (this.value != '') {
                                        this.value = ''
                                    }" />
                            <input type="hidden" name="to" id="destination2" />
                        </div>


                        <div class="element-date">
                            <label for="">Check In</label>
                            <input id="departOn" placeholder="Depart" required="" class="large-date" type="text" name="departOn" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                        </div>
                        <div class="element-date">
                            <label for="">Check Out</label>
                            <input id="returnOn" required="" placeholder="Return" class="large-date" type="text" name="returnOn" style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                        </div>
                        <div class="element-adult">
                            <label>Room Type</label>
                            <select name="room_star" id="room-type" class="large-adult" style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right">
                                <option value="2">Budget Hotels </option>
                                <option value="3">3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
                                <option value="7">7 Star </option>

                            </select>
                        </div>
                        <div class="element-adult">
                            <label>Room</label>
                            <select name="room" id="room" class="large-adult" style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right">
                                <option value="1">1 Room</option>
                                <option value="2">2 Room</option>
                                <option value="3">3 Room</option>
                                <option value="4">4 Room</option>
                            </select>
                        </div>

                        <div id="copyMe">
                            <div class="element-adult">
                                <label>Adult</label>
                                <select name="adult[]" class="large-adult" required="" style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right;">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                    <option value="5">5 Adults</option>
                                    <option value="6">6 Adults</option>
                                    <option value="7">7 Adults</option>
                                    <option value="8">8 Adults</option>
                                    <option value="9">9 Adults</option>
                                </select>
                            </div>



                            <div class="element-adult">
                                <label>Children</label>
                                <select name="child[]" data-room="1" class="large-adult" style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right;">
                                    <option value="">0 Children</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>



                            <div id="age" class="chilld-div ">

                            </div>


                        </div>
                    </div>

                    <div class="clear"></div>
                    <div id="roomSpace" class="lowerform chilld-div ">
                    </div>
                    <div class="lowerform  ">
                        <div class="element-user-dtl">
                            <label>Name</label>
                            <input placeholder="Enter Name" required="" class="" type="text" name="leadPassenger" />
                        </div>
                        <div class="element-user-dtl">
                            <label>Email</label>
                            <input placeholder="Enter Mail" required="" class="" type="email" name="leadEmail" />
                        </div>
                        <div class="element-user-dtl">
                            <label>Phone No</label>
                            <input placeholder="Enter No" type="tel" required="" class="" pattern="[1-9]{1}[0-9]{9}" name="leadContact" />
                        </div>
                    </div>



                    <div class="element-search">
                        <input name="submit" id="submit" value="Search Hotel" type="submit" class="search-button">
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>