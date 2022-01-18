<?php
  require_once __DIR__.'/classes/Product.php';
  require_once __DIR__.'/classes/Smartphone.php';
  $new_product = new Smartphone('Iphone 13', 'Apple', 930, 64,'red', 'Nano - eSIM');
  $new_product->setDiscount(10);
  var_dump($new_product)
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


</body>
</html>