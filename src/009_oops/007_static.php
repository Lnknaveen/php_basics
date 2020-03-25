<?php
    // The PHP static keyword defines static properties and static methods.
    // A static property or method is accessed by using the scope resolution operator :: between the class name and the property/method name.

    class MyClass {
        static $myStaticProperty = 42;

        // The self keyword is needed to access a static property from a static method in a class definition.
        static function myMethod() {
            echo self::$myStaticProperty;
        }
    }
      
    echo MyClass::$myStaticProperty;
?>