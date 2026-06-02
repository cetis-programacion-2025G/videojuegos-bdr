<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function buscarVideojuego(&$datos, $id)
{
    $conn = conectar();

    $sql = "SELECT * FROM videojuegos WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $resultado = $stmt->get_result();

    return $resultado->fetch_assoc();
}