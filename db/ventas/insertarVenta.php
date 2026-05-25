<?php
function insertarVenta(&$datos, $id_videojuego, $cliente) {
    $nuevo = [
        'id'            => count($datos['ventas']) + 1,
        'id_videojuego' => $id_videojuego,
        'cliente'       => $cliente,
        'fecha'         => date('Y-m-d'),
    ];
    $datos['ventas'][] = $nuevo;
    for ($i = 0; $i < count($datos['videojuegos']); $i++) {
        if ($datos['videojuegos'][$i]['id'] === $id_videojuego) { $datos['videojuegos'][$i]['stock']--; break; }
    }
    return $nuevo['id'];
}
