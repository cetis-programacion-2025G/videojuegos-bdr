<?php

require_once __DIR__ . "/../../funciones/conexion.php";

function obtenerVentas(&$datos)
{
    $conn = conectar();

    $sql = "
        SELECT
            v.id,
            c.nombre AS cliente,
            v.fecha,
            vg.titulo,
            vg.precio,
            dv.cantidad AS cant
        FROM ventas v
        INNER JOIN clientes c
            ON v.cliente_id = c.id
        INNER JOIN detalle_venta dv
            ON dv.venta_id = v.id
        INNER JOIN videojuegos vg
            ON dv.videojuego_id = vg.id
        ORDER BY v.id
    ";

    $resultado = $conn->query($sql);

    $ventas = [];

    while ($fila = $resultado->fetch_assoc()) {
        $ventas[] = $fila;
    }

    return $ventas;
}
