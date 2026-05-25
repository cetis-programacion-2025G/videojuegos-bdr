<?php
function registrarVenta(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("REGISTRAR VENTA", 65);
    listarVideojuegos($datos);
    $conStock = array_values(array_filter($datos['videojuegos'], fn($v) => $v['stock'] > 0));
    if (empty($conStock)) {
        echo "\n  No hay videojuegos con stock disponible.\n";
        esperarEnter();
        return;
    }
    $ids = array_column($conStock, 'id');
    echo "  (0 para cancelar)\n";
    $id_videojuego = pedirEntero("ID del videojuego", array_merge($ids, [0]));
    if ($id_videojuego === 0) return;
    $cliente = readline("Nombre del cliente : ");
    $id = insertarVenta($datos, $id_videojuego, $cliente);
    echo "\n  Venta registrada con ID $id.\n";
    esperarEnter();
}
