<?php
class Employee {    
    Public $name;
    public $annualSalary;

    // Constructor call when object is created
    function __construct($name,$salary) {
        $this->name = $name;
        $this->annualSalary = $salary * 12;
    }

    // A destructor is called when the object is destructed or the script is stopped or exited.
    function __destruct(){
        print($this->name.'`s anual Salary is:'.$this->annualSalary);
    }
}

$employee_1 = new Employee('Sankalpa',50000);