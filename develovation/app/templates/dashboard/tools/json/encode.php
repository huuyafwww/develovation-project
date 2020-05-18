<!-- Row -->
<div class="row">

    <!-- Col-sm-12 -->
    <div class="col-sm-12">

        <!-- Card -->
        <div class="card card-primary">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>デコード済みの連想配列 || json文字列</h4>
            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">

                <!-- Form-Body -->
                <div class="form-group mb-0">
                    <textarea
                        id="input"
                        class="form-control h-auto"
                        rows="15"
                    ></textarea>
                </div><!-- /Form-Body -->

            </div><!-- /Card-Body -->

        </div><!-- /Card -->

    </div><!-- /Col-sm-12 -->

    <!-- Col-sm-12 -->
    <div class="col-sm-12">

        <!-- Card -->
        <div class="card card-primary">

            <!-- Card-Header -->
            <div class="card-header">
                <h4>エンコード済みの連想配列 || json文字列</h4>
                <div class="card-header-action">
                    <a
                        id="copy-btn"
                        class="btn btn-icon btn-info"
                        href="#"
                        data-clipboard-target="#output"
                    >
                        <i class="far fa-copy"></i>
                    </a>
                </div>
            </div><!-- /Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">
                <pre id="output"></pre>
            </div><!-- /Card-Body -->

        </div><!-- /Card -->

    </div><!-- /Col-sm-12 -->

</div><!-- /Row -->