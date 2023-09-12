<div class="booking-selection">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
         <button type="button" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
            role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-plane" aria-hidden="true"></i>
            Flight</button>
      </li>
   </ul>
   <div class="tab-content" id="myTabContent">
      <div class="tab-pane  active" id="home" role="tabpanel" aria-labelledby="home-tab">
         <div class="search-box1">
            <form name="frm" id="sformdata" class="form" method="get" action="<?= base_url() ?>Result">
               <input type="hidden" name="submitForm" value="flights" />
               <h3 id="flight-info">Book flight ticket with Cheapskytravel at the lowest prices</h3>
               <div class="element-radio d-flex">
                  <div class="column activebutton">
                     <input type="radio" name="trip" value="round" id="phone_yes" checked />
                     <span>Round Trip</span>
                  </div>
                  <div class="column1">
                     <input type="radio" name="trip" value="oneway" id="phone_no" class="radioBtn" />
                     <span>One Way</span><br />
                  </div>
                  <div class="column3">
                     <input type="radio" name="trip" value="multi" id="multi-set" class="radioBtn" />
                     <span>Multi City</span><br />
                  </div>
               </div>
               <div class="clear"></div>
               <div class="lowerform">
                  <div id="ordinary">
                     <div class="destination-box">
                        <div class="element-input exc">
                           <label>Flying From</label>
                           <input placeholder="Departing from?" class="large" required="" value="" type="text"
                              id="flight-from"
                              style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" />
                           <input type="hidden" value="LAX" name="depart" id="flight-from2" />
                        </div>
                        <div class="element-input">
                           <label>Flying To</label>
                           <input placeholder="Going to?" value="" required="" class="large" type="text" id="flight-to"
                              style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;" />
                           <input type="hidden" value="MIA" name="arrival" id="flight-to2" />
                        </div>
                     </div>
                     <div class="element-date">
                        <label for="">Departing</label>
                        <input id="checkin" placeholder="Depart" required="" value="<?= date("Y-m-d") ?>"
                           class="large-date" type="text" name="departOn[]"
                           style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                     </div>
                     <div class="element-date">
                        <label for="">Returning</label>
                        <input id="checkout" required="" placeholder="Return"
                           value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +2 days")); ?>" class="large-date"
                           type="text" name="returnOn"
                           style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                     </div>
                  </div>
                  <div style="display: none" id="for-multicity">
                     <div class="element-input">
                        <label>Flying From</label>
                        <input placeholder="Origin" class="large" value="" type="text" id="flight-from-multi1"
                           style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left"
                           onclick="if (this.value != '') {
                           this.value = ''
                           }" />
                        <input type="hidden" value="" name="depart-multi[]" id="flight-from2-multi1" />
                     </div>
                     <div class="element-input">
                        <label>Flying To</label>
                        <input placeholder="Destination" value="" class="large" type="text" id="flight-to-multi1"
                           style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;"
                           onclick="if (this.value != '') {
                           this.value = ''
                           }" />
                        <input type="hidden" value="" name="arrival-multi[]" id="flight-to2-multi1" />
                     </div>
                     <div class="element-date">
                        <label for="">Departing</label>
                        <input id="checkin-multi1" placeholder="Depart"
                           value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +3 days")); ?>" class="large-date"
                           type="text" name="departOn[]]"
                           style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                     </div>
                     <div class="clearfix"></div>
                     <div id="repeat-from-here1">
                        <div class="element-input">
                           <label>Flying From</label>
                           <input placeholder="Origin" class="large" value="" type="text" id="flight-from-multi2"
                              style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;"
                              onclick="if (this.value != '') {
                              this.value = ''
                              }" />
                           <input type="hidden" value="" name="depart-multi[]" id="flight-from2-multi2" />
                           <!-- <a href="javascript:void(0)" class="ex-icon" id="switch2"><img src="<?= base_url() ?>frontend/imgl/exchange-icon.svg"  /></a>-->
                        </div>
                        <div class="element-input">
                           <label>Flying To</label>
                           <input placeholder="Destination" value="" class="large" type="text" id="flight-to-multi2"
                              style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;"
                              onclick="if (this.value != '') {
                              this.value = ''
                              }" />
                           <input type="hidden" value="" name="arrival-multi[]" id="flight-to2-multi2" />
                        </div>
                        <div class="element-date">
                           <label for="">Departing</label>
                           <input id="checkin-multi2" placeholder="Depart"
                              value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +5 days")); ?>" class="large-date"
                              type="text" name="departOn[]"
                              style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                        </div>
                        <br>
                        <a class="addMore" href="javascript:;" onclick="$('#repeat-from-here2').show();$(this).hide()">
                           <i class="fa fa-plus" aria-hidden="true"></i> </a>
                     </div>
                     <div class="clearfix"></div>
                     <div style="display: none" id="repeat-from-here2">
                        <div class="element-input">
                           <label>Flying From</label>
                           <input placeholder="Origin" class="large" value="" type="text" id="flight-from-multi3"
                              style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;"
                              onclick="if (this.value != '') {
                              this.value = ''
                              }" />
                           <input type="hidden" value="" name="depart-multi[]" id="flight-from2-multi3" />
                        </div>
                        <div class="element-input">
                           <label>Flying To</label>
                           <input placeholder="Destination" value="" class="large" type="text" id="flight-to-multi3"
                              style="background: url(<?= base_url("frontend") ?>/img/loca.png) #fff no-repeat left;"
                              onclick="if (this.value != '') {
                              this.value = ''
                              }" />
                           <input type="hidden" value="" name="arrival-multi[]" id="flight-to2-multi3" />
                        </div>
                        <div class="element-date">
                           <label for="">Departing</label>
                           <input id="checkin-multi3" placeholder="Depart"
                              value="<?= date('Y-m-d', strtotime(date("Y-m-d") . " +9 days")); ?>" class="large-date"
                              type="text" name="departOn[]"
                              style="background:url(<?= base_url("frontend") ?>/img/cal2.png) #fff no-repeat right;   cursor: pointer;" />
                        </div>
                        <br>
                        <a class="addMore" href="javascript:;"
                           onclick="$('#repeat-from-here2').hide();$('.addMore').show()"> <i class="fa fa-times"
                              aria-hidden="true"></i> </a>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="element-adult">
                     <label>Passenger</label>
                     <input required="" readonly="" value="1" placeholder="Select"
                        onclick="$(this).next('ul').toggle();" class="large-date" autocomplete="off" type="text" name=""
                        id="passenger"
                        style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right;" />
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
                     <select name="cabin" class="large-adult"
                        style="background:url(<?= base_url("frontend") ?>/img/dd.png) #fff no-repeat right;">
                        <option value="ECONOMY">Economy</option>
                        <option value="PREMIUM_ECONOMY">Premium Economy</option>
                        <option value="BUSINESS">Business </option>
                        <option value="FIRST">First Class</option>
                     </select>
                  </div>
                  <div class="clearfix"></div>
                  <div class="element-search text-center">
                     <button name="submit" id="submit" value="Search Flight" type="submit" class="search-button">BOOK
                        NOW</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>