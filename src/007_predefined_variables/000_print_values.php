<?php

    function printArray($arrayToPrint) {
        foreach($arrayToPrint as $key => $value) {
            echo "<pre>" . $key . "     =>      " . $value . "</pre>";
        } 
    }

?>