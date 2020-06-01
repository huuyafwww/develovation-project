<!-- Table -->
<table
    class="table table-striped table-hover table-bordered d-none backup-history-table backup-<?php echo $__backup->time; ?>"
>

    <!-- Tbody -->
    <tbody>
        <tr>
            <td>編集者</td>
            <td>
                <?php echo $__backup->display_name; ?>
            </td>
        </tr>
        <tr>
            <td>編集日時</td>
            <td>
                <?php echo $__backup->date; ?>
            </td>
        </tr>
        <tr>
            <td>SQLのバックアップ</td>
            <td>
                <?php echo $__backup->backup_sql; ?>
            </td>
        </tr>
        <tr>
            <td>ダウンロード回数</td>
            <td>
                <?php echo $__backup->download_count; ?>
            </td>
        </tr>
    </tbody><!-- /Tbody -->

</table><!-- /Table -->