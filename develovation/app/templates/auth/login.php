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
        <form method="POST" action="#">

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Label -->
                <label for="email">
                    メールアドレス
                </label><!-- /Label -->

                <!-- Input-Email -->
                <input
                    id="email"
                    type="email"
                    class="form-control"
                    name="email"
                    tabindex="1"
                    required
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
                    type="password"
                    class="form-control"
                    name="password"
                    tabindex="2"
                    required
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
                        type="checkbox"
                        name="remember"
                        class="custom-control-input"
                        tabindex="3"
                        id="remember-me"
                    ><!-- Input-Checkbox -->

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
                    type="submit"
                    class="btn btn-primary btn-lg btn-block"
                    tabindex="4"
                >
                    ログイン
                </button><!-- Button-Submit -->

            </div><!-- /Form-Group -->

        </form><!-- /Form -->
    
    </div><!-- /Card-Body -->

</div><!-- /Card -->

<!-- Link-to-Create-Account -->
<div class="mt-5 text-muted text-center">
    Don't have an account? <a href="auth-register.html">Create One</a>
</div><!-- /Link-to-Create-Account -->