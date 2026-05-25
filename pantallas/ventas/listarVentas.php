<?php
function listarVentas(&$datos) {
    $filas = obtenerVentas($datos);
    $columnas = [
        ['titulo' => 'ID',      'clave' => 'id',      'ancho' => 4],
        ['titulo' => 'Cliente', 'clave' => 'cliente', 'ancho' => 22],
        ['titulo' => 'Juego',   'clave' => 'titulo',  'ancho' => 24],
        ['titulo' => 'Cant.',   'clave' => 'cant',    'ancho' => 5],
        ['titulo' => 'Precio',  'clave' => 'precio',  'ancho' => 7],
        ['titulo' => 'Fecha',   'clave' => 'fecha',   'ancho' => 12],
    ];
    echo "\n";
    titulo("LISTA DE VENTAS", 91);
    dibujarTabla($filas, $columnas);
}
