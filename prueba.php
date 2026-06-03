<?php

require_once "config.php";

$conn = new mysqli(
    DB_HOST,
    DB_USER,
    DB_PASSWORD,
    DB_NAME
);

if ($conn->connect_error) {
    die("ERROR: " . $conn->connect_error);
}

echo "CONEXION OK";