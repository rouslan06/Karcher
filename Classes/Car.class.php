<?php


require_once 'Product.class.php';

class Car extends Product{

    public function  __construct($image,$model,$brand,$description,$year,$time_limit,$price){
        parent::__construct($image,$model,$brand,$description,$year,$time_limit,$price);
    }

}
