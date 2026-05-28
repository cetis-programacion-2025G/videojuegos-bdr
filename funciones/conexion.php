<?php
require_once "config.php";

function conectar() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("❌ Error de conexión: " . $conn->connect_error . "\n");
    }

    $conn->set_charset("utf8mb4");

    return $conn;
}
?>