<?php
// TODO (MySQL):
// INSERT INTO videojuegos (titulo, genero, precio, stock) VALUES (?, ?, ?, ?)
function insertarVideojuego(&$datos, $titulo, $genero, $precio, $stock) {
    $nuevo = [
        'id'     => count($datos['videojuegos']) + 1,
        'titulo' => $titulo,
        'genero' => $genero,
        'precio' => $precio,
        'stock'  => $stock,
    ];
    $datos['videojuegos'][] = $nuevo;
    return $nuevo['id'];
}
