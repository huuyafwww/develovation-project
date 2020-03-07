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
        <form method="POST">
            
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
                    type="password"
                    class="form-control pwstrength"
                    data-indicator="pwindicator"
                    name="password"
                    tabindex="2"
                    required
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
                <label for="password2" class="d-block">
                    パスワード（再確認）
                </label><!-- /Label -->

                <!-- Input-Password-Confirm -->
                <input
                    id="password2"
                    type="password"
                    class="form-control" 
                    name="password-confirm"
                    tabindex="3"
                    required
                ><!-- /Input-Password-Confirm -->

            </div><!-- /Form-Group -->

            <!-- Form-Group -->
            <div class="form-group">

                <!-- Custom-Checkbox -->
                <div class="custom-control custom-checkbox">
                    
                    <!-- Input-Checkbox -->
                    <input
                        type="checkbox"
                        name="agree"
                        class="custom-control-input"
                        id="agree"
                        tabindex="4"
                        required
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
                    type="submit"
                    class="btn btn-primary btn-lg btn-block"
                    tabindex="5"
                >
                    新規登録
                </button><!-- /Button-Submit -->

            </div><!-- /Form-Group -->

        </form><!-- /Form -->
    
    </div><!-- /Card-Body -->

</div><!-- /Card -->