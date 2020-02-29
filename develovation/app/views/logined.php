<!DOCTYPE html>
<html lang="ja">
<head>
    <?php __get_header(); ?>
</head>
<body <?php __body_class(); ?>>

    <!-- HTML-Parts -->
    <app-html>

        <!-- Main-Wrapper -->
        <div class="main-wrapper">

            <?php __get_component("nav.php"); ?>
            <?php __get_component("sidebar.php"); ?>

            <!-- Main-Content -->
            <div class="main-content">

                <!-- Section -->
                <section class="section">

                    <!-- Section-Header -->
                    <div class="section-header">

                        <!-- Section-Title -->
                        <h1>Blank Page</h1><!-- /Section-Title -->

                    </div><!-- /Section-Header -->

                    <!-- Section-Body -->
                    <div class="section-body">

                        <?php __get_template(); ?>
                    
                    </div><!-- /Section-Body -->

                </section><!-- /Section -->

            </div><!-- /Main-Content -->

            <?php __get_component("footer.php"); ?>

        </div><!-- /Main-Wrapper -->

    </app-html><!-- /HTML-Parts -->

    <!-- JS-Parts -->
    <app-js>
        <?php __get_footer(); ?>
    </app-js><!-- /JS-Parts -->

</body>
</html>