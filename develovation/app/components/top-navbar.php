<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Top-Navbar-Link-Item -->
    <ul class="navbar-nav">

        <?php __get_component("top-nav-menu.php"); ?>

    </ul><!-- /Top-Navbar-Link-Item -->

    <!-- Right-Menu -->
    <ul class="navbar-nav ml-auto">
        
        <!-- Messages-Dropdown-Menu-Wrapper -->
        <li class="nav-item dropdown">

            <!-- Messages-Menu-Button -->
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <!-- Notification-Count -->
                <span class="badge badge-danger navbar-badge">
                    3
                </span><!-- /Notification-Count -->
            </a><!-- /Messages-Menu-Button -->

            <?php __get_component("messages-menu.php"); ?>
            
        </li><!-- /Messages-Dropdown-Menu-Wrapper -->

        <!-- Notifications-Dropdown-Menu-Wrapper -->
        <li class="nav-item dropdown">
        
            <!-- Notifications-Menu-Button -->
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <!-- Notification-Count -->
                <span class="badge badge-warning navbar-badge">
                    15
                </span><!-- /Notification-Count -->
            </a><!-- /Notifications-Menu-Button -->

            <?php __get_component("notifications-menu.php"); ?>

        </li><!-- /Notifications-Dropdown-Menu-Wrapper -->

        <!-- Control-Sidebar-Menu-Button -->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li><!-- /Control-Sidebar-Menu-Button -->

    </ul><!-- /Top-Navbar-Link-Item -->
</nav><!-- /Navbar -->