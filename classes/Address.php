<?php
  trait Address {
    public $route;
    public $town;
    public $country;
    public $zip;
  
    public function getAddress(){
      return "$this->route, $this->town, $this->country, $this->zip";
    }
  
  }
?>