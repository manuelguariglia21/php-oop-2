<?php

class CreditCard{
  private $number;
  private $name;
  private $cvv;
  private $expired_date_m;
  private $expired_date_y;

  function __construct($_number, $_name, $_cvv,$_expired_date_m, $_expired_date_y){
    
    $this->number = $this->checkNumber($_number);
    $this->name = $_name;
    $this->cvv = $_cvv;
    $this->expired_date_m = $_expired_date_m;
    $this->expired_date_y = $_expired_date_y;
  }

  //GETTING
  public function getNumber(){
    return $this->number;
  }
  public function getName(){
    return $this->name;
  }

  public function checkNumber($_number) {
    if (!is_int($_number) || strlen($_number) !== 12) {
    throw new Exception('Numero carta non valido ');
    }
    return $_number;
  }



}