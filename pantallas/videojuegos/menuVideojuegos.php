<?php
function menuVideojuegos(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        listarVideojuegos($datos);
        echo str_repeat("─", 67) . "\n";
        echo " 1. Agregar videojuego\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 67) . "\n";

        $op = pedirEntero("Opcion", [0, 1]);
        switch ($op) {
            case 1:
                agregarVideojuego($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
