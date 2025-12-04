<?php
$nutrition = [
    "fat"   => "12%",
    "sugar" => "45%",
    "salt"  => "4%"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Chocolate Bar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<img src="img/logo.png" alt="Candy Logo" class="logo">

<div class="container">
    <h2>The Chocolate Bar</h2>

    <p><strong>Nutrition (per 100g):</strong></p>
    <ul>
        <li>Fat: <?= $nutrition["fat"] ?></li>
        <li>Sugar: <?= $nutrition["sugar"] ?></li>
        <li>Salt: <?= $nutrition["salt"] ?></li>
    </ul>
</div>

</body>
</html>
