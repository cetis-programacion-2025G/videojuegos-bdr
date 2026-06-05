<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function eliminarVideojuegoDB($id)
{
    $conn = conectar();

    try {
        $sql = "DELETE FROM videojuegos WHERE id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    } catch (mysqli_sql_exception $e) {
        return false;
    }
}