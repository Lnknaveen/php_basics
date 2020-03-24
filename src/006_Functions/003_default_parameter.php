<?php 

    // Default arguments
    // always right end
    function setCounter($num=10) {
        echo "Counter is ".$num;
    }
    setCounter(42);  // Counter is 42
    setCounter();  // Counter is 10

?>