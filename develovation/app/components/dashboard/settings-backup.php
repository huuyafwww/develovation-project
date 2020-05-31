<?php $__backup_settings = __get_controller_var("__backup_settings"); ?>
<div
    class="tab-pane fade"
    id="settings-backup-tab"
    role="tabpanel"
    aria-labelledby="settings-backup-nav-link"
>
    <form
        method="POST"
        action=""
    >
        <div class="card card-primary" id="settings-card">
            <div class="card-header">
                <h4>システムのバックアップ 設定</h4>
            </div>
            <div class="card-body">
                <div class="form-group row align-items-center">
                    <label for="is_backup" class="form-control-label col-sm-3 text-md-right">システムのバックアップ</label>
                    <div class="col-sm-6 col-md-9">
                        <select id="is_backup" class="form-control" name="is_backup">
                            <option
                                value="1"
                                <?php
                                    if(
                                        (bool)$__backup_settings->is_backup
                                    ) echo " selected";
                                ?>
                            >
                                する
                            </option>
                            <option
                                value="0"
                                <?php
                                    if(
                                        !(bool)$__backup_settings->is_backup
                                    ) echo " selected";
                                ?>
                            >
                                しない
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="max_count" class="form-control-label col-sm-3 text-md-right">最大保有数</label>
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
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="is_backup_sql" class="form-control-label col-sm-3 text-md-right">SQLのバックアップ</label>
                    <div class="col-sm-6 col-md-9">
                        <select id="is_backup_sql" class="form-control" name="is_backup_sql">
                            <option
                                value="1"
                                <?php
                                    if(
                                        (bool)$__backup_settings->is_backup_sql
                                    ) echo " selected";
                                ?>
                            >
                                する
                            </option>
                            <option
                                value="0"
                                <?php
                                    if(
                                        !(bool)$__backup_settings->is_backup_sql
                                    ) echo " selected";
                                ?>
                            >
                                しない
                            </option>
                        </select>
                    </div>
                </div>
                <?php __insert_input_hidden("action","backup"); ?>
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