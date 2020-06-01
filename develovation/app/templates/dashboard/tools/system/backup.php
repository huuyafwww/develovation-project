<?php
$__backup_settings = __get_controller_var("__backup_settings");
$__backup_history = __get_controller_var("__backup_history");
?>

<!-- Row -->
<div class="row">

    <!-- col-md-6 -->
    <div class="col-md-6">

        <!-- Card -->
        <div class="card card-primary h-100">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>現在のシステムバックアップ設定</h4>

                <!-- Card-Header-Action -->
                <div class="card-header-action">

                    <!-- Create-Buckup-Button -->
                    <button
                        id="create-buckup-btn"
                        type="button"
                        class="btn btn-primary btn-icon icon-left"
                    >
                        <i class="fas fa-file-archive"></i> バックアップを作成する
                    </button><!-- /Create-Buckup-Button -->
                </div><!-- /Card-Header-Action -->

            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">

                <!-- Table -->
                <table class="table table-striped table-hover table-bordered">

                    <!-- Tbody -->
                    <tbody>
                        <tr>
                            <td>編集者</td>
                            <td>
                                <?php echo $__backup_settings->display_name; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>編集日時</td>
                            <td>
                                <?php echo $__backup_settings->date; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>システムのバックアップを</td>
                            <td>
                                <?php echo $__backup_settings->backup; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>最大保有数</td>
                            <td>
                                <?php echo $__backup_settings->max_count; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>SQLのバックアップを</td>
                            <td>
                                <?php echo $__backup_settings->backup_sql; ?>
                            </td>
                        </tr>
                    </tbody><!-- /Tbody -->

                </table><!-- /Table -->

            </div><!-- /Card-Body -->

        </div><!-- /Card -->

    </div><!-- /col-md-6 -->

    <!-- col-md-6 -->
    <div class="col-md-6">

        <!-- Card -->
        <div class="card card-primary h-100">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>作成済みのシステムバックアップ</h4>

                <!-- Card-Header-Action -->
                <div class="card-header-action dropdown">

                    <!-- DropDown-Label -->
                    <a
                        href="#"
                        data-toggle="dropdown"
                        class="btn btn-danger dropdown-toggle d-block"
                    >
                        作成済みのバックアップ一覧
                    </a><!-- /DropDown-Label -->

                    <!-- Select-Backup-History-Box -->
                    <ul
                        id="select-backup-history-box"
                        class="dropdown-menu dropdown-menu-sm dropdown-menu-right"
                    >
                        <li class="dropdown-title">バックアップを選択</li>
                        <?php foreach($__backup_history as $__backup): ?>
                            <li>
                                <a
                                    id="backup-<?php echo $__backup->time; ?>"
                                    href="#"
                                    class="dropdown-item"
                                >
                                    <?php echo $__backup->date; ?>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul><!-- /Select-Backup-History-Box -->

                </div><!-- /Card-Header-Action -->

            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">
                <?php if(empty($__backup_history)): ?>
                    <div class="text-center">
                        <h4>バックアップはありません</h4>
                    </div>
                <?php else:?>
                    <?php foreach($__backup_history as $__backup): ?>

                        <!-- Backup-History -->
                        <?php include(COMPONENTS_PATH.BASE_DIR."/backup-history.php"); ?><!-- /Backup-History -->

                    <?php endforeach;?>
                <?php endif;?>
            </div><!-- /Card-Body -->

            <!-- Card-Footer -->
            <div class="card-footer bg-whitesmoke text-md-right">

                <!-- Download-Button -->
                <button
                    id="backup-download-btn"
                    type="button"
                    class="btn btn-success btn-icon icon-left d-none"
                >
                    <i class="fas fa-cloud-download-alt"></i> ダウンロード
                </button><!-- /Download-Button -->

            </div><!-- /Card-Footer -->

        </div><!-- /Card -->

    </div><!-- /col-md-6 -->

</div><!-- /Row -->

<form
    id="backup-download-form"
    action=""
    method="POST"
>
    <?php
        __insert_input_hidden(
            "user_id",
            __get_session(LOGIN_VAR)
        );
        __insert_input_hidden(
            "time",
            "",
            "input-backup-time"
        );
    ?>
</form>