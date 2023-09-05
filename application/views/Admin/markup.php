<body class="ptrn_a grdnt_a mhover_a">
    <?php
    include_once("includes/nav.php");

    ?>

    <link rel="stylesheet" href="<?= base_url("admin_media/") ?>lib/datatables/css/demo_table_jui.css" media="all" />

    <div class="container">

        <div class="row">
            <div class="twelve columns">
                <div class="box_c">
                    <div class="box_c_heading cf">
                        <div class="box_c_ico"><img src="img/ico/icSw2/16-List.png" alt="" /></div>.
                        <?= validation_errors(); ?>
                        <p>Airline Markup</p>
                        <ul class="tabs cf right">
                            <?= $this->session->flashdata("msg"); ?>
                        </ul>
                    </div>
                    <div class="box_c_content form_a">
                        <div class="tab_pane">
                            <form method="POST" action="<?= base_url("Admin/airlineMarkup") ?>" class="nice">
                                <div class="row sepH_b">
                                    <div class="two columns">
                                        <div class="form_legend">
                                            <h5>Step 1:</h5>
                                            <p> Here you can add markup for multiple or single flights </p>
                                        </div>
                                    </div>


                                    <div class="ten columns">
                                        <div class="form_content">
                                            <div class="formRow">
                                                <div class="row ">
                                                    <div class="four columns">
                                                        <label for="mark_amt">Markup amount *</label>
                                                        <input type="text" id="mark_amt" name="mark_amt" class="input-text" autocomplete="off">
                                                    </div>

                                                    <div class="four columns">
                                                        <label for="sp_basic">Markup Type *</label>
                                                        <select name="priceType" id="priceType">
                                                            <option value="0"> Fixed </option>
                                                            <option value="1"> Percentage </option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label for="mark_amt">Priority</label>
                                                        <input type="text" id="priority" name="priority"  class="input-text" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                                <div class="row sepH_b addCriteria firstCr">
                                    <div class="two columns">
                                        <div class="form_legend">
                                            <h5>IF </h5>
                                            <p>Add markup condition </p>
                                        </div>
                                    </div>
                                    <div class="ten columns ">
                                        <div class="form_content">
                                            <div class="formRow">
                                                <div class="row">
                                                    <div class="four columns">
                                                        <label for="price">Markup Type</label>
                                                        <select name="type[]" id="type">
                                                            <option value="">Select Key</option>
                                                            <option value="0">Airline</option>
                                                            <option value="1">Cabin Type</option>
                                                            <option value="2">Class Type</option>
                                                            <option value="3">From City</option>
                                                            <option value="4">To City</option>
                                                            <option value="5">PaxType</option>
                                                            <option value="6">TravelDateFrom</option>
                                                            <option value="7">TravelDateTo</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label for="select_key">Type</label> <br>
                                                        <input type="text" id="select_key" name="select_key[]" class="input-text " autocomplete="off">
                                                    </div>

                                                </div>
                                                <a class="gh_button icon trash danger" onclick="$(this).closest('.addCriteria').remove()" href="javascript:void(0)">Delete </a>
                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <div id="addMore">

                                </div>
                                <div class="form_content">
                                    <div class="formRow">
                                        <div class="row">
                                            <button type="button" class="button small nice blue radius right" id="addMoreButton">Add more criteria</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="two columns"></div>
                                    <div class="ten columns">
                                        <div class="form_content">
                                            <div class="formRow">
                                                <button type="submit" class="button small nice blue radius">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="display:none" class="pop-option airline_pop">
        <div class="pop-option-st">
            <button class="cross" onclick="$('.airline_pop').hide()">x</button>
            <form action="">
                <div class="box_c">
                    <div class="form_content">
                        <div class="formRow">
                            <label for="airline">Airlines</label>
                            <select class="chzn-select" multiple name="airline[]" id="airline">
                                <?php
                                foreach ($airline as $air) {
                                    ?>
                                    <option value="<?= $air->code ?>"><?= $air->name ?> <?= $air->code ?></option>
                                <?php

                                }
                                ?>
                            </select>
                        </div>
                        <div class="form_content">
                            <div class="formRow">
                                <button type="button" class="button small nice blue radius">Save & Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div style="display:none" class="pop-option cabin_pop">
        <div class="pop-option-st">
            <button class="cross" onclick="$('.cabin_pop').hide()">x</button>
            <form action="">
                <div class="box_c">
                    <div class="form_content">
                        <div class="formRow">
                            <label for="airline">Cabin</label>
                            <select class="chzn-select" multiple name="cabin[]" id="cabin">
                                <option value="Y">Economy</option>
                                <option value="W">Premium Economy</option>
                                <option value="F">First Class</option>
                                <option value="J">Business Class</option>
                            </select>
                        </div>
                        <div class="form_content">
                            <div class="formRow">
                                <button type="button" class="button small nice blue radius">Save & Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div style="display:none" class="pop-option class_pop">
        <div class="pop-option-st">
            <button class="cross" onclick="$('.class_pop').hide()">x</button>
            <form action="">
                <div class="box_c">
                    <div class="form_content">
                        <div class="formRow">
                            <label for="airline">Class</label>
                            <select class="chzn-select" multiple name="class_type[]" id="class_type">
                                <option value="B">B</option>
                                <option value="E">E</option>
                                <option value="M">M</option>
                                <option value="H">H</option>
                                <option value="Q">Q</option>
                                <option value="K">K</option>
                                <option value="W">W</option>
                                <option value="S">S</option>
                                <option value="Y">Y</option>
                                <option value="T">T</option>
                                <option value="U">U</option>
                                <option value="L">L</option>
                            </select>
                        </div>
                        <div class="form_content">
                            <div class="formRow">
                                <button type="button" class="button small nice blue radius">Save & Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div style="display:none" class="pop-option from_pop">
        <div class="pop-option-st">
            <button class="cross" onclick="$('.from_pop').hide()">x</button>
            <form action="">
                <div class="box_c">
                    <div class="form_content">
                        <div class="formRow">
                            <label for="from">From Location</label>
                            <select class="chzn-select" multiple name="from[]" id="from">
                                <?php foreach ($location as $loc) { ?>
                                    <option value="<?= $loc->code ?>"><?= $loc->airline ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form_content">
                            <div class="formRow">
                                <button type="button" class="button small nice blue radius">Save & Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div style="display:none" class="pop-option pax_pop">
        <div class="pop-option-st">
            <button class="cross" onclick="$('.pax_pop').hide()">x</button>
            <form action="">
                <div class="box_c">
                    <div class="form_content">
                        <div class="formRow">
                            <label for="pax">Pax type</label>
                            <select class="chzn-select" multiple name="pax[]" id="pax">
                                <option value="ADT">ADULT</option>
                                <option value="CNN">CHILD</option>
                                <option value="INF">INF</option>
                            </select>
                        </div>
                        <div class="form_content">
                            <div class="formRow">
                                <button type="button" class="button small nice blue radius">Save & Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div style="display:none" class="pop-option date_pop">
        <div class="pop-option-st">
            <button class="cross" onclick="$('.date_pop').hide()">x</button>
            <form action="">
                <div class="box_c">
                    <div class="form_content">
                        <div class="formRow">
                            <label for="date">Date</label>
                            <input type="text" autocomplete="off" class="input-text small" name="date" id="datepicker">

                        </div>
                        <div class="form_content">
                            <div class="formRow">
                                <button type="button" class="button small nice blue radius">Save & Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="container" id="footer">
        <div class="row">

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
    <script src="<?= base_url("admin_media/") ?>lib/chosen/chosen.jquery.min.js"></script>
    <script src="<?= base_url("admin_media/") ?>lib/datatables/extras/ColVis/media/js/ColVis.min.js"></script>
    <script src="<?= base_url("admin_media/") ?>js/pertho.js"></script>
    <script>
        $(document).ready(function() {
            //* common functions
            prth_common.init();
            prth_chosen_select.init();

            if (!jQuery.browser.mobile) {
                prth_datatable.dte_1();


            } else {
                prth_datatable.mobile_dt();
            };
            
            prth_dp_tp.init();
            var id = "";
            $('#addMoreButton').click((e) => {
                var clone = $(".addCriteria:first").clone();
                clone.appendTo("#addMore");
                clone.find("#select_key").val("");
                clone.find("#type").attr("id", "type" + $(".addCriteria").length + "");
                clone.find("#select_key").attr("id", "select_key" + $(".addCriteria").length + "");
            });

            $('.airline_pop').find("button").click(function() {
                var append2 = "";
                if ($('#airline').val() != null) {
                    var val = $('#airline').val();

                    val.map((i, val) => {
                        append2 += i.trim() + ",";

                    });
                    append2 = append2.slice(0, -1);
                    $('.airline_pop').hide();
                    $("#" + id).val(append2.trim());
                }
            });
            $('.cabin_pop').find("button").click(function() {
                var append2 = "";
                if ($('#cabin').val() != null) {
                    var val = $('#cabin').val();
                    val.map((i, val) => {
                        append2 += i.trim() + ",";
                    });
                    append2 = append2.slice(0, -1);
                    $('.cabin_pop').hide();
                    $("#" + id).val(append2.trim());
                }
            });
            $('.class_pop').find("button").click(function() {

                var append2 = "";
                if ($('#class_type').val() != null) {
                    var val = $('#class_type').val();
                    val.map((i, val) => {
                        append2 += i.trim() + ",";
                    });
                    append2 = append2.slice(0, -1);
                    $('.class_pop').hide();
                    $("#" + id).val(append2.trim());
                }
            });

            $('.from_pop').find("button").click(function() {
                var append2 = "";
                if ($('#from').val() != null) {
                    var val = $('#from').val();
                    val.map((i, val) => {
                        append2 += i.trim() + ",";
                    });
                    append2 = append2.slice(0, -1);
                    $('.from_pop').hide();
                    $("#" + id).val(append2.trim());
                }
            });

            $('.pax_pop').find("button").click(function() {
                var append2 = "";
                if ($('#pax').val() != null) {
                    var val = $('#pax').val();
                    val.map((i, val) => {
                        append2 += i.trim() + ",";
                    });
                    append2 = append2.slice(0, -1);
                    $('.pax_pop').hide();
                    $("#" + id).val(append2.trim());
                }
            });

            $('.date_pop').find("button").click(function() {
                var append2 = "";
                if ($('#datepicker').val() != null) {
                    var val = $('#datepicker').val();
                    $('.date_pop').hide();
                    $("#" + id).val(val.trim());
                }
            });

            var checkType = (e) => {
                var hide = 0;
                var target = $(e.target);
                $('.pop-option').hide();
                id = target.parent().next("div").find("input").attr("id");
                if (target.val() == 0) { // airline
                    $('.airline_pop').show();
                    $('#airline_chzn,.chzn-drop,.search-field>input').css({
                        "width": "100%"
                    });

                } else if (target.val() == 1) {
                    $('.cabin_pop').show();
                    $('#cabin_chzn,.chzn-drop,.search-field>input').css({
                        "width": "100%"
                    });

                } else if (target.val() == 3 || target.val() == 4) {
                    $('.from_pop').show();
                    $('#from_chzn,.chzn-drop,.search-field>input').css({
                        "width": "100%"
                    });
                } else if (target.val() == 5) {
                    $('.pax_pop').show();
                    $('#pax_chzn,.chzn-drop,.search-field>input').css({
                        "width": "100%"
                    });
                } else if (target.val() == 6 || target.val() == 7) {
                    $('.date_pop').show();
                    $("#ui-datepicker-div").css({
                        "z-index": "99999"
                    });
                    $('#date_chzn,.chzn-drop,.search-field>input').css({
                        "width": "100%"
                    });
                } else if (target.val() == 2 || target.val() == 2) {
                    $('.class_pop').show();
                    $('#class_type_chzn,.chzn-drop,.search-field>input').css({
                        "width": "100%"
                    });
                    $('.chzn-select').trigger("chosen:updated");
                }
            }

            // for delegates or dynamic clone
            $("#addMore").delegate("select", "change", (e) => {
                checkType(e);
            });

            // for static  
            $('.firstCr').find("#type").change(function(e) {
                checkType(e);
            });



        });
    </script>
</body>

</html>