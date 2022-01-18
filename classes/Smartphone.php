<?php
require_once __DIR__ . "/Product.php";

  class Smartphone extends Product{
    /*Variabili d’istanza*/
    private $capacity;
    private $color;
    private $sim_card;

    /*Costruttore*/
    function __construct($_name, $_brand, $_price, $_capacity, $_color, $_sim_card){
      parent::__construct($_name, $_brand,$_price);
      $this->capacity = $_capacity;
      $this->color = $_color;
      $this->sim_card = $_sim_card;

    }

    /*Metodi Set*/
    public function setCapacity($_capacity){
      $this->capacity = $_capacity;
    }
    public function setColor($_color){
      $this->color = $_color;
    }
    public function setSimCard($_sim_card){
      $this->sim_card = $_sim_card;
    }

    /*Metodi Get*/
    public function getCapacity(){
      $this->capacity;
    }
    public function getColor(){
      $this->color;
    }
    public function getSimCard(){
      $this->sim_card;
    }


  }

?>