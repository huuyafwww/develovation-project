
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

<title>ログイン</title>


<link rel="stylesheet" href="/github/develovation-project/develovation/app/assets/lib/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="/github/develovation-project/develovation/app/assets/lib/css/fontawesome/all.min.css">
<link rel="stylesheet" href="/github/develovation-project/develovation/app/assets/lib/css/stisla/style.min.css">
<link rel="stylesheet" href="/github/develovation-project/develovation/app/assets/lib/css/stisla/components.min.css">

<link rel="stylesheet" href="/github/develovation-project/develovation/app/assets/app/css/app.css?v=1583648262">
<link rel="stylesheet" href="/github/develovation-project/develovation/app/assets/lib/css/bootstrap-social/bootstrap-social.css">
</head>
<body class="login">

    <!-- HTML-Parts -->
    <app-html>

        <!-- Main-Section -->
        <section class="section">
            
            <!-- Main-Container -->
            <div class="container mt-5">
                
                <!-- Row -->
                <div class="row">

                    <!-- Main-Column -->
                    <div 
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4"
                    >
                        <!-- Login-Brand -->
                        <div class="login-brand">
    <img
        src="/github/develovation-project/develovation/app/assets/app/img/brand/stisla-fill.svg?v=1583648262"
        alt="logo"
        width="100"
        class="shadow-light rounded-circle"
    >
</div><!-- /Login-Brand -->
                            
                        <!-- Card -->
<div class="card card-primary">
                            
    <!-- Card-Header -->
    <div class="card-header">

        <!-- Card-Title -->
        <h4>
            ログイン        </h4><!-- /Card-Title -->
        
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
                    class="btn btn-primary btn-lg btn-block"
                    type="submit"
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
                        <!-- Footer -->
                        <div class="simple-footer">
    Copyright &copy; Stisla 2018
</div><!-- /Footer -->

                    </div><!-- /Main-Column -->

                </div><!-- /Row -->

            </div><!-- /Main-Container -->

        </section><!-- /Main-Section -->
    
    </app-html><!-- /HTML-Parts -->

    <!-- JS-Parts -->
    <app-js>
        <script defer src="/github/develovation-project/develovation/app/assets/lib/js/jquery/jquery.min.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/popper/popper.min.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/bootstrap/bootstrap.min.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/nicescroll/jquery.nicescroll.min.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/moment/moment.min.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/stisla/stisla.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/stisla/scripts.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/pjax/jquery.pjax.min.js"></script>
<script defer src="/github/develovation-project/develovation/app/assets/lib/js/fullscreen/jquery.fullscreen.min.js"></script>

<script defer src="/github/develovation-project/develovation/app/assets/app/js/app.js?v=1583648262" id="main-js" data-token="41ca999f58ea6c5e92ff02601a5e8b009f048f5a275c720f9cea9b29ffda941a5e643105872cd"></script>
    </app-js><!-- /JS-Parts -->

</body>
</html>