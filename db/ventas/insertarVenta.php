<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function insertarVenta(&$datos, $cliente_id, $items)
{
    $conn = conectar();


    $sql = "INSERT INTO ventas (cliente_id, fecha)
            VALUES (?, CURDATE())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cliente_id);
    $stmt->execute();

    $venta_id = $conn->insert_id;

    
    foreach ($items as $item) {

        $videojuego_id = $item['id_videojuego'];
        $cantidad = $item['cantidad'];

        
        $sqlDetalle = "
            INSERT INTO detalle_venta
            (venta_id, videojuego_id, cantidad)
            VALUES (?, ?, ?)
        ";

        $stmtDetalle = $conn->prepare($sqlDetalle);

        $stmtDetalle->bind_param(
            "iii",
            $venta_id,
            $videojuego_id,
            $cantidad
        );

        $stmtDetalle->execute();

        
        $sqlStock = "
            UPDATE videojuegos
            SET stock = stock - ?
            WHERE id = ?
        ";

        $stmtStock = $conn->prepare($sqlStock);

        $stmtStock->bind_param(
            "ii",
            $cantidad,
            $videojuego_id
        );

        $stmtStock->execute();
    }

    return $venta_id;
}