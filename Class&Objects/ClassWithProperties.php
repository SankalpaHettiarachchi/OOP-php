<?php

use function PHPSTORM_META\type;

class Employee{
    var $id;
    var $name;

}

// Create objects(Employees)
$mike = new Employee();
$david = new Employee();

// Set mike object properties
$mike->id = 100;
$mike->name = "Mike Samson";

// Set david object properties
$david->id = 200;
$david->name = "David Jackson";

// Get mike object properties
print_r($mike);
// Get david object properties
print_r($david);

// Get mike object specific properties
print($mike->id);
print("\n" . $mike->name); //print in a new line

// Get data type of obect properties
print(gettype($mike->id));
