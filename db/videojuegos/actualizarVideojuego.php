<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function actualizarVideojuego(
    $id,
    $titulo,
    $genero,
    $precio,
    $stock
) {
    $conn = conectar();

    $sql = "
        UPDATE videojuegos
        SET titulo = ?,
            genero = ?,
            precio = ?,
            stock = ?
        WHERE id = ?
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssdii",
        $titulo,
        $genero,
        $precio,
        $stock,
        $id
    );

    $stmt->execute();
}