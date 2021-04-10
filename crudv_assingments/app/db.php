<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'crud';

function connect() {

    global $host, $user, $password, $database;

    return $connection = new mysqli($host, $user, $password, $database);
}

?>