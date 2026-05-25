<?php
function listarVideojuegos(&$datos) {
    $filas = obtenerVideojuegos($datos);
    $columnas = [
        ['titulo' => 'ID',     'clave' => 'id',     'ancho' => 4],
        ['titulo' => 'Titulo', 'clave' => 'titulo', 'ancho' => 24],
        ['titulo' => 'Genero', 'clave' => 'genero', 'ancho' => 10],
        ['titulo' => 'Precio', 'clave' => 'precio', 'ancho' => 7],
        ['titulo' => 'Stock',  'clave' => 'stock',  'ancho' => 6],
    ];
    echo "\n";
    titulo("LISTA DE VIDEOJUEGOS", 65);
    dibujarTabla($filas, $columnas);
}
