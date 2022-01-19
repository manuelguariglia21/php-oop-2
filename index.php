<?php
  use FFI\Exception;
  require_once __DIR__.'/classes/Product.php';
  require_once __DIR__.'/classes/Smartphone.php';
  require_once __DIR__.'/classes/User.php';
  require_once __DIR__.'/classes/CreditCard.php';
  require_once __DIR__.'/classes/Customer.php';

  $new_product = new Smartphone('Iphone 13', 'Apple', 930, 64,'red', 'Nano - eSIM');
  $new_product->setDiscount(10);

  $user = new Customer('Manuel', 'Guariglia', 'manuelguariglia@gmail.com');

  $user->setCreditCard(555555555555, 'Manuel Guariglia', 578, 12, 20);
  $yourcard = $user->getCreditCard();
  $user->route = "Via Montenapoleone";
  $user->town = "Milano";
  $user->zip = 20100;
  $user->Country = 'Italia';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Shop</title>
</head>
<body>

  <p>
    Benvenuto
    <?php
      echo $user->getName();
    ?>
  </p>

  <h1>
    <?php
      echo $new_product->getName();
    ?>
  </h1>

  <p>
    <?php
      echo $new_product->getBrand();
    ?>
  </p>

  <p>
    Prezzo originale:
    <?php
      echo $new_product->getPrice();
    ?>
    €
  </p>

  <p>
    Prezzo scontato:
    <?php
      echo $new_product->getSalePrice();
    ?>
    €
  </p>
  <p>
    Address:
    <?php
      echo $user->route;
    ?>
  </p>


</body>
</html>