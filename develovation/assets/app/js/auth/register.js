"use strict";

$(function(){

    // Activation Pwstrength
    activation_pwstrength();

    // Activation Password Checker
    activation_pw_checker();
});

/**
 * Activation Pwstrength
 */
function activation_pwstrength()
{
    $(".pwstrength").pwstrength();
}

/**
 * Activation Password Checker
 */
function activation_pw_checker()
{
    $("#register-form").submit(function(){
        let password = $("#password").val();
        let password_confirm = $("#password-confirm").val();
        return(
            password == password_confirm ?
            true :
            password_not_matching()
        );
    });
}


/**
 * When Password does not match,Alert
 */
function password_not_matching(){
    alert("パスワードが一致しません");
    return false;
}