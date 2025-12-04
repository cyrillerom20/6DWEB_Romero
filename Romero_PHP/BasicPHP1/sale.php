<?php
// Load engine parts + header
require 'engineparts.php';
require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sale – Cyrille Motor Shop</title>

    <style>
body {
    background: linear-gradient(to right, #0f0f0f, #1c1c1c);
    font-family: 'Montserrat', sans-serif;
    color: #e0e0e0;
    text-align: center;
    margin: 0;
    padding: 0;
}

h1 {
    font-size: 3em;
    color: #ff4500;
    letter-spacing: 2px;
    margin-top: 30px;
}

nav {
    margin-top: 15px;
}

nav a {
    color: #ff4500;
    text-decoration: none;
    font-weight: bold;
    margin: 0 15px;
    font-size: 1.2em;
}

nav a:hover {
    color: #ffaa66;
}

p {
    font-family: 'Georgia', serif;
    font-size: 1.2em;
    color: #b0b0b0;
    margin-bottom: 20px;
}

table {
    margin: auto;
    border-collapse: collapse;
    width: 80%;
    background-color: #121212;
    box-shadow: 0 0 15px rgba(0,0,0,0.6);
}

th, td {
    border: 1px solid #444;
    padding: 15px;
    font-size: 1.1em;
    text-align: center;
}

th {
    background-color: #ff4500;
    color: #fff;
    text-transform: uppercase;
}

td { color: #e0e0e0; }

tr:hover {
    background-color: #1f1f1f;
    transition: 0.3s;
}

.highlight-warm { color: #ffb74d; }
.highlight-cool { color: #64b5f6; }
.usage-performance { color: #00e600; font-weight: bold; }
.reorder-yes { color: #ff3333; font-weight: bold; }
.reorder-no { color: #00ff99; }

a.back-btn {
    display: inline-block;
    margin-top: 30px;
    padding: 12px 25px;
    background-color: #ff4500;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: 0.3s;
}
.price {
            color: #ffb74d;
            font-weight: bold;
        }
        .low-stock {
            color: #ff3333;
            font-weight: bold;
        }

        .good-stock {
            color: #00ff99;
            font-weight: bold;
        }

a.back-btn:hover {
    background-color: #ffaa66;
}
</style>

</head>

<body>

<nav>
    <a href="motor_shop_cyrille.php">Home</a>
    <a href="sale.php">Sale</a>
    <a href="order.php">Order</a>
</nav>

<h1>Sale Page</h1>
<p>Here are the motor parts currently available for sale:</p>

<table>
    <tr>
        <th>Engine Part</th>
        <th>Price (₱)</th>
        <th>Stock</th>
    </tr>

    <?php foreach ($engineParts as $item): ?>
        <tr>
            <td><?php echo $item['name']; ?></td>

            <td class="price">₱<?php echo number_format($item['price'], 2); ?></td>

            <td class="<?php echo ($item['stock'] < 10) ? 'low-stock' : 'good-stock'; ?>">
                <?php echo $item['stock']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a class="back-btn" href="motor_shop_cyrille.php">Back to Home</a>

</body>
</html>
