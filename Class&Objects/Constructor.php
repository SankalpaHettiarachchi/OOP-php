<?php
class Employee {    
    public $annualSalary;

    // Constructor call when object is created
    function __construct($salary) {
        $this->annualSalary = $salary * 12;
    }
    function get_annual_salary() {
        print($this->annualSalary);
    }
}

$employee_1 = new Employee(50000);
echo $employee_1->get_annual_salary();