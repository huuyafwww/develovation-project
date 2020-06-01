$(function(){
    // When Click Create Backup Button,Create System Backup
    __click_create_backup_button();

    // Display Toggle Backup History
    __display_toggle_backup_history();
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
        let backup_history_tables = $(".backup-history-table");
        for(let i = 0;i < backup_history_tables.length;i++)
        {
            backup_history_tables.addClass("d-none");
        }
        let select_backup = $(this).attr("id");
        $("."+select_backup).removeClass("d-none");
    });
}