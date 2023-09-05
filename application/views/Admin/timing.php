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
                        <p>Timings</p>
                        <ul class="tabs cf right">
                            <?= $this->session->flashdata("msg"); ?>
                        </ul>
                    </div>
                    <div class="box_c_content form_a">
                        <div class="tab_pane">
                            <form method="POST" action="<?= base_url("Admin/timings") ?>" class="nice">
                                <div class="row sepH_b">
                                    <div class="two columns">
                                        <div class="form_legend">
                                            <h5>Step 1:</h5>
                                            <p> Please check date </p>
                                        </div>
                                    </div>
                                    <div class="ten columns">
                                        <div class="form_content">
                                            <div class="formRow">
                                                <div class="row ">
                                                    <div class="four columns">
                                                        <label for="mark_date_from">From *</label>
                                                        <input type="text" id="datepicker" name="date_from" class="input-text" autocomplete="off">
                                                    </div>
                                                    <div class="four columns">
                                                        <label for="mark_date_to">To *</label>
                                                        <input type="text" id="datepicker2" name="date_to" class="input-text" autocomplete="off">
                                                    </div>
                                                    <div class="four columns">
                                                        <label for="timings">Timings</label>
                                                        <select name="time" id="time">
                                                            <option value="1">1 Min</option>
                                                            <option value="2">2 Min</option>
                                                            <option value="3">3 Min</option>
                                                            <option value="4">4 Min</option>
                                                            <option value="5">5 Min</option>
                                                        </select>
                                                    </div>
                                                </div>
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



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        ?>
        <div class="row">
            <div class="twelve columns">
                <div class="box_c">

                    <div class="box_c_content">

                        <div class="sepH_c">
                            <p class="inner_heading sepH_c">All Timings</p>
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="dte_1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Min</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($time as $t) {
                                        ?>
                                        <tr>
                                            <td> <a href="<?= base_url("Admin/deleteTime/" . $t->id) ?>"> Delete</a> </td>
                                            <td><?= $t->from_date ?></td>
                                            <td><?= $t->to_date ?></td>
                                            <td><?= $t->min ?></td>
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
            prth_dp_tp.init();
            if (!jQuery.browser.mobile) {
                prth_datatable.dte_1();


            } else {
                prth_datatable.mobile_dt();
            };
        });
    </script>
</body>

</html>