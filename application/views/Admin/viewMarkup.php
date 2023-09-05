<body class="ptrn_a grdnt_a mhover_a">
    <?php
    include_once("includes/nav.php");
    ?>

    <link rel="stylesheet" href="<?= base_url("admin_media/") ?>lib/datatables/css/demo_table_jui.css" media="all" />

    <div class="container">

        <div class="row">
            <div class="twelve columns">
                <div class="box_c">
                    <div class="box_c_heading cf box_actions">
                        <p>Data table</p>
                    </div>
                    <div class="box_c_content">
                        <?= $this->session->flashdata("msg"); ?>
                        <div class="sepH_c">
                            <p class="inner_heading sepH_c">All Bookings</p>
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="dte_1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="essential">Markup Amount</th>
                                        <th class="essential">Price Type</th>

                                        <th class="essential">Airline Markup</th>
                                        <th class="essential">Cabin Markup</th>
                                        <th class="essential">Booking Class Markup</th>
                                        <th class="essential">Departure Loc</th>
                                        <th class="essential">Arrival Loc</th>
                                        <th class="essential">Pax Markup</th>
                                        <th class="essential">From date Markup</th>
                                        <th class="essential">To date Markup</th>
                                        <th class="essential">Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($markup as $value) {

                                        ?>
                                        <tr class="">
                                            <td> <a href="javascript:void" onclick="deleteMe('<?= $value->id ?>')">Delete </a> </td>
                                            <td><?= $value->mark_amt ?></td>
                                            <td><?= $value->priceType == 0 ? "Fixed" : "Percentage"; ?></td>

                                            <td><?= $value->is_airline == 1 ? getAirlineMarkup($value->id) : "" ?></td>
                                            <td><?= $value->is_cabin  == 1  ? getCabinMarkup($value->id) : "" ?></td>
                                            <td><?= $value->is_class  == 1  ? getClassMarkup($value->id) : "" ?></td>
                                            <td><?= $value->is_from == 1    ? getFromDestinationMark($value->id) : "" ?></td>
                                            <td><?= $value->is_to   == 1    ? getToDestinationMark($value->id) : "" ?></td>
                                            <td><?= $value->is_pax  == 1    ? getPaxMark($value->id) : "" ?></td>
                                            <td><?= $value->is_from_date == 1 ? getFromDateMark($value->id) : "" ?></td>
                                            <td><?= $value->is_to_date   == 1 ? getToDateMark($value->id) : "" ?></td>
                                            <td><?= $value->priority ?></td>
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

            if (!jQuery.browser.mobile) {
                prth_datatable.dte_1();


            } else {
                prth_datatable.mobile_dt();
            };
        });

        function deleteMe(id) {
            var con = confirm('Are you sure!');
            if (con) {
                window.location.href = '<?= base_url("Admin/deleteMarkup/") ?>' + id;
            }
        }
    </script>
</body>

</html>