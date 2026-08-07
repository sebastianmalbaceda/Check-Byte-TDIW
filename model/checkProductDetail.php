<?php

function getProductDetail($connection, $product) {
  $sql_product = "SELECT name, image, price, description FROM product WHERE id_product =" . $product;
  $query_product = pg_query($connection, $sql_product) or die("Error al ejecutar la consulta de detalle de producto");
  $result_product = pg_fetch_assoc($query_product);
  return $result_product;
}

?>