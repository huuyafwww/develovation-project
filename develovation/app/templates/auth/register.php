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
        <form
            method="POST"
            action=""
            id="register-form"
        >

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Label -->
                <label for="user_name">
                    ユーザー名
                </label><!-- /Label -->

                <!-- Input-Email -->
                <input
                    id="user_name"
                    class="form-control"
                    type="text"
                    name="user_name"
                    required
                    tabindex="1"
                    minlength="3"
                    maxlength="20"
                    pattern="^[0-9a-z]+$"
                    autofocus
                    data-toggle="tooltip"
                    data-placement="left"
                    data-original-title="3文字以上20文字未満で小文字の半角英数字を利用します"
                ><!-- /Input-Email -->

                <!-- Invalid-Feedback -->
                <div class="invalid-feedback"></div><!-- /Invalid-Feedback -->

            </div><!-- /Form-Group -->


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
                    tabindex="2"
                ><!-- /Input-Email -->

                <!-- Invalid-Feedback -->
                <div class="invalid-feedback"></div><!-- /Invalid-Feedback -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Label -->
                <label for="password" class="d-block">
                    パスワード
                </label><!-- /Label -->

                <!-- Input-Password -->
                <input
                    id="password"
                    class="form-control pwstrength"
                    type="password"
                    name="password"
                    required
                    tabindex="3"
                    minlength="8"
                    pattern="^[0-9a-z]+$"
                    data-indicator="pwindicator"
                    data-toggle="tooltip"
                    data-placement="left"
                    data-original-title="8文字以上で半角英数字を利用します"
                ><!-- /Input-Password -->

                <!-- Pwindicator -->
                <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                </div><!-- /Pwindicator -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Label -->
                <label for="password-confirm" class="d-block">
                    パスワード（再確認）
                </label><!-- /Label -->

                <!-- Input-Password-Confirm -->
                <input
                    id="password-confirm"
                    class="form-control"
                    type="password"
                    name="password-confirm"
                    required
                    tabindex="4"
                ><!-- /Input-Password-Confirm -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Custom-Checkbox -->
                <div class="custom-control custom-checkbox">

                    <!-- Input-Checkbox -->
                    <input
                        id="agree"
                        class="custom-control-input"
                        type="checkbox"
                        name="agree"
                        required
                        tabindex="5"
                    ><!-- /Input-Checkbox -->

                    <!-- Custom-Control-Label -->
                    <label class="custom-control-label" for="agree">
                        利用規約に同意します
                    </label><!-- /Custom-Control-Label -->

                </div><!-- /Custom-Checkbox -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Button-Submit -->
                <button
                    class="btn btn-primary btn-lg btn-block"
                    type="submit"
                    tabindex="6"
                >
                    新規登録
                </button><!-- /Button-Submit -->

            </div><!-- /Form-Group -->

        </form><!-- /Form -->

    </div><!-- /Card-Body -->

</div><!-- /Card -->

<!-- Link-to-Login-Account -->
<div class="mt-5 text-muted text-center">
    <a
        href="<?php __get_http_url("login"); ?>"
    >
        ログイン
    </a>
</div><!-- /Link-to-Login-Account -->