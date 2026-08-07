<?php

function getCategories($connection) {
  $sql_categories = "SELECT name, image, id_category FROM category";
  $query_categories = pg_query($connection, $sql_categories) or die("Error al ejecutar la consulta de categorias");
  $result_categories = pg_fetch_all($query_categories);
  return $result_categories;
}

?>