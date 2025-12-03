<?php
// Cyrille Moto Garage — Stock Monitor
// Romero, Cyrille Angel S.
// WD - 202

require 'engineparts.php';
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
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            padding: 25px;
            color: #fff;
            background: #111;
            border-bottom: 2px solid #ff4500;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 5px;
            color: #ff4500;
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

        table {
            width: 90%;
            margin: 40px auto;
            border-collapse: collapse;
            background: #121212;
            box-shadow: 0 0 18px rgba(0,0,0,0.6);
        }

        th, td {
            border: 1px solid #444;
            padding: 15px;
            font-size: 1.1em;
        }

        th {
            background-color: #ff4500;
            color: white;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #1f1f1f;
            transition: 0.3s;
        }

        .highlight-warm { color: #ffb74d; font-weight: bold; }
        .highlight-cool { color: #64b5f6; font-weight: bold; }
        .usage-performance { color: #00ff66; font-weight: bold; }
        .reorder-yes { color: #ff3333; font-weight: bold; }
        .reorder-no { color: #00ff99; }
    </style>
</head>

<body>

<nav>
    <a href="index.php">Home</a>
    <a href="sale.php">Sale</a>
    <a href="about.php">Order</a>
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
        // 1. Reorder point function
        function reorder_message($stock) {
            return ($stock < 10)
                ? "<span class='reorder-yes'>Yes</span>"
                : "<span class='reorder-no'>No</span>";
        }

        // 2. Total value of remaining stock
        function total_stock_value($price, $stock) {
            return $price * $stock;
        }

        // 3. Total tax due for all remaining stock
        function total_tax_due($price, $stock, $taxPercent) {
            $totalVal = $price * $stock;
            return $totalVal * ($taxPercent / 100);
        }

        // DISPLAY ENGINE PARTS
        foreach ($engineParts as $part) {

            $partName = $part["name"];
            $specs = $part["specs"];
            $price = $part["price"];
            $stock = $part["stock"];
            $category = $part["category"];
            $usage = $part["usage"];
            $tax = $part["tax"];

            echo "<tr>";

            echo "<td>$partName</td>";
            echo "<td>$specs</td>";
            echo "<td>₱" . number_format($price, 2) . "</td>";
            echo "<td>$stock</td>";

            echo "<td>" . reorder_message($stock) . "</td>";

            // total stock value
            $value = total_stock_value($price, $stock);
            echo "<td>₱" . number_format($value, 2) . "</td>";

            // tax due
            $taxDue = total_tax_due($price, $stock, $tax);
            echo "<td>₱" . number_format($taxDue, 2) . "</td>";

            // category colors
            if (strpos($category, "High Performance") !== false) {
                echo "<td class='highlight-warm'>$category</td>";
            } elseif (strpos($category, "Cooling") !== false) {
                echo "<td class='highlight-cool'>$category</td>";
            } else {
                echo "<td>$category</td>";
            }

            if (strpos($usage, "Racing") !== false) {
                echo "<td class='usage-performance'>$usage</td>";
            } else {
                echo "<td>$usage</td>";
            }

            echo "</tr>";
        }
    ?>
</table>

</body>
</html>


