<?php
// Cyrille Moto Garage
// Romero, Cyrille Angel S.
// WD - 202

require 'engineparts.php';
require 'functions.php';
include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $storeName; ?></title>
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

        </style>
    </head>

    <body>

    <nav>
    <a href="motor_shop_cyrille.php">Home</a>
    <a href="sale.php">Sale</a>
    <a href="order.php">Order</a>
    </nav>

        <table>
            <tr>
                <th>Engine Part</th>
                <th>Specifications</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Reorder?</th>
                <th>Total Stock Value (₱)</th>
                <th>Tax Due (₱)</th>
                <th>Category</th>
                <th>Best Use</th>
            </tr>

            <?php
        
        foreach ($engineParts as $part) {
            
            $price = $part["price"];
            $stock = $part["stock"];
            $tax = $part["tax"];

            echo "<tr>";
            echo "<td>{$part['name']}</td>";
            echo "<td>{$part['specs']}</td>";
            echo "<td>₱" . number_format($price, 2) . "</td>";
            echo "<td>$stock</td>";

            echo "<td>" . reorder_message($stock) . "</td>";

            $value = total_stock_value($price, $stock);
            echo "<td>₱" . number_format($value, 2) . "</td>";

            $taxDue = total_tax_due($price, $stock, $tax);
            echo "<td>₱" . number_format($taxDue, 2) . "</td>";

            if (strpos($part['category'], "High Performance") !== false) {
                echo "<td class='highlight-warm'>{$part['category']}</td>";
            } elseif (strpos($part['category'], "Cooling") !== false) {
                echo "<td class='highlight-cool'>{$part['category']}</td>";
            } else {
                echo "<td>{$part['category']}</td>";
            }

            if (strpos($part['usage'], "Racing") !== false) {
                echo "<td class='usage-performance'>{$part['usage']}</td>";
            } else {
                echo "<td>{$part['usage']}</td>";
            }

            echo "</tr>";
        }
    ?>
</table>

</body>
</html>