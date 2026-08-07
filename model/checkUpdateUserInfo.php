<?php

function updateUser($connection, $userId, $email, $password, $name, $address, $city, $postalCode, $profilePicturePath) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'UPDATE "user" SET email = $1, password = COALESCE($2, password), name = $3, address = $4, city = $5, postal_code = $6, profile_picture = COALESCE($7, profile_picture) WHERE id_user = $8';
    $params = [$email, $password, $name, $address, $city, $postalCode, $profilePicturePath, $userId];
    $result = pg_query_params($connection, $sql, $params);
    return $result;
}

?>
