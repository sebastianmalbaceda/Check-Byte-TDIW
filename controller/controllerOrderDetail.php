<?php

$orderID = $_GET['order_id'] ?? null;
$confirmed = $_GET['confirmed'] ?? null;

require_once __DIR__ . "/../model/connectDB.php";
require_once __DIR__ . "/../model/checkOrderDetail.php";

$connection = connectDB();
$orderDetails = getOrderDetail($connection, $orderID);

require __DIR__ . "/../view/printOrderDetail.php";
pg_close($connection);

?>