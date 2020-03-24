<?php

    /* 
        for (init; test; increment) {
          code to be executed;
        }
    */

    for ($a = 0; $a < 6; $a++) {
        echo "Value of a : ". $a . "<br />";
     }

     /*

     foreach (array as $value) {
        code to be executed;
    }
    //or
    foreach (array as $key => $value) {
        code to be executed;
    }

     */

    $names = array("John", "David", "Amy");
    foreach ($names as $name) {
       echo $name.'<br />';
    }
    
?>