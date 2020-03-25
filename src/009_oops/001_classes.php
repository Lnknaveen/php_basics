<?php 

    class Person {
        public $age; // property
        
        public function speak() { // method
            echo "Hi!";
        }

        public function get_age() {
            return $this->age;
        }
    }

    $bob = new Person(); // instance
    $bob->age = 20; // assignment
    echo $bob->age;
    echo $bob->get_age();
    $bob->speak();

?>