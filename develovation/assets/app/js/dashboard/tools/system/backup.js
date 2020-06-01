$(function(){
});

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
            console.log(data);
        }
    );
}