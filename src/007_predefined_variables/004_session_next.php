<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <?php
        echo "Your name is " . $_SESSION['name'];
        // Outputs "Your name is John"

        // All global session variables can be removed manually by using session_unset(). You can also destroy the session with session_destroy().
    ?>
</body>

</html>

