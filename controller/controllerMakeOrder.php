<?php

$userId = $_SESSION['id_user'] ?? null;

if (!$userId) {
    header("Location: index.php?action=resource-login");
    exit;
}

require_once __DIR__ . "/../model/connectDB.php";
require_once __DIR__ . "/../model/createOrder.php";

$connection = connectDB();
$orderId = registerOrder($connection, $userId, $_SESSION['cart'], $_SESSION['cart_total'], $_SESSION['cart_total_products']);

unset($_SESSION['cart']);
unset($_SESSION['cart_total']);
unset($_SESSION['cart_total_products']);

header("Location: index.php?action=resource-order-detail&confirmed=true&order_id=" . $orderId);
exit;

?>