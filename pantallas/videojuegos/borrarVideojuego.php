<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function borrarVideojuego(&$datos, $id)
{
    $conn = conectar();

    $sql = "DELETE FROM videojuegos WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    $stmt->execute();
}