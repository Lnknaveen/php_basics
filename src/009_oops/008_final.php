<?php

    // The PHP final keyword defines methods that cannot be overridden in child classes. Classes that are defined final cannot be inherited.

    class myClass {
        final function myFunction() {
          echo "Parent";
        }
    }
    
    // ERROR because a final method cannot be overridden in child classes.
    class myClass2 extends myClass {
        // function myFunction() {
        //   echo "Child";
        // }
    }

    final class myFinalClass {
    }

    // ERROR because a final class cannot be inherited.
    // class myClass extends myFinalClass {
    // }

    // Unlike classes and methods, properties cannot be marked final.
?>