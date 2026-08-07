<?php

function getOrderDetail($connection, $orderId) {
    $sql = '
        SELECT 
            o.id_order,
            o.order_datetime::timestamp(0) AS order_datetime,
            o.total_price,
            o.total_products,
            ol.product_name,
            p.image AS product_image,
            ol.product_price,
            ol.product_quantity,
            (ol.product_price * ol.product_quantity) AS product_subtotal
        FROM "order" o
        JOIN order_lines ol ON o.id_order = ol.id_order
        JOIN product p ON ol.id_product = p.id_product
        WHERE o.id_order = $1;
    ';

    $query = pg_query_params($connection, $sql, [$orderId]) or die("Error al obtener los detalles del pedido.");

    $orderDetails = null;
    while ($row = pg_fetch_assoc($query)) {
        if ($orderDetails === null) {
            $orderDetails = [
                'id_order' => $row['id_order'],
                'order_datetime' => $row['order_datetime'],
                'total_price' => $row['total_price'],
                'total_products' => $row['total_products'],
                'products' => []
            ];
        }
        $orderDetails['products'][] = [
            'product_name' => $row['product_name'],
            'product_image' => $row['product_image'],
            'product_price' => $row['product_price'],
            'product_quantity' => $row['product_quantity'],
            'product_subtotal' => $row['product_subtotal']
        ];
    }

    return $orderDetails;
}

?>
