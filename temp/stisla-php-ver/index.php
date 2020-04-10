<!DOCTYPE html>
<html lang="ja">
<head>

    <!-- Head -->
    <?php include_once(__DIR__."/inc/head.php") ?><!-- /Head -->

</head>
<body>

    <!-- HTML-Parts -->
    <app-html>

        <!-- Main-Wrapper -->
        <div class="main-wrapper">

            <!-- Nav -->
            <?php include_once(__DIR__."/parts/nav.php") ?><!-- /Nav -->

            <!-- Sidebar -->
            <?php include_once(__DIR__."/parts/sidebar.php") ?><!-- /Sidebar -->

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

                        <!--ここからメインコンテンツ -->
                    
                    </div><!-- /Section-Body -->

                </section><!-- /Section -->

            </div><!-- /Main-Content -->

            <!-- Footer -->
            <?php include_once(__DIR__."/parts/footer.php") ?><!-- Footer -->

        </div><!-- /Main-Wrapper -->

    </app-html><!-- /HTML-Parts -->

    <!-- JS-Parts -->
    <app-js>
        <?php include_once(__DIR__."/inc/footer-script.php") ?>
    </app-js><!-- /JS-Parts -->

</body>
</html>