<?php
  class Customer extends User{
    
    private $card;
    private $cart;

    public function setCreditCard($_number,$_name, $_expired_date_m, $_expired_date_y, $_cvv){
      try{
        $this->card = new CreditCard($_number,$_name, $_expired_date_m, $_expired_date_y, $_cvv);
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }

    public function getCreditCard(){
      return $this->card;
    }
  

  }
?>