<!-- Card -->
<div class="card card-primary">

    <!-- Card-Header -->
    <div class="card-header">

        <!-- Card-Title -->
        <h4>
            <?php __get_card_title(); ?>
        </h4><!-- /Card-Title -->

    </div><!-- /Card-Header -->

    <!-- Card-Body -->
    <div class="card-body">

        <!-- Form -->
        <form method="POST" action="">

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Label -->
                <label for="email">
                    メールアドレス
                </label><!-- /Label -->

                <!-- Input-Email -->
                <input
                    id="email"
                    class="form-control"
                    type="email"
                    name="email"
                    required
                    tabindex="1"
                    autofocus
                ><!-- /Input-Email -->

                <!-- Invalid-Feedback -->
                <div class="invalid-feedback">
                    メールアドレスを入力してください
                </div><!-- /Invalid-Feedback -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Label-Box -->
                <div class="d-block">

                    <!-- Label -->
                    <label for="password" class="control-label">
                        パスワード
                    </label><!-- /Label -->

                    <!-- Float-Right -->
                    <div class="float-right">

                        <!-- Forgot-Password-Link -->
                        <a href="auth-forgot-password.html" class="text-small">
                            パスワードの再設定
                        </a><!-- /Forgot-Password-Link -->

                    </div><!-- /Float-Right -->

                </div><!-- /Label-Box -->

                <!-- Input-Password -->
                <input
                    id="password"
                    class="form-control"
                    type="password"
                    name="password"
                    required
                    tabindex="2"
                ><!-- /Input-Password -->

                <!-- Invalid-Feedback -->
                <div class="invalid-feedback">
                    パスワードを入力してください
                </div><!-- /Invalid-Feedback -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Custom-Checkbox -->
                <div class="custom-control custom-checkbox">

                    <!-- Input-Checkbox -->
                    <input
                        id="remember-me"
                        class="custom-control-input"
                        type="checkbox"
                        name="remember"
                        required
                        tabindex="3"
                    ><!-- /Input-Checkbox -->

                    <!-- Custom-Control-Label -->
                    <label class="custom-control-label" for="remember-me">
                        次回から自動ログイン
                    </label><!-- /Custom-Control-Label -->

                </div><!-- /Custom-Checkbox -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Button-Submit -->
                <button
                    class="btn btn-primary btn-lg btn-block"
                    type="submit"
                    tabindex="4"
                >
                    ログイン
                </button><!-- /Button-Submit -->

            </div><!-- /Form-Group -->

        </form><!-- /Form -->

    </div><!-- /Card-Body -->

</div><!-- /Card -->

<!-- Link-to-Create-Account -->
<div class="mt-5 text-muted text-center">
    <a
        href="<?php __get_http_url("register"); ?>"
    >
        新規登録
    </a>
</div><!-- /Link-to-Create-Account -->