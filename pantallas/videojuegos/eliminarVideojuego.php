<?php

function eliminarVideojuego(&$datos)
{
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR VIDEOJUEGO");

    $id = (int) readline("ID del videojuego: ");

    if (eliminarVideojuegoDB($id)) {
        echo "\nVideojuego eliminado.\n";
    } else {
        echo "\nNo se puede eliminar porque tiene ventas registradas.\n";
    }

    esperarEnter();
}