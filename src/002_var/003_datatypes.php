<?php  
    // String, Integer, Float, Boolean, Array, Object, NULL, Resource

    $string1 = "Hello world!"; //double quotes
    $string2 = 'Hello world!';  //single quotes
    // join 2 strings
    echo $string1 . $string2;

    $int1 = 42; // positive number
    $int2 = -42; // negative number

    $float1 = 42.168;

    $bool1 = true; 

    $str = "10";
    $int = 20;

    // PHP automatically converts each variable to the correct data type, according to its value
    echo ($str + $int); 
?>