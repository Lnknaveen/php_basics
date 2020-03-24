<?php 

    /*

        if (condition) {
            code to be executed if condition is true;
        } elseif (condition) {
            code to be executed if condition is true;
        } else {
            code to be executed if condition is false;
        }

    */
    $result = true;
    if($result == true) {
        echo "TRUE";
    } elseif($result == false) {
        echo "FALSE";
    } else {
        echo "ELSE";
    }

    // only if
    if(!false) {
        echo "TRUE";
    }

?>