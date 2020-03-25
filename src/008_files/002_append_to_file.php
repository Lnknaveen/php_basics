
<?php

    $myFile = "file.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, "Some text");
    fclose($fh);

?>