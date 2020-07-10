<?php $__backup_settings = __get_controller_var("__backup_settings"); ?>

<!-- Settings-Backup -->
<div
    class="tab-pane fade"
    id="settings-backup-tab"
    role="tabpanel"
    aria-labelledby="settings-backup-nav-link"
>

    <!-- Form -->
    <form
        method="POST"
        action=""
    >

        <!-- Card -->
        <div class="card card-primary" id="settings-card">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>システムのバックアップ 設定</h4>
            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">

                <!-- Form-Group -->
                <div class="form-group row align-items-center">

                    <!-- Label -->
                    <label
                        for="is_backup"
                        class="form-control-label col-sm-3 text-md-right"
                    >
                        システムのバックアップ
                    </label><!-- /Label -->

                    <!-- Select-Wrapper -->
                    <div class="col-sm-6 col-md-9">

                        <!-- Select -->
                        <select id="is_backup" class="form-control" name="is_backup">

                            <!-- Option -->
                            <option
                                value="1"
                                <?php
                                    if(
                                        (bool)$__backup_settings->is_backup
                                    ) echo " selected";
                                ?>
                            >
                                する
                            </option><!-- /Option -->

                            <!-- Option -->
                            <option
                                value="0"
                                <?php
                                    if(
                                        !(bool)$__backup_settings->is_backup
                                    ) echo " selected";
                                ?>
                            >
                                しない
                            </option><!-- /Option -->

                        </select><!-- /Select -->

                    </div><!-- /Select-Wrapper -->

                </div><!-- /Form-Group -->

                <!-- Form-Group -->
                <div class="form-group row align-items-center">

                    <!-- Label -->
                    <label
                        for="max_count"
                        class="form-control-label col-sm-3 text-md-right"
                    >
                        最大保有数
                    </label><!-- /Label -->

                    <!-- Input-Wrapper -->
                    <div class="col-sm-6 col-md-9">
                        <input
                            type="number"
                            name="max_count"
                            class="form-control"
                            id="max_count"
                            value="<?php echo $__backup_settings->max_count; ?>"
                            required
                            min="3"
                            max="10000"
                            data-toggle="tooltip"
                            data-placement="left"
                            data-original-title="3から10,000を選択します"
                        >
                    </div><!-- /Input-Wrapper -->

                </div><!-- /Form-Group -->

                <!-- Form-Group -->
                <div class="form-group row align-items-center">

                    <!-- Label -->
                    <label
                        for="is_backup_sql"
                        class="form-control-label col-sm-3 text-md-right"
                    >
                        SQLのバックアップ
                    </label><!-- /Label -->

                    <!-- Select-Wrapper -->
                    <div class="col-sm-6 col-md-9">

                        <!-- Select -->
                        <select id="is_backup_sql" class="form-control" name="is_backup_sql">

                            <!-- Option -->
                            <option
                                value="1"
                                <?php
                                    if(
                                        (bool)$__backup_settings->is_backup_sql
                                    ) echo " selected";
                                ?>
                            >
                                する
                            </option><!-- /Option -->

                            <!-- Option -->
                            <option
                                value="0"
                                <?php
                                    if(
                                        !(bool)$__backup_settings->is_backup_sql
                                    ) echo " selected";
                                ?>
                            >
                                しない
                            </option><!-- /Option -->

                        </select><!-- /Select -->

                    </div><!-- /Select-Wrapper -->

                </div><!-- /Form-Group -->

                <!-- Input-Hidden -->
                <?php __insert_input_hidden("action","backup"); ?><!-- /Input-Hidden -->

            </div><!-- /Card-Body -->

            <?php __get_component("settings-card-footer.php"); ?>

        </div><!-- /Card -->

    </form><!-- /Form -->

</div><!-- /Settings-Backup -->