<!DOCTYPE html>
<html lang="ja">
<head>
    <?php __get_header(); ?>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Wrapper -->
    <div class="wrapper">

        <?php __get_component("top-navbar.php"); ?>
        <?php __get_component("left-sidebar.php"); ?>
        
        <!-- Content-Wrapper -->
        <div class="content-wrapper">
            <?php __get_component("content-header.php"); ?>
            
            <!-- Main-Content -->
            <div class="content">
                <?php __get_template(); ?>
            </div><!-- /Main-Content -->

            <!-- Fixed-Full-Screen-Button -->
            <a id="fixed-full-screen-btn" href="#" class="btn btn-primary position-fixed" role="button">
                <!-- Full-Screen-Icon -->
                <i class="fas fa-expand-arrows-alt"></i><!-- /Full-Screen-Icon -->
            </a><!-- /Fixed-Full-Screen-Button -->

        </div><!-- /Content-Wrapper -->
        
        <?php __get_component("menu-sidebar.php"); ?>
        <?php //__get_component("footer.php"); ?>

    </div><!-- /Wrapper -->

    <?php __get_footer(); ?>

</body>
</html>