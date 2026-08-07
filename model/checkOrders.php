<?php

function getUserOrders($connection, $user) {
    $sql = '
        SELECT 
            o.id_order,
            o.order_datetime::timestamp(0) AS order_datetime,
            o.total_price
        FROM "order" o
        WHERE o.id_user = $1
        ORDER BY o.order_datetime DESC;
    ';

    $query = pg_query_params($connection, $sql, [$user]) or die("Error al obtener los pedidos del usuario.");
    $orders = pg_fetch_all($query);
    return $orders;
}

?>
