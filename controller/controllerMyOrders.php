<?php

require_once __DIR__ . "/../model/connectDB.php";
require_once __DIR__ . "/../model/checkOrders.php";

$connection = connectDB();
$orders = getUserOrders($connection, $_SESSION['id_user']);
pg_close($connection);

require __DIR__ . "/../view/printMyOrders.php";

?>