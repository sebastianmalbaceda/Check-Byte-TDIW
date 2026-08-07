<?php

$product_id = $_GET['product'];
$new_quantity = $_GET['quantity'];
$_SESSION['cart'][$product_id]['quantity'] = (int) $new_quantity;
$_SESSION['cart'][$product_id]['subtotal'] = (float) $_SESSION['cart'][$product_id]['price'] * (int) $_SESSION['cart'][$product_id]['quantity'];
$_SESSION['cart_total'] = array_sum(array_column($_SESSION['cart'], 'subtotal'));
$_SESSION['cart_total_products'] = array_sum(array_column($_SESSION['cart'], 'quantity'));

?>