$(function(){
    // When Click Create Backup Button,Create System Backup
    __click_create_backup_button();

    // Display Toggle Backup History
    __display_toggle_backup_history();

    // When Click Backup Download Button,Download Backup
    __click_backup_download_button();
});

/**
 * When Click Create Backup Button,Create System Backup
 */
function __click_create_backup_button()
{
    $("#create-buckup-btn").on("click",function(){
        __create_system_backup();
    });
}

/**
 * Create System Backup
 */
function __create_system_backup()
{
    $.postJSON(
        api_url + "create/backup/",
        {
            "user_id":user_id
        },
        function(data){
            location.reload();
        }
    );
}

/**
 * Display Toggle Backup History
 */
function __display_toggle_backup_history()
{
    $("#select-backup-history-box .dropdown-item").on("click",function(){

        (
            $("#backup-download-btn").hasClass("d-none")
            &&
            $("#backup-download-btn").removeClass("d-none")
        );

        let backup_history_tables = $(".backup-history-table");
        for(let i = 0;i < backup_history_tables.length;i++)
        {
            backup_history_tables.addClass("d-none");
            backup_history_tables.removeClass("active");
        }
        let select_backup = $(this).attr("id");
        $("."+select_backup).removeClass("d-none");
        $("."+select_backup).addClass("active");
    });
}

/**
 * When Click Backup Download Button,Download Backup
 */
function __click_backup_download_button()
{
    $("#backup-download-btn").on("click",function(){
        let backup_id = $(".backup-history-table.active").data("time");
        $("#input-backup-time").val(backup_id);
        $("#backup-download-form").submit();
    });
}