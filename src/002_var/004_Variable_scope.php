<?php
  
  $g_name = "GNAME"; // global scope


  function getName() {
      // not available echo $g_name;

      $name = 'Test Name'; // local scope
      echo $name;

      global $g_name;
      echo $g_name;
  }

  getName();
  
  echo $g_name;
  // not available echo $name;

?>