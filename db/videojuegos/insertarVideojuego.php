<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function insertarVideojuego(&$datos, $titulo, $genero, $precio, $stock)
{
    $conn = conectar();

    $sql = "INSERT INTO videojuegos (titulo, genero, precio, stock)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssdi",
        $titulo,
        $genero,
        $precio,
        $stock
    );

    $stmt->execute();

    return $conn->insert_id;
}