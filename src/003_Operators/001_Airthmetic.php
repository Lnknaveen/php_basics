<?php 

    $num1 = 8;
    $num2 = 16;

    echo $num1 + $num2; // Addition
    echo $num1 - $num2; // Subtract
    echo $num1 * $num2; // Multiplication
    echo $num1 / $num2; // Division

    /* If you use floating point numbers with the modulus operator, they will be converted to integers before the operation. */
    echo $num1 % $num2; // Modulus 

    echo $num1++; // POST increment
    echo ++$num2; // PRE increment
    
    echo $num1--; // POST decrement
    echo --$num2; // PRE decrement

?>
