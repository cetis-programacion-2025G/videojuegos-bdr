<?php

function eliminarVideojuego(&$datos)
{
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR VIDEOJUEGO");

    listarVideojuegos($datos);

    echo  "\n0. Cancelar\n";

    $id = (int) readline("ID del videojuego: ");

    if ($id === 0) {
        return;
    }

    if (eliminarVideojuegoDB($id)) {
        echo "\nVideojuego eliminado.\n";
    } else {
        echo "\nNo se puede eliminar porque tiene ventas registradas.\n";
    }

    esperarEnter();
}