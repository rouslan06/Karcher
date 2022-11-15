<?php

// Création de la class parent avec tous les attributs requis en protected //

class Product{

  protected string $image;
  protected string $model;
  protected string $brand;
  protected string $description;
  protected int $year;
  protected float $price;
  

  public function  __construct($image,$model,$brand,$description,$year,$price){
      $this->image = $image;
      $this->model = $model;
      $this->brand = $brand;
      $this->description = $description;
      $this->year = $year;
      $this->price = $price;
  }

  // récupération des attributs  protected //

  public function getImage()
  {
    return $this->image;
  }

  public function setImage($image)
  {
    if ($image != "") {
      $this->image = $image;
    }
  }
  
  public function getModel()
  {
    return $this->model;
  }

  public function setModel($model)
  {
    if ($model != "") {
      $this->model = $model;
    }
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    if ($brand != "") {
      $this->brand = $brand;
    }
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    if ($description != "") {
      $this->description = $description;
    }
  }

  public function getYear()
  {
    return $this->year;
  }

  public function setYear($year)
  {
    if ($year != "") {
      $this->year = $year;
    }
  }


  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    if ($price != "") {
      $this->price = $price;
    }
  }
}