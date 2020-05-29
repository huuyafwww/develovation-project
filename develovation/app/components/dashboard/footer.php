<footer class="main-footer">

    <!-- Footer-Left -->
    <div class="footer-left">
        Copyright &copy; 2020
        <div class="bullet"></div>
        Powered by
        <a
            href="https://github.com/huuyafwww/develovation-project"
            target="_blank"
        >
            huuyafwww
        </a>
    </div><!-- /Footer-Left -->

    <!-- Footer-Right -->
    <div class="footer-right">
        1.0.0
    </div><!-- /Footer-Right -->

</footer>

<form
    id="logout-form"
    action="<?php echo __get_http_url("logout"); ?>"
    method="POST"
>
    <?php __insert_input_hidden("logout"); ?>
</form>