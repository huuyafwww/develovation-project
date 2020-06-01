<!-- Settings-User -->
<div
    class="tab-pane fade active show"
    id="settings-user-tab"
    role="tabpanel"
    aria-labelledby="settings-user-nav-link"
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
                <h4>ユーザー 設定</h4>
            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">

                <!-- Form-Group -->
                <div class="form-group row align-items-center">

                    <!-- Label -->
                    <label
                        for="user_name"
                        class="form-control-label col-sm-3 text-md-right"
                    >
                        ログインユーザー名
                    </label><!-- /Label -->

                    <!-- Input-Wrapper -->
                    <div class="col-sm-6 col-md-9">
                        <input
                            type="text"
                            name="user_name"
                            class="form-control"
                            id="user_name"
                            value="<?php echo __get_session("user_name"); ?>"
                            required
                            minlength="3"
                            maxlength="20"
                            pattern="^[0-9a-z]+$"
                            data-toggle="tooltip"
                            data-placement="left"
                            data-original-title="3文字以上20文字未満で小文字の半角英数字を利用します"
                        >
                    </div><!-- /Input-Wrapper -->

                </div><!-- /Form-Group -->

                <!-- Form-Group -->
                <div class="form-group row align-items-center">

                    <!-- Label -->
                    <label
                        for="display_name"
                        class="form-control-label col-sm-3 text-md-right"
                    >
                        表示名
                    </label><!-- /Label -->

                    <!-- Input-Wrapper -->
                    <div class="col-sm-6 col-md-9">
                        <input
                            type="text"
                            name="display_name"
                            class="form-control"
                            id="display_name"
                            value="<?php echo __get_session("display_name"); ?>"
                            required
                            minlength="3"
                            maxlength="20"
                            pattern="^[0-9a-z\u4E00-\u9FFF\u3040-\u309Fー]+$"
                            data-toggle="tooltip"
                            data-placement="left"
                            data-original-title="3文字以上20文字未満で小文字の半角英数字とひらがな・漢字を利用できます"
                        >
                    </div><!-- /Input-Wrapper -->

                </div><!-- /Form-Group -->

                <!-- Input-Hidden -->
                <?php __insert_input_hidden("action","user"); ?><!-- /Input-Hidden -->

            </div><!-- /Card-Body -->

            <?php __get_component("settings-card-footer.php"); ?>

        </div><!-- /Card -->

    </form><!-- /Form -->

</div><!-- /Settings-User -->