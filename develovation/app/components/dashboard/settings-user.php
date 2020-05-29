<div
    class="tab-pane fade active show"
    id="settings-user-tab"
    role="tabpanel"
    aria-labelledby="settings-user-nav-link"
>
    <form
        method="POST"
        action=""
    >
        <div class="card card-primary" id="settings-card">
            <div class="card-header">
                <h4>ユーザー 設定</h4>
            </div>
            <div class="card-body">
                <div class="form-group row align-items-center">
                    <label for="user_name" class="form-control-label col-sm-3 text-md-right">ログインユーザー名</label>
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
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="display_name" class="form-control-label col-sm-3 text-md-right">表示名</label>
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
                    </div>
                </div>
                <?php __insert_input_hidden("action","user"); ?>
            </div>
            <div class="card-footer bg-whitesmoke text-md-right">
                <button
                    class="btn btn-primary"
                    type="submit"
                >
                    保存
                </button>
            </div>
        </div>
    </form>
</div>