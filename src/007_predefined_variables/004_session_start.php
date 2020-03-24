<?php
    // Start the session
    session_start();

    $_SESSION['color'] = "red";
    $_SESSION['name'] = "John";
?>

<a href="004_session_next.php" > Next </a>