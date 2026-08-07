<?php

function registerOrder($connection, $userId, $cart, $totalPrice, $totalProducts) {
    $sql_order = 'INSERT INTO "order" (id_user, total_price, total_products, order_datetime) VALUES ($1, $2, $3, NOW()) RETURNING id_order';
    $query_order = pg_query_params($connection, $sql_order, [$userId, $totalPrice, $totalProducts]) or die("Error al insertar el pedido.");;
    $order = pg_fetch_assoc($query_order);
    $orderId = $order['id_order'];

    foreach ($cart as $productId => $product) {
        $sql_detail = 'INSERT INTO order_lines (id_order, id_product, product_name, product_price, product_quantity) VALUES ($1, $2, $3, $4, $5)';
        $params = [$orderId, $productId, $product['name'], $product['price'], $product['quantity']];
        $query_detail = pg_query_params($connection, $sql_detail, $params);
    }

    return $orderId;
}

?>