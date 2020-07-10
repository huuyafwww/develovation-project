"use strict";

$(function(){

    // Activation Pwstrength
    __activation_pwstrength();

    // Activation Password Checker
    __activation_pw_checker();

});

/**
 * Activation Pwstrength
 */
function __activation_pwstrength()
{
    $(".pwstrength").pwstrength();
}

/**
 * Activation Password Checker
 */
function __activation_pw_checker()
{
    $("#register-form").submit(function(){
        let password = $("#password").val();
        let password_confirm = $("#password-confirm").val();
        return(
            password == password_confirm ?
            true :
            __password_not_matching()
        );
    });
}


/**
 * When Password does not match,Alert
 */
function __password_not_matching(){
    alert("パスワードが一致しません");
    return false;
}