<?php

function getProducts($connection, $category) {
  $sql_products = "SELECT name, image, price, id_product FROM product WHERE id_category =" . $category;
  $query_products = pg_query($connection, $sql_products) or die("Error al ejecutar la consulta de productos");
  $result_products = pg_fetch_all($query_products);
  return $result_products;
}

?>