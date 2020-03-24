<?php 

    /*
        while (condition is true) {
            code to be executed;
        }
    */


    $i = 1;
    while ($i < 7) {
        echo "The value is <strong><h1>$i</h1></strong> <br />";
        $i++;
    }

    /*
        do  {
                code to be executed;
            } while (condition is true); 

    */

    $i = 5;
    do {
        echo "The number is " . $i . "<br/>";
        $i++;
    } while($i <= 7);

?>