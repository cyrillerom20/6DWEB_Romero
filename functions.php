<?php
//Romero, Cyrille Angel S.
//WD - 202
declare(strict_types=1);

include "includes/header.php";
include 'includes/footer.php';
$yourproduct = [
    "Toffee"  => ["price" => 12.00, "stock" => 12],
    "Mints"  => ["price" => 2.00,  "stock" => 26],
    "Fudge"  => ["price" => 4.00,  "stock" => 8],
    "Mocha"  => ["price" => 6.00,  "stock" => 19],
    "Lemon"  => ["price" => 2.00,  "stock" => 12],
    "Strawberry" => ["price" => 3.00, "stock" => 6],
    "Caramel" => ["price" => 5.00, "stock" => 11]
];
$tax_rate = 12;
function get_reorder_message(int $stock): string {
    if ($stock < 10) {
        return "Yes";
    }
    else {
        return "No";
    }
}
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}
function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}
?>
<h2>Stock Control</h2>
<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>

    <?php foreach ($yourproduct as $product_name => $data): 
        $price = $data["price"];
        $stock = $data["stock"];
    ?>
    <tr>
        <td><?= $product_name ?></td>
        <td><?= $stock ?></td>
        <td><?= get_reorder_message($stock) ?></td>
        <td>₱<?= number_format(get_total_value($price, $stock), 2) ?></td>
        <td>₱<?= number_format(get_tax_due($price, $stock, $tax_rate), 2) ?></td>
    </tr>
    <?php endforeach; ?>

</table>