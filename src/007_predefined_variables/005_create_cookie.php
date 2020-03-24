<?php 

    // setcookie(name, value, expire, path, domain, secure, httponly);

    $value = "John";
    setcookie("user", $value, time() + (86400 * 30), '/'); 

    if(isset($_COOKIE['user'])) {
        echo "Value is: ". $_COOKIE['user'];
    } else {
        echo "Please refresh the browser!";
    }
    //Outputs "Value is: John"
?>