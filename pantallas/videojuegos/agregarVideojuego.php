<?php
function agregarVideojuego(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR VIDEOJUEGO");
    $titulo = readline("Titulo  : ");
    $genero = readline("Genero  : ");
    $precio = (int)readline("Precio  : $");
    $stock  = (int)readline("Stock   : ");
    $id = insertarVideojuego($datos, $titulo, $genero, $precio, $stock);
    echo "\n  Videojuego agregado con ID $id.\n";
    esperarEnter();
}
