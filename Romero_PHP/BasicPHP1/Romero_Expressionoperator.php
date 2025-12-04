<?php
$price = 100;
$discount = 0.3;
$total = $price - ($price * $discount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discount Calculator</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<img src="img/logo.png" alt="Candy Logo" class="logo">

<div class="container">
    <h2>Discount Calculator</h2>
    <p>Original Price: ₱<?= $price ?></p>
    <p>Discount: <?= $discount * 100 ?>%</p>
    <p><strong>Final Price: ₱<?= $total ?></strong></p>
</div>

</body>
</html>
