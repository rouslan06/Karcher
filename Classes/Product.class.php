<?php

class Product{

    protected string $model;
    protected string $brand;
    protected int $year;
    protected float $price;
    protected string $date;
    protected string $image;
    protected string $description;


    public function  __construct($model,$brand,$year,$price,$date,$image,$description){
        $this->model = $model;
        $this->brand = $brand;
        $this->year = $year;
        $this->price = $price;
        $this->date =$date;
        $this->image = $image;
        $this->description = $description;
    }

    



}