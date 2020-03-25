<?php

    $lines = file('file.txt');
    
    $count = count($lines);
    echo "Number of line: $count\n";
    
    foreach ($lines as $line) {
        echo $line;   
    }
    
?>