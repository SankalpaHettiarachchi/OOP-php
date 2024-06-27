<?php

class Product{
    var $id;
    var $name;
    var $price;
    var $discount;

    function  display_tag(){
        print_r([
            'ID: '.$this->id,
            'Name: '.$this->name,
            'Price: '.$this->price,
            'Discount: '.$this->discount
        ]);
    }
}

class Computer extends Product{
    var $processor;

    // Overriding the display_tag method of the parent class
    function  display_tag(){
        print_r([
            'ID: '.$this->id,
            'Name: '.$this->name,
            'Price: '.$this->price,
            'Discount: '.$this->discount,
            'Processor'.$this->processor
        ]);
    }
}

//------------------------------------------------------------------
// Create object of parent class
$parentProduct_1 = new Product();
$parentProduct_1->id = '000';
$parentProduct_1->name = 'Parent Product';
$parentProduct_1->price = 00000;
$parentProduct_1->discount = 0;

$parentProduct_1->display_tag();

//------------------------------------------------------------------
// Create object of sub class
$compter_1 = new Computer();
$compter_1->id = '001';
$compter_1->name = 'Parent Product';
$compter_1->price = 00000;
$compter_1->discount = 0;
$compter_1->processor = 'Intel Core i5';

$compter_1->display_tag();

