<?php
include_once("includes/header.php");
?>
<section id="searchForm" class="slider-search">
    <div class="container">
        <div class="slider-search-in">
            <div class="col-md-7 col-lg-5 col-xl-5">
                <div class="form-area">
                    <h2>Find your best Flight</h2>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">One Way </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Round Way</a>
                        </li>
                        <!--
                         <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Multi City</a>
                         </li> 
                        -->
                    </ul>


                    <div class="tab-content">
                        <div id="menu1" class=" tab-pane fade">
                            <form action="<?= base_url("Result") ?>" id="oneway">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" name="departLoc" id="depart1" type="text" required />
                                            <input type="hidden" name="depart" id="depart_code1">
                                            <label>From</label>
                                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" name="arrLoc" id="arrival1" type="text" required />
                                            <input type="hidden" name="arrival" id="arrival_code1">
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
                                            <input class="form-control" autocomplete="off" name="departOn" type="text" required id="datepicker" placeholder="Departing on" />
                                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="input-group">
                                            <label for="">Adult</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="adult">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="adult" class="form-control add-input input-number" value="1" min="1" max="9">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="adult">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="input-group">
                                            <label for="">Child</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="child">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="child" class="form-control add-input input-number" value="0" min="0" max="9">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="child">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check3">
                                            <label class="custom-control-label" for="check3">I prefer non-stop flights</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2">
                                            <label class="custom-control-label" for="check2">+/- 1 Day Search</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12 search-btn">
                                        <button> <i class="mdi mdi-map-search-outline " aria-hidden="true"></i> Search</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="home" class="tab-pane active">
                            <form action="<?= base_url("Result") ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" id="depart2" name="departLoc" autocomplete="off" type="text" required />
                                            <input type="hidden" name="depart" id="depart_code2">
                                            <label>From</label>
                                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" id="arrival2" name="arrLoc" autocomplete="off" type="text" required />
                                            <input type="hidden" name="arrival" id="arrival_code2">
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
                                            <input class="form-control" type="text" name="departOn" autocomplete="off" required id="datepicker1" placeholder="Departing on" />

                                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <input class="form-control" name="returnOn" type="text" autocomplete="off" required id="datepicker2" placeholder="Returning on" />

                                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="input-group">
                                            <label for="">Adult</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="adult">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="adult" class="form-control add-input input-number" value="1" min="1" max="9">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="adult">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="input-group">
                                            <label for="">Child</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="child">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="child" class="form-control add-input input-number" value="0" min="0" max="9">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="child">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="1" name="nonstop" class="custom-control-input" id="check3">
                                            <label class="custom-control-label" for="check3">I prefer non-stop flights</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" value="1" name="flex" class="custom-control-input" id="check2">
                                            <label class="custom-control-label" for="check2">+/- 1 Day Search</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12 search-btn">
                                        <button> <i class="mdi mdi-map-search-outline " aria-hidden="true"></i> Search</button>

                                    </div>
                                </div>
                            </form>
                        </div>


                        <!-- <div id="menu2" class="tab-pane fade">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" type="text" required />
                                            <label>From</label>
                                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" type="text" required />
                                            <label>To</label>
                                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <input class="form-control" type="text" required id="datepicker" placeholder="Departing on" />

                                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>

                                        </div>
                                    </div>
                      
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" type="text" required />
                                            <label>From</label>
                                            <i class="mdi mdi-airplane-takeoff " aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="styled-input form-group">
                                            <input class="form-control" type="text" required />
                                            <label>To</label>
                                            <i class="mdi mdi-airplane-landing " aria-hidden="true"></i>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <input class="form-control" type="text" required id="datepicker" placeholder="Departing on" />

                                            <i class="mdi mdi-calendar-month " aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" form-group add-more">

                                            <button><i class="mdi mdi-plus " aria-hidden="true"></i> Add More</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <label for="">Adult</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="quant[1]" class="form-control add-input input-number" value="1" min="1" max="10">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <label for="">Child</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="quant[1]" class="form-control add-input input-number" value="1" min="1" max="10">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group ">
                                            <label for="">Infents</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="mdi mdi-minus " aria-hidden="true"></i>
                                                </button>
                                            </span>

                                            <input type="text" name="quant[1]" class="form-control add-input input-number" value="1" min="1" max="10">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                    <i class="mdi mdi-plus " aria-hidden="true"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <label class="for-label">Cabin</label>
                                            <select class="form-control">
                                                <option value="C">Select</option>
                                                <option value="C">Business</option>
                                                <option value="Y">Economy / Coach</option>
                                                <option value="W">Premium Economy</option>
                                                <option value="F">First Class</option>
                                            </select>


                                        </div>
                                    </div>
                                   


                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check1">
                                            <label class="custom-control-label" for="check1">80 miles radius search</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check3">
                                            <label class="custom-control-label" for="check3">I prefer non-stop flights</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2">
                                            <label class="custom-control-label" for="check2">+/- 1 Day Search</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12 search-btn">
                                        <button> <i class="mdi mdi-map-search-outline " aria-hidden="true"></i> Search</button>

                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>

                </div>


            </div>

        </div>
    </div>

</section>

<?php
include_once("includes/footer.php");
?>