<script src="<?php __get_lib_js("jquery/jquery.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("popper/popper.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("tooltip/tooltip.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("bootstrap/bootstrap.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("nicescroll/jquery.nicescroll.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("moment/moment.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("stisla/stisla.js"); ?>"></script>
<script defer src="<?php __get_lib_js("stisla/scripts.js"); ?>"></script>
<script defer src="<?php __get_lib_js("pjax/jquery.pjax.min.js"); ?>"></script>
<script defer src="<?php __get_lib_js("fullscreen/jquery.fullscreen.min.js"); ?>"></script>
<!-- <script defer src="<?php __get_lib_js("turbolinks/turbolinks.js"); ?>"></script> -->

<script defer>
    var api_url = "<?php __get_api_url(); ?>";
</script>
<script defer src="<?php __get_app_js("app.js"); ?>" id="main-js" data-token="<?php echo __get_session_token(); ?>"></script>
