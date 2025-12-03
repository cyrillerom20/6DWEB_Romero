<?php

// 1. Reorder message
function reorder_message(int $stock): string {
    return ($stock < 10)
        ? "<span class='reorder-yes'>Yes</span>"
        : "<span class='reorder-no'>No</span>";
}

// 2. Total stock value
function total_stock_value(float $price, int $stock): float {
    return $price * $stock;
}

// 3. Total tax due
function total_tax_due(float $price, int $stock, int $taxPercent): float {
    $totalVal = $price * $stock;
    return $totalVal * ($taxPercent / 100);
}

?>
