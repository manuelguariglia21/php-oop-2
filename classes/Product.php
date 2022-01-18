<?php
  class Product{

    /*Variabili d’istanza*/
    private $name;
    private $brand;
    private $price;
    protected $discount = 0;
    protected $category;


    /*Costruttore*/
    function __construct($_name, $_brand,$_price){
      $this->name = $_name;
      $this->brand = $_brand;
      $this->price = $_price;

    }

    /*Metodi Set*/

    public function setName($_name){
      $this->name = $_name;
    }
    public function setBrand($_brand){
      $this->brand = $_brand;
    }
    public function setPrice($_price){
      $this->price = $_price;
    }
    public function setDiscount($_discount){
      $this->discount = $_discount;
    }
    public function setCategory($_category){
      $this->category = $_category;
    }

    /*Metodi Get*/

    public function getName(){
      return $this->name;
    }

    public function getBrand(){
      return $this->brand;
    }

    public function getPrice(){
      return $this->price;
    }

    public function getDiscount(){
      return $this->discount;
    }

    public function getSalePrice(){
      $sale_price = $this->price - (($this->discount/100)*$this->price);
      return $sale_price;
    }

    public function getCategory(){
      return $this->category;
    }

  }
?>