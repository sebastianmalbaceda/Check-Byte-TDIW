<?php

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $isCartEmpty = true;
} else {
    $isCartEmpty = false;
}

require __DIR__ . "/../view/printCart.php";

?>