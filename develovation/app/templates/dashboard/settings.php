
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Jump To</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a
                            class="nav-link active show"
                            id="settings-user-nav-link"
                            data-toggle="tab"
                            href="#settings-user-tab"
                            role="tab"
                            aria-controls="settings-user"
                            aria-selected="true"
                            >
                                ユーザー
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="settings-notify-nav-link"
                            data-toggle="tab"
                            href="#settings-notify-tab"
                            role="tab"
                            aria-controls="settings-notify"
                            aria-selected="false"
                            >
                                通知
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="tab-content no-padding">
            <?php __get_component("settings-user.php"); ?>
            <?php __get_component("settings-notify.php"); ?>
        </div>
    </div>
</div>