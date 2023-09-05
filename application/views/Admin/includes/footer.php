<footer class="container" id="footer">
    <div class="row">
        <div class="twelve columns">
            Copyright &copy; 2012 tzd-themes.com
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
<script src="<?= base_url("admin_media/") ?>lib/jQplot/jquery.jqplot.min.js"></script>
 
<script src="<?= base_url("admin_media/") ?>lib/fullcalendar/fullcalendar.min.js"></script>
<script src="<?= base_url("admin_media/") ?>js/jquery.ui.extend.js"></script>
 
<script src="<?= base_url("admin_media/") ?>js/pertho.js"></script>
<script>
    $(document).ready(function() {
        //* common functions
        prth_common.init();
        prth_nested_accordion.init();
        // prth_dp_tp.init();
      
        prth_gallery.init();
        prth_charts.charts_resize();
    
        if (!jQuery.browser.mobile) {
            prth_charts.makeImage();
        } else {
            
        }
        //* horizontal scrollable (charts)
        prth_h_scrollable.init();

    });
</script>

</body>

</html>