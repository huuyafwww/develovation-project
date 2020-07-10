<!-- Navbar-bg -->
<div class="navbar-bg"></div><!-- /Navbar-bg -->

<!-- Main-Navbar -->
<nav class="navbar navbar-expand-lg main-navbar">
    <!-- Navbar-Form -->
    <form class="form-inline mr-auto">

        <!-- Navbar-Icons -->
        <ul class="navbar-nav mr-3">

            <!-- Sidebar-Icon -->
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                    <i class="fas fa-bars"></i>
                </a>
            </li><!-- /Sidebar-Icon -->

            <!-- Searcn-Icon -->
            <li>
                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">
                    <i class="fas fa-search"></i>
                </a>
            </li><!-- /Searcn-Icon -->

        </ul><!-- /Navbar-Icons -->

        <!-- Navbar-Search-Form -->
        <?php include_once(__DIR__."/nav-search.php") ?><!-- /Navbar-Search-Form -->

    </form><!-- /Navbar-Form -->

    <!-- Navbar-Menu -->
    <ul class="navbar-nav navbar-right">

        <?php include_once(__DIR__."/nav-menu.php") ?>

    </ul><!-- /Navbar-Menu -->

</nav>
<!-- /Main-Navbar -->