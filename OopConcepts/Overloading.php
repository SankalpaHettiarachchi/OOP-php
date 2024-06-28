<?php

class Employee{
    public $basicSalary = 50000;

    // The __call method is automatically called when you try to call a method that does not exist in the class.
    public function __call($member, $arguments){
        $numberOfArguments = count($arguments);
        if(method_exists($this, $function = $member.$numberOfArguments)){
            call_user_func_array(array($this, $function), $arguments);
        }
    }
    private function get_basic_salary0(){
        print($this->basicSalary."\n");
    }
    private function get_basic_salary1($epf){
        $basicSalary = $this->basicSalary + $epf;
        print($basicSalary."\n");
    }
    function set_basic_salary($salary){
        $this->basicSalary = $salary;
    }
}

class FullTimeEmployee extends Employee{

}

$full_time_employee_01 = new FullTimeEmployee();
$full_time_employee_01->set_basic_salary(60000);

// Overloading get basic salary method using argument
$full_time_employee_01->get_basic_salary();
$full_time_employee_01->get_basic_salary(5000);

