<?php

$product = $_GET['product'] ?? NULL;

require_once __DIR__ . "/../model/connectDB.php";
require_once __DIR__ . "/../model/checkProductDetail.php";

$connection = connectDB();
$result_product = getProductDetail($connection, $product);

require __DIR__ . "/../view/printProductDetail.php";
pg_close($connection);

?>