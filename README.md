chickens
========

This application demonstrates some of the Object Oriented Programming in PHP5, like : Attributes visibility(Encapulation), Inheritance, Polymorphism and Aggregation ,etc

Summary
-------

- The Behavior Interface has two method signatures fly() and lay_eggs().
- The Bird class is abstract, represents any bird with the properties $name, $age, $weight, $_gender. It defines some getter and setter methods.
- The Chicken class extends the Bird class and implements the Behavior interface. It has one more property than Bird, $_courted.
- The Rooster class extends the Bird class and implements the Behavior interface as well. It has the court() method.
- The Flock class has a $_members attribute, which is an array of chickens and roosters objects. The flock class has a get_leader() method that returns the first rooster of the $_members array.

- The main.php illustrates some usage of the above classes by defining two functions bird_life() and main().

Requirements
------------
The app requires Apache web server and PHP5 to be installed

Usage
-----
Please, run the main.php file in the browser


