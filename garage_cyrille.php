<?php
// Engine Aroma Garage
// Romero, Cyrille Angel S.
// WD - 202

$storeName = "Cyrille Moto Garage";
$tagline = "Where Power Meets, Engineered for Cyrille";

$engineScents = [
    ["name" => "Turbo Exhaust", "notes" => "Smoky, metallic, bold", "occasion" => "Night rides, motor meets, adrenaline moments", "price" => "₱899"],
    ["name" => "Chrome Pistons", "notes" => "Clean, sharp, cold metal", "occasion" => "Daily rides, casual days, garage work", "price" => "₱799"],
    ["name" => "Engine Oil Luxe", "notes" => "Warm, deep, smooth oil scent", "occasion" => "Romantic nights, long drives, special events", "price" => "₱999"],
    ["name" => "Nitro Boost", "notes" => "Citrus burst, energetic, fast", "occasion" => "Racing, road trips, outdoor adventures", "price" => "₱749"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $storeName; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1a1a1a;
            margin: 0;
            padding: 20px;
            color: #e6e6e6;
        }
        h1 {
            text-align: center;
            font-size: 42px;
            color: #ff4500;
            font-weight: bold;
            margin-bottom: 5px;
        }
        h3 {
            text-align: center;
            color: #ffa366;
            margin-top: 0;
            font-style: italic;
            font-size: 20px;
        }
        table {
            width: 85%;
            margin: 40px auto;
            border-collapse: collapse;
            background: #262626;
            box-shadow: 0 0 15px rgba(255, 69, 0, 0.4);
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background: #ff4500;
            color: #fff;
            padding: 14px;
            font-size: 20px;
            text-transform: uppercase;
        }
        td {
            padding: 14px;
            font-size: 18px;
            border-bottom: 1px solid #333;
            color: #e6e6e6;
        }
        tr:hover {
            background: #333;
        }
        .romantic {
            color: #ff66c4;
            font-weight: bold;
        }
        .price {
            color: #00e600;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1><?php echo $storeName; ?></h1>
    <h3><?php echo $tagline; ?></h3>

    <table>
        <tr>
            <th>Engine Parts</th>
            <th>Notes</th>
            <th>Occasion</th>
            <th>Price</th>
        </tr>

        <?php
            foreach ($engineScents as $engine) {
                echo "<tr>";
                echo "<td>{$engine['name']}</td>";
                echo "<td>{$engine['notes']}</td>";

                if (strpos($engine['occasion'], 'romantic') !== false) {
                    echo "<td class='romantic'>{$engine['occasion']}</td>";
                } else {
                    echo "<td>{$engine['occasion']}</td>";
                }

                echo "<td class='price'>{$engine['price']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>