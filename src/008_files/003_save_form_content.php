<?php
    // The isset() contains a value.
    if(isset($_POST['text'])) {
        $name = $_POST['text'];

        $handle = fopen('file.txt', 'a');
        fwrite($handle, $name."\n");
        
        fclose($handle); 
    }
?>

<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>