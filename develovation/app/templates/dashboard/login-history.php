<div class="row">
    <div class="col-12">

        <!-- Card -->
        <div class="card">

            <!-- Card-Body -->
            <div class="card-body p-0">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">項番</th>
                            <th scope="col">IPアドレス</th>
                            <th scope="col">ログイン日時</th>
                            <th scope="col">デバイス</th>
                            <th scope="col">種類</th>
                            <th scope="col">OS</th>
                            <th scope="col">ブラウザ名</th>
                            <th scope="col">ブラウザVer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach(
                                array_reverse(
                                    __get_controller_var("__login_history")
                                )
                                as $__index
                                => $__history
                            ):
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $__index; ?>
                            </th>
                            <td>
                                <?php echo $__history->ip; ?>
                            </td>
                            <td>
                                <?php echo __time2date($__history->time); ?>
                            </td>
                            <td>
                                <?php echo $__history->device; ?>
                            </td>
                            <td>
                                <?php echo $__history->type; ?>
                            </td>
                            <td>
                                <?php echo $__history->os; ?>
                            </td>
                            <td>
                                <?php echo $__history->browser_name; ?>
                            </td>
                            <td>
                                <?php echo $__history->browser_version; ?>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div><!-- /Card-Body -->

        </div><!-- /Card -->

    </div>
</div>