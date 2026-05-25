<?php
// Ejecutar: php index.php

require_once 'datos.php';
require_once 'funciones.php';

$datos       = datosVideojuegos();
$videojuegos = &$datos['videojuegos'];
$ventas      = &$datos['ventas'];
$salir       = false;

while (!$salir) {
    system('clear');
    echo "\n";
    echo "╔════════════════════════════════════════╗\n";
    echo "║    TIENDA DE VIDEOJUEGOS              ║\n";
    echo "╠════════════════════════════════════════╣\n";
    echo "║ 1. Ver catálogo                       ║\n";
    echo "║ 2. Agregar videojuego                 ║\n";
    echo "║ 3. Registrar venta                    ║\n";
    echo "║ 4. Ver historial de ventas            ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚════════════════════════════════════════╝\n";

    $opcion = readline("\nOpcion: ");

    switch ($opcion) {
        case '1': verVideojuegos($videojuegos);              break;
        case '2': agregarVideojuego($videojuegos);           break;
        case '3': registrarVenta($videojuegos, $ventas);     break;
        case '4': verVentas($videojuegos, $ventas);          break;
        case '0': $salir = true;                             break;
        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

echo "\nHasta luego.\n";
