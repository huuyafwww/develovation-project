<?php $__backup_settings = __get_controller_var("__backup_settings"); ?>

<!-- Row -->
<div class="row">

    <!-- col-md-6 -->
    <div class="col-md-6">

        <!-- Card -->
        <div class="card card-primary">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>現在のシステムバックアップ設定</h4>
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
                <div class="card-header-action dropdown">
                    <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle d-block">作成済みのバックアップ一覧</a>
                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <li class="dropdown-title">バックアップを選択</li>
                        <li><a href="#" class="dropdown-item">Sample</a></li>
                    </ul>
                </div>
            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">
            </div><!-- /Card-Body -->

        </div><!-- /Card -->

    </div><!-- /col-md-6 -->

</div><!-- /Row -->
