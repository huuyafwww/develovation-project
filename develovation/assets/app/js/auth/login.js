"use strict";

$(function(){

    // Insert Client User Agent to Input hidden Dom
    __insert_ua2input_hidden();

});


/**
 * Insert Client User Agent to Input hidden Dom
 */
function __insert_ua2input_hidden(){
    $("#client_ua")
        .val(
            window.navigator.userAgent
        )
    ;
}