<!-- Main-Sidebar-Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Logo -->
    <a href="" class="brand-link">
        <img src="<?php __get_lib_img("AdminLTELogo.png"); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            AdminLTE 3
        </span>
    </a><!-- /Logo -->

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar-User-Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <!-- User-Image -->
            <div class="image">
                <img src="<?php __get_lib_img("user2-160x160.jpg"); ?>" class="img-circle elevation-2" alt="User Image">
            </div><!-- /User-Image -->

            <!-- User-Info -->
            <div class="info">
                <a href="#" class="d-block">
                    Alexander Pierce
                </a>
            </div><!-- /User-Info -->
        
        </div><!-- /Sidebar-User-Panel -->
        
        <!-- Sidebar-Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                <?php __get_component("left-sidebar-nav-item.php"); ?>
            </ul>
        </nav><!-- /Sidebar-Menu -->
    </div><!-- /Sidebar -->
</aside><!-- /Main-Sidebar-Container -->