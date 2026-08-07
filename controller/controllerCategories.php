<?php

require_once __DIR__ . "/../model/connectDB.php";
require_once __DIR__ . "/../model/checkCategories.php";

$connection = connectDB();
$results_categories = getCategories($connection);

require __DIR__ . "/../view/printCategories.php";
pg_close($connection);

?>