<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

$filesAbsolutePath = '/home/TDIW/tdiw-m1/public_html/uploadedFiles/';
$filesPublicPath = '/uploadedFiles/';

$accio = $_GET['action'] ?? NULL;

switch ($accio) {
    case 'products':
        require __DIR__ . '/controller/controllerProducts.php';
        break;
    case 'product-detail':
        require __DIR__ . '/controller/controllerProductDetail.php';
        break;
    case 'logout':
        require __DIR__ . '/controller/controllerLogout.php';
        break;
    case 'add-to-cart':
        require __DIR__ . '/controller/controllerAddToCart.php';
        break;
    case 'empty-cart':
        require __DIR__ . '/controller/controllerEmptyCart.php';
        break;
    case 'modify-product-cart':
        require __DIR__ . '/controller/controllerModifyProductCart.php';
        break;
    case 'delete-product-cart':
        require __DIR__ . '/controller/controllerDeleteProductCart.php';
        break;
    case 'make-order':
        require __DIR__ . '/controller/controllerMakeOrder.php';
        break;
    case 'update-user-info':
        require __DIR__ . '/controller/controllerUpdateUserInfo.php';
        break;
    case 'resource-register':
        require __DIR__ . '/resource_register.php';
        break;
    case 'resource-login':
        require __DIR__ . '/resource_login.php';
        break;
    case 'resource-catalog':
        require __DIR__ . '/resource_catalog.php';
        break;
    case 'resource-myAccount':
        require __DIR__ . '/resource_myAccount.php';
        break;
    case 'resource-myOrders':
        require __DIR__ . '/resource_myOrders.php';
        break;
    case 'resource-cart':
        require __DIR__ . '/resource_cart.php';
        break;
    case 'resource-order-detail':
        require __DIR__ . '/resource_orderDetail.php';
        break;
    default: 
        require __DIR__ . '/resource_home.php';
        break;
}

?>