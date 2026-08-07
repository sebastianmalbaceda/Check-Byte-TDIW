<?php

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_id = $_POST['product_id'] ?? null;
$product_name = $_POST['product_name'] ?? null;
$product_image = $_POST['product_image'] ?? null;
$product_price = $_POST['product_price'] ?? null;
$product_quantity = $_POST['product_quantity'] ?? null;

if ($product_id && $product_name && $product_price && $product_quantity && $product_image) {
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += (int) $product_quantity;
        $_SESSION['cart'][$product_id]['subtotal'] = (float) $_SESSION['cart'][$product_id]['price'] * $_SESSION['cart'][$product_id]['quantity'];
    } else {
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'image' => $product_image,
            'price' => $product_price,
            'quantity' => (int) $product_quantity,
            'subtotal' => (float) $product_price * (int) $product_quantity,
        ];
    }
    $_SESSION['cart_total'] = array_sum(array_column($_SESSION['cart'], 'subtotal'));
    $_SESSION['cart_total_products'] = array_sum(array_column($_SESSION['cart'], 'quantity'));
    
    echo json_encode([
        'status' => 'success',
        'cart_total' => $_SESSION['cart_total'],
        'cart_total_products' => $_SESSION['cart_total_products']
    ]);
} else {
    echo json_encode(['status' => 'error']);
}

?>