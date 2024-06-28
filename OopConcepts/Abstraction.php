<?php

abstract class Employee
{
    public $id;
    public $name;

    public function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;
    }
    abstract public function get_annual_salary();
}

class Developer extends Employee
{
    public $monthly_salary;
    public function __construct($id,$name,$monthly_salary){
        $this->id = $id;
        $this->name = $name;
        $this->monthly_salary = $monthly_salary;
    }
    public function get_annual_salary()
    {
        print('Developer annual Salary ='. $this->monthly_salary * 12)."\n";
    }
}

class PM extends Employee
{
    public $monthly_salary;
    public function __construct($id,$name,$monthly_salary){
        $this->id = $id;
        $this->name = $name;
        $this->monthly_salary = $monthly_salary;
    }
    public function get_annual_salary()
    {
        print('PM annual Salary ='. ($this->monthly_salary * 12) + 15000)."\n";
    }
}

$developer_01 = new Developer('001','Sankalpa',500000);
$developer_01->get_annual_salary();

$pm_01 = new PM('001','Sankalpa',500000);
$pm_01->get_annual_salary();