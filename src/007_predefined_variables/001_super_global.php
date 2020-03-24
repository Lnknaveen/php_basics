<?php 
    // A superglobal is a predefined variable that is always accessible, regardless of scope.
    // $_SERVER - is an array that includes information such as headers, paths, and script locations.
    // $GLOBALS, 
    // $_REQUEST, 
    // $_POST, 
    // $_GET, 
    // $_FILES, 
    // $_ENV, 
    // $_COOKIE, 
    // $_SESSION

    require '000_print_values.php';

    echo "<h1> _SERVER </h1>";
    printArray($_SERVER);

    echo "<h1> _SERVER </h1>";
    printArray($_SERVER);
?>