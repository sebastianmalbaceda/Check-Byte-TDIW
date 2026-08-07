<?php

$product_id = $_GET['product'];
unset($_SESSION['cart'][$product_id]);
$_SESSION['cart_total'] = array_sum(array_column($_SESSION['cart'], 'subtotal'));
$_SESSION['cart_total_products'] = array_sum(array_column($_SESSION['cart'], 'quantity'));

?>