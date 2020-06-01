<!-- Row -->
<div class="row">

    <!-- Col-md-4 -->
    <div class="col-md-4">

        <!-- Card -->
        <div class="card card-primary">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>Jump To</h4>
            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">

                <!-- Nav -->
                <ul class="nav nav-pills flex-column">

                    <!-- Nav-Item -->
                    <li class="nav-item">
                        <a
                            class="nav-link active show"
                            id="settings-user-nav-link"
                            data-toggle="tab"
                            href="#settings-user-tab"
                            role="tab"
                            aria-controls="settings-user"
                            aria-selected="true"
                            >
                                ユーザー
                        </a>
                    </li><!-- /Nav-Item -->

                    <!-- Nav-Item -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="settings-notify-nav-link"
                            data-toggle="tab"
                            href="#settings-notify-tab"
                            role="tab"
                            aria-controls="settings-notify"
                            aria-selected="false"
                            >
                                通知
                        </a>
                    </li><!-- /Nav-Item -->

                    <!-- Nav-Item -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="settings-backup-nav-link"
                            data-toggle="tab"
                            href="#settings-backup-tab"
                            role="tab"
                            aria-controls="settings-backup"
                            aria-selected="false"
                            >
                                システムのバックアップ
                        </a>
                    </li><!-- /Nav-Item -->

                </ul><!-- /Nav -->

            </div><!-- /Card-Body -->

        </div><!-- /Card -->

    </div><!-- /Col-md-4 -->

    <div class="col-md-8">
        <div class="tab-content no-padding">
            <?php __get_component("settings-user.php"); ?>
            <?php __get_component("settings-notify.php"); ?>
            <?php __get_component("settings-backup.php"); ?>
        </div>
    </div>
</div><!-- /Row -->