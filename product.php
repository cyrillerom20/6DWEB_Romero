<?php
    include 'includes/header.php';
    include 'includes/footer.php';
        
    $name = 'Ivy';
    $greeting = 'Welcome back';
    if(!empty($name)){
        $greeting = "Hello!";
    }

    $product = 'LOLLIPOP';
    $cost = 1.92;

    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
   <p>Welcome Back, Ivy</p>
   <h2><?=$product?> DISCOUNTS</h2>

   <p><?= $greeting?>, <?=$name?></p>
   
      <footer>&copy; <?php echo date('Y')?></footer>
  </body>
</html>