<?php

class Employee{
    public $id;
    public $name;

    public $monthlySalary = 5000;

    function getAnualSalary(){
        return $this->monthlySalary * 12;
    }

}
// Create an object of Employee class
$mike = new Employee();

// Set object properties values (Mike monthly salary)
$mike->monthlySalary = 50000;

// Call a class method from an object (Mike annual salary)
print("Mike's Annual Salary: " . $mike->getAnualSalary() . "\n");
