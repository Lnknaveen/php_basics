<html>
<body>

    Welcome <?php echo $_POST["name"]; ?><br />
    Your age: <?php echo $_POST["age"]; ?>


    <?php 
        require '000_print_values.php';
        
        echo "<h1> _POST </h1>";
        printArray($_POST);
    ?>

</body>
</html>