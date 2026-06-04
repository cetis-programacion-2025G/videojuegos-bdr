<?php

function eliminarVideojuego(&$datos)
{
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR VIDEOJUEGO");

    $id = (int) readline("ID del videojuego: ");

    borrarVideojuego($datos, $id);

    echo "\nVideojuego eliminado.\n";
    esperarEnter();
}