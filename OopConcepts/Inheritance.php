<?php

class Product{
    var $id;
    var $name;
    var $price;

    var $discount;

    function  Get_Sales_Price(){
        return $this->price - $this->price * $this->discount / 100;
    }
}

// Inherit Product class
class Computer extends Product{
    var $processor;

}

class Mobile extends Product{
    var $camera;
}

//---------------------------------------------------------------------
// Create an object of Computer class
$compter_1 = new Computer();

// Set the values of the super class properties
$compter_1->id = 001;
$compter_1->name = "Dell I3 Laptop";
$compter_1->price = 150000;
$compter_1->discount = 10;

// Set the value of the Computer sub class property
$compter_1->processor = "Intel Core i5";

// Display the computer & sales price
print_r( $compter_1);
print_r($compter_1->Get_Sales_Price());

//---------------------------------------------------------------------
// Create an object of Mobile class
$mobile_1 = new Mobile();

// Set the values of the super class properties
$mobile_1->id = 0;
$mobile_1->name = "Samsung Galaxy S10";
$mobile_1->price = 65000;
$mobile_1->discount = 2;

// Set the value of the Mobile sub class property
$mobile_1->camera = "12 MP";

// Display the mobile & sales price
print_r( $mobile_1);
print_r($mobile_1->Get_Sales_Price());