<?php

function registerUser($name, $email, $password, $direction, $poblation, $postalCode, $connection) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO "user" (name, email, password, address, city, postal_code) VALUES ($1, $2, $3, $4, $5, $6)';
    $params = array($name, $email, $password, $direction, $poblation, $postalCode);
    $result = pg_query_params($connection, $sql, $params);
    return $result;
}

?>