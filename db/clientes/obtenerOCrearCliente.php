<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function obtenerOCrearCliente($nombre)
{
    $conn = conectar();

    $sql = "SELECT id FROM clientes WHERE nombre = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($fila = $resultado->fetch_assoc()) {
        return $fila['id'];
    }

    $sql = "INSERT INTO clientes (nombre) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre);
    $stmt->execute();

    return $conn->insert_id;
}