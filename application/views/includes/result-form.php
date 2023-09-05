<div class="form-area">
    <h2>Find your best Flight</h2>
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link <?= $this->input->get("trip") == 'oneway' ? "active" : "" ?>" data-toggle="tab" href="#menu1">One Way </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $this->input->get("trip") == 'round' ? "active" : "" ?>" data-toggle="tab" href="#home">Round Way</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $this->input->get("trip") == 'multi' ? "active" : "" ?>" data-toggle="tab" href="#home2">Multy City</a>
        </li>

    </ul>


    <div class="tab-content">
        <div id="menu1" class=" tab-pane fade <?= $this->input->get("trip") == 'oneway' ? "active show" : "" ?>">
            <form action="<?= base_url("Result") ?>" id="oneway">
                <div class="row">
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?= $this->input->get("depart") != null ? getLocName($this->input->get("depart")) : ""  ?>" id="depart1" type="text" required />
                            <input type="hidden" name="depart" value="<?= $this->input->get("depart") != null ? $this->input->get("depart") : "" ?>" id="depart_code1">
                            <label>From</label>
                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?= $this->input->get("arrival") != null ? getLocName($this->input->get("arrival")) : ""  ?>" id="arrival1" type="text" required />
                            <input type="hidden" name="arrival" value="<?= $this->input->get("arrival") != null ? $this->input->get("arrival") : "" ?>" id="arrival_code1">
                            <label>To</label>
                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="trip" value="oneway">
                <input type="hidden" name="page" value="1">
                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <input class="form-control" autocomplete="off" value="<?= $this->input->get("departOn")[0] != null ? $this->input->get("departOn")[0] : "" ?>" name="departOn[]" type="text" required id="datepicker" placeholder="Departing on" />
                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Adult</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="adult">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="adult" value="<?= $this->input->get("adult") ?>" class="form-control add-input input-number" value="1" min="1" max="9">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="adult">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Child</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="child">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="child" value="<?= $this->input->get("child") != '' ? $this->input->get("child") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="9">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="child">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">

                            <label for="">Infant (0-23 M)</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="infant">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="infant" value="<?= $this->input->get("infant") != '' ? $this->input->get("infant") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="4">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="infant">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label>Cabin</label>
                            <select name="cabin" class="form-control">
                                <option value="ECONOMY">Economy</option>
                                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                <option value="BUSINESS">Business </option>
                                <option value="FIRST">First Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label>Airline</label>
                            <select name="airline" class="form-control">
                                <option value="">All</option>
                                <?php foreach ($airlines as $a) { ?>
                                    <option value="<?= $a->code ?>"><?= $a->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />


                <div class="row">

                    <div class="col-md-12 search-btn">
                        <button> <i class="mdi mdi-map-search-outline " aria-hidden="true"></i> Search</button>

                    </div>
                </div>
            </form>
        </div>
        <div id="home" class="tab-pane fade <?= $this->input->get("trip") == 'round' ? "active show " : "" ?>">
            <form action="<?= base_url("Result") ?>">
                <div class="row">
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" id="depart2" value="<?= ($this->input->get("depart") != null)  ? getLocName($this->input->get("depart")) : ""  ?>" autocomplete="off" type="text" required />
                            <input type="hidden" name="depart" value="<?= $this->input->get("depart") != null ? $this->input->get("depart") : "" ?>" id="depart_code2">
                            <label>From</label>
                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" id="arrival2" value="<?= $this->input->get("arrival") != null ? getLocName($this->input->get("arrival")) : ""  ?>" autocomplete="off" type="text" required />
                            <input type="hidden" name="arrival" value="<?= $this->input->get("arrival") != null ? $this->input->get("arrival") : "" ?>" id="arrival_code2">
                            <label>To</label>
                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>
                        </div>
                    </div>
                    <input type="hidden" name="trip" value="round">
                    <input type="hidden" name="page" value="1">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <input class="form-control" type="text" name="departOn[]" value="<?= isset($this->input->get("departOn")[0]) ? $this->input->get("departOn")[0] : "" ?>" autocomplete="off" required id="datepicker1" placeholder="Departing on" />

                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" form-group">
                            <input class="form-control" name="returnOn" type="text" value="<?= ($this->input->get("returnOn") != null) ? $this->input->get("returnOn") : "" ?>" autocomplete="off" required id="datepicker2" placeholder="Returning on" />

                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Adult (12+)</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="adult">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="adult" value="<?= $this->input->get("adult") ?>" class="form-control add-input input-number" value="1" min="1" max="9">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="adult">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Child (2-12)</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="child">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="child" value="<?= $this->input->get("child") != '' ? $this->input->get("child") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="9">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="child">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">

                            <label for="">Infant (0-23 M)</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="infant">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="infant" value="<?= $this->input->get("infant") != '' ? $this->input->get("infant") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="4">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="infant">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <!-- <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Seniors(65+)</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="seniors">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>
                            <input type="text" name="seniors" value="<?= $this->input->get("seniors") != '' ? $this->input->get("seniors") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="4">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="seniors">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label>Cabin</label>
                            <select name="cabin" class="form-control">
                                <option value="ECONOMY">Economy</option>
                                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                <option value="BUSINESS">Business </option>
                                <option value="FIRST">First Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label>Airline</label>
                            <select name="airline" class="form-control">
                                <option value="">All</option>
                                <?php foreach ($airlines as $a) { ?>
                                    <option value="<?= $a->code ?>"><?= $a->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <hr />


                <div class="row">

                    <div class="col-md-12 search-btn">
                        <button> <i class="mdi mdi-map-search-outline " aria-hidden="true"></i> Search</button>

                    </div>
                </div>
            </form>
        </div>
        <div id="home2" class=" tab-pane fade <?= $this->input->get("trip") == 'multi' ? "active show" : "" ?>">

            <form action="<?= base_url("Result") ?>" id="oneway">
                <div class="row">
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?= ($this->input->get("depart-multi")[0] != null) ? getLocName($this->input->get("depart-multi")[0]) : ""  ?>" id="depart1-multi1" type="text" required />
                            <input type="hidden" name="depart-multi[]" value="<?= isset($this->input->get("depart-multi")[0]) ?  ($this->input->get("depart-multi")[0]) : ""  ?>" id="depart_code1_multi1">
                            <label>From</label>
                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?= ($this->input->get("arrival-multi")[0] != null) ? getLocName($this->input->get("arrival-multi")[0]) : ""  ?>" id="arrival1-mult1" type="text" required />
                            <input type="hidden" name="arrival-multi[]" value="<?= ($this->input->get("arrival-multi")[0] != null) ?  ($this->input->get("arrival-multi")[0]) : ""  ?>" id="arrival_code1_multi1">
                            <label>To</label>
                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="page" value="1">
                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <input type="hidden" name="departOn[]">
                            <input class="form-control" autocomplete="off" value="<?= (isset($this->input->get("departOn")[1]) &&  $this->input->get("departOn")[1] != null) ? $this->input->get("departOn")[1] : null ?>" name="departOn[]" type="text" required id="datepicker_multi1" placeholder="Departing on" />
                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?= ($this->input->get("depart-multi")[1] != null) ? getLocName($this->input->get("depart-multi")[1]) : ""  ?>" id="depart1-multi2" type="text" required />
                            <input type="hidden" name="depart-multi[]" value="<?= ($this->input->get("depart-multi")[1] != null) ?  ($this->input->get("depart-multi")[1]) : ""  ?>" id="depart_code1_multi2">
                            <label>From</label>
                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?= ($this->input->get("arrival-multi")[1] != null) ?  getLocName($this->input->get("arrival-multi")[1]) : ""  ?>" id="arrival1-multi2" type="text" required />
                            <input type="hidden" name="arrival-multi[]" value="<?= isset($this->input->get("arrival-multi")[1]) ?  ($this->input->get("arrival-multi")[1]) : ""  ?>" id="arrival_code1_multi2">
                            <label>To</label>
                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="trip" value="multi">
                <input type="hidden" name="page" value="1">
                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <input class="form-control" autocomplete="off" value="<?= isset($this->input->get("departOn")[2]) ? $this->input->get("departOn")[2] : "" ?>" name="departOn[]" type="text" required id="datepicker_multi2" placeholder="Departing on" />
                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?=  ($this->input->get("depart-multi")[2]!=null) ? getLocName($this->input->get("depart-multi")[2]) : ""  ?>" id="depart1-multi3" type="text" required />
                            <input type="hidden" name="depart-multi[]" value="<?= ($this->input->get("depart-multi")[2]!=null)  ?  ($this->input->get("depart-multi")[2]) : ""  ?>" id="depart_code1_multi3">
                            <label>From</label>
                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="styled-input form-group">
                            <input class="form-control" value="<?=  ($this->input->get("arrival-multi")[2]!=null) ? getLocName($this->input->get("arrival-multi")[2]) : ""  ?>" id="arrival1-multi3" type="text" required />
                            <input type="hidden" name="arrival-multi[]" value="<?= ($this->input->get("arrival-multi")[2]!=null) ? ($this->input->get("arrival-multi")[2]) : ""  ?>" id="arrival_code1_multi3">
                            <label>To</label>
                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="trip" value="multi">
                <input type="hidden" name="page" value="1">
                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <input class="form-control" autocomplete="off" value="<?= isset($this->input->get("departOn")[3]) ? $this->input->get("departOn")[3] : "" ?>" name="departOn[]" type="text" required id="datepicker_multi3" placeholder="Departing on" />
                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Adult</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="adult">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="adult" value="<?= $this->input->get("adult") ?>" class="form-control add-input input-number" value="1" min="1" max="9">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="adult">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label for="">Child</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="child">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="child" value="<?= $this->input->get("child") != '' ? $this->input->get("child") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="9">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="child">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">

                            <label for="">Infant (0-23 M)</label>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="infant">
                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                </button>
                            </span>

                            <input type="text" name="infant" value="<?= $this->input->get("infant") != '' ? $this->input->get("infant") : 0 ?>" class="form-control add-input input-number" value="0" min="0" max="4">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="infant">
                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label>Cabin</label>
                            <select name="cabin" class="form-control">
                                <option value="ECONOMY">Economy</option>
                                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                <option value="BUSINESS">Business </option>
                                <option value="FIRST">First Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="input-group">
                            <label>Airline</label>
                            <select name="airline" class="form-control">
                                <option value="">All</option>
                                <?php foreach ($airlines as $a) { ?>
                                    <option value="<?= $a->code ?>"><?= $a->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />


                <div class="row">

                    <div class="col-md-12 search-btn">
                        <button> <i class="mdi mdi-map-search-outline " aria-hidden="true"></i> Search</button>

                    </div>
                </div>
            </form>
        </div>

    </div>

</div>