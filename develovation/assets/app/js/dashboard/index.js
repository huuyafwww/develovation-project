$(function(){

    // Logout User
    __logout();

});

/**
 * Logout User
 */
function __logout()
{
    $("#logout").on("click",function(){
        $("#logout-form").submit();
    });
}