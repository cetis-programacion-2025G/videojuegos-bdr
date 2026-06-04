<?php
function menuVideojuegos(&$datos) {
    $salir = false;

    while (!$salir) {
        limpiarPantalla();
        listarVideojuegos($datos);

        echo str_repeat("─", 67) . "\n";
        echo " 1. Agregar videojuego\n";
        echo " 2. Editar videojuego\n";
        echo " 3. Eliminar videojuego\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 67) . "\n";

        $op = pedirEntero("Opcion", [0,1,2,3]);

        switch ($op) {
            case 1:
                agregarVideojuego($datos);
                break;

            case 2:
                editarVideojuego($datos);
                break;

            case 3:
                eliminarVideojuego($datos);
                break;

            case 0:
                $salir = true;
                break;
        }
    }
}