<div class="main-sidebar">
    <!-- Sidebar-Wrapper -->
    <aside id="sidebar-wrapper">

        <!-- Sidebar-Brand -->
        <div class="sidebar-brand">

            <!-- Brand-Name -->
            <a
                href="<?php __get_http_url("home"); ?>"
            >
                Stisla
            </a><!-- /Brand-Name -->

        </div><!-- /Sidebar-Brand -->

        <!-- Sidebar-Brand-Sm -->
        <div class="sidebar-brand sidebar-brand-sm">

            <!-- Brand-Name -->
            <a
                href="<?php __get_http_url("home"); ?>"
            >
                St
            </a><!-- /Brand-Name -->

        </div><!-- Sidebar-Brand-Sm -->

        <!-- Sidebar-Menu -->
        <ul class="sidebar-menu">
            <?php include_once(__DIR__."/sidebar-menu.php"); ?>
        </ul><!-- /Sidebar-Menu -->

        <!-- Mini-Sidebar -->
        <?php include_once(__DIR__."/sidebar-mini.php"); ?><!-- /Mini-Sidebar -->

    </aside><!-- /Sidebar-Wrapper -->

</div>