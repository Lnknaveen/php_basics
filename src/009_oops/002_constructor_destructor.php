<?php 

    class CPerson {
        public $name;
        public $age;
        // You can't write multiple __construct() methods with different numbers of parameters. Different constructor behavior must be handled with logic within a single __construct() method.
        public function __construct($name, $age) {
          $this->name = $name;
          $this->age = $age;

          echo "Object created with name: $name, age: $age";
        }

        public function __destruct() {
            echo "Object destroyed";
        }
    }

    $p = new CPerson("First Name", 23);
    // unset($p); // manual destruct
?>