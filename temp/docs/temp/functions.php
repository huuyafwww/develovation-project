<?php

function a_b(){
    echo "a_b";
}

function a_c(){
    echo "a_c";
}

$f = "c";

call_user_func("a_".$f);