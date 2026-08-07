<?php

$category = $_GET['category'] ?? NULL;

require_once __DIR__ . "/../model/connectDB.php";
require_once __DIR__ . "/../model/checkProducts.php";

$connection = connectDB();
$result_products = getProducts($connection, $category);

require __DIR__ . "/../view/printProducts.php";
pg_close($connection);

?>