<?php
function menuVentas(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("VENTAS", 83);
        echo str_repeat("─", 85) . "\n";
        echo " 1. Ver historial de ventas\n";
        echo " 2. Registrar venta\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 85) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarVentas($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                registrarVenta($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
