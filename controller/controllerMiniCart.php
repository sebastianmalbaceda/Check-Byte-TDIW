<?php

$cart_total = isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : 0.00;
$cart_total_products = isset($_SESSION['cart_total_products']) ? $_SESSION['cart_total_products'] : 0;

require __DIR__ . "/../view/printMiniCart.php";

?>