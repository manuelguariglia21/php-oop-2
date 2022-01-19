<?php

require_once __DIR__ . "/Address.php";

class User{
  
  use Address;

  //Variabili istanze
  private $name;
  private $lastname;
  private $email;

  //Costruttore
  function __construct($_name, $_lastname, $_email){
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->email = $_email;
  }

  //Metodi Set

  public function setName($_name){
    $this->name = $_name;
  }

  public function setLastname($_lastmame){
    $this->lastname = $_lastmame;
  }

  public function setEmail($_email){
    $this->email = $_email;
  }

  //Metodi Get

  public function getName(){
    return $this->name;
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function getEmail(){
    return $this->email;
  }
}
?>