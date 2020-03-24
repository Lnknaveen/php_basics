<html>
<body>

    <?php
        echo "Hi ".$_GET['name'].". ";
        echo "You are ".$_GET['age']." years old.";
    ?>

    <?php 
        require '000_print_values.php';
        
        echo "<h1> _GET </h1>";
        printArray($_GET);
    ?>

</body>
</html>