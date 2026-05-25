<?php
function menuVentas(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        listarVentas($datos);
        echo str_repeat("─", 85) . "\n";
        echo " 1. Registrar venta\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 85) . "\n";

        $op = pedirEntero("Opcion", [0, 1]);
        switch ($op) {
            case 1:
                registrarVenta($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
