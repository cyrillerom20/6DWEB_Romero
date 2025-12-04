<?php
$title = "Lollipop Treats";
$price = 30.00;
$flavor = "Blueberry";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<img src="img/logo.png" alt="Candy Logo" class="logo">

<div class="container">
    <h2><?= $title ?></h2>

    <p>Flavor: <?= $flavor ?></p>
    <p>Price: ₱<?= number_format($price, 2) ?></p>
    <p>Enjoy our <?= $flavor ?> lollipops today!</p>
</div>

</body>
</html>
