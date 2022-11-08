<?php


require_once 'Product.class.php';

class Car extends Product{

    public function  __construct($model,$brand,$year,$price,$date,$image,$description){
        parent::__construct($model,$brand,$year,$price,$date,$image,$description);
    }

}
