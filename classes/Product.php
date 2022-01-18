<?php
  class Product{

    /*Variabili d’istanza*/
    private $name;
    private $brand;
    private $price;
    private $discount = 0;

    /*Costruttore*/
    function __construct($_name, $_brand,$_price){
      $this->name = $_name;
      $this->brand = $_brand;
      $this->price = $_price;
    }


  }
?>