<?php
// TODO (MySQL):
// SELECT * FROM videojuegos ORDER BY titulo
function obtenerVideojuegos(&$datos) {
    $conn = conectar();
    $sql ="SELECT * FROM videojuegos";
    
    $resultado = $conn->query($sql);
    $videojuegos = [];
    while ($fila = $resultado->fetch_assoc()) {
        $videojuegos[] = $fila;
    }
    return $datos['videojuegos'];
}
