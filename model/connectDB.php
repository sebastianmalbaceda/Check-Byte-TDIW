<?php

function connectDB(){
    $server = "localhost";
    $port = "5432";
    $DBname = "tdiw-m1";
    $user = "tdiw-m1";
    $password = "qQDDBHmc";
    $connection = pg_connect("host=$server port=$port dbname=$DBname user=$user password=$password") or die("Error de conección a la base de datos");
    return($connection);
}

?>