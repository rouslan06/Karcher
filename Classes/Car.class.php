<?php


require_once 'Product.class.php';

// Cr&ation de la class Car enfant de la class Product //
class Car extends Product{

    public function  __construct($image,$model,$brand,$description,$year,$time_limit,$price){
        parent::__construct($image,$model,$brand,$description,$year,$time_limit,$price);
    }

}
