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
                                                <label for="airline">Airlines</label>
                                                <select class="chzn-select" multiple name="airline[]" id="airline">
                                                    <?php
                                                    foreach ($airline as $air) {
                                                        $count = getNotAirline($air->code);
                                                        if ($count == 0) {
                                                            ?>
                                                            <option value="<?= $air->code ?>"><?= $air->name ?> <?= $air->code ?></option>
                                                    <?php
                                                        }
                                                    } ?>

                                                </select>


                                            </div>


                                        </div>
                                        <div class="form_content">
                                            <div class="formRow">
                                                <div class="row">
                                                    <div class="three columns elVal">
                                                        <label for="airline">By Date</label>
                                                        <select name="is_date" id="is_date">
                                                            <option value="0">NO</option>
                                                            <option value="1">YES</option>
                                                        </select>
                                                    </div>

                                                    <div id="dates" class="">
                                                        <div class="eight columns elVal">
                                                            <label for="">From Date</label>
                                                            <input type="text" id="from_date" id="datepicker" name="price" class="input-text " />
                                                            <label for="">To Date</label>
                                                            <input type="text" id="to_date" id="datepicker" name="price" class="input-text " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            if (document.getElementById("is_date").value == 0) {
                                                document.getElementById("dates").style.display = "none";
                                            } else {
                                                document.getElementById("dates").style.display = "block";
                                            }
                                            document.getElementById("is_date").addEventListener("change", function() {
                                                if (document.getElementById("is_date").value == 0) {
                                                    document.getElementById("dates").style.display = "none";
                                                } else {
                                                    document.getElementById("dates").style.display = "block";
                                                }
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div class="row sepH_b">
                                    <div class="two columns">
                                        <div class="form_legend">
                                            <h5>Step 2 </h5>
                                            <p>Add markup value all values will be calculated in USD, You can choose the type </p>
                                        </div>
                                    </div>
                                    <div class="ten columns">
                                        <div class="form_content">
                                            <div class="formRow">
                                                <label for="price">Price</label>
                                                <input type="text" id="price" name="price" class="input-text large" />
                                            </div>

                                            <div class="formRow">
                                                <label for="type">Type</label>
                                                <select name="type" id="type">
                                                    <option value="0">Percentage</option>
                                                    <option value="1">Value</option>
                                                </select>
                                            </div>
                                            <div class="formRow">
                                                <label for="type">Offer</label>
                                                <select name="offer" id="offer">
                                                    <option value="0">Plus</option>
                                                    <option value="1">Minus</option>
                                                </select>
                                            </div>

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
                            <div class="row sepH_c">
                                <div class="two columns">
                                    <div class="form_legend">
                                        <h5>All markup</h5>
                                        <p>Find All the details</p>
                                    </div>
                                </div>


                                <div class="ten columns">
                                    <div class="form_content">
                                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="dte_1">
                                            <thead>
                                                <tr>
                                                    <th class="essential">Airline</th>
                                                    <th class="essential">Price</th>
                                                    <th class="essential">Type</th>
                                                    <th class="essential">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($markup as $mark) { ?>
                                                    <tr>
                                                        <td><?= $mark->code ?></td>
                                                        <td> <?= $mark->offer == 0 ? "+" : "-"; ?> <?= $mark->price ?></td>
                                                        <td><?= $mark->type == 0 ? "%" : "$"; ?></td>
                                                        <td> <button class="button red tiny  radius" onclick="window.location.href='<?= base_url("Admin/deleteMarkup/$mark->id") ?>'">Delete</button> </td>
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
        });
    </script>
</body>

</html>