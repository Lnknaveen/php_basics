<?php
  $a = 'hello';
  $hello = "Hi!";
  echo $$a; // refers to the value of variable

  // Outputs 'Hi!' $a -> hello -> $hello = $$a
?>