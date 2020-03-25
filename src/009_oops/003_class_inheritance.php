<?php 

    class Animal {
        public $name;
        public function hi() {
            echo "Hi from Animal";
        }
    }

    // Parent constructors are not called implicitly if the subclass defines a constructor. 
    // However, if the child does not define a constructor then it will be inherited from the parent class if it is not declared private.
    class Dog extends Animal {
    }
  
    $d = new Dog();
    $d->hi();
?>