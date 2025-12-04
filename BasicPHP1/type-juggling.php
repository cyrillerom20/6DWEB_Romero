<?php
    $item = 'Chocolate';
    $stock = '9' + 3;
    $wanted = 14 + true;
    $deliver = true;
    $can_buy = (($wanted <= $stock) && ($deliver == true));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Using Logical Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Shopping Cart</h2>
        <p>Items: <?= $item ?></p>
        <p>Stock: <?= $stock ?></p>
        <p>Ordered: <?= $wanted ?></p>
        <p>Available: <?= $can_buy ? 'Yes' : 'No' ?></p>
    </body>
</html>