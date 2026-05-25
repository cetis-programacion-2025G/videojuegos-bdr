<?php
function insertarVenta(&$datos, $cliente, $items) {
    $nuevo = [
        'id'      => count($datos['ventas']) + 1,
        'cliente' => $cliente,
        'fecha'   => date('Y-m-d'),
        'items'   => $items,
    ];
    $datos['ventas'][] = $nuevo;
    for ($j = 0; $j < count($items); $j++) {
        $id_videojuego = $items[$j]['id_videojuego'];
        $cantidad      = $items[$j]['cantidad'];
        for ($i = 0; $i < count($datos['videojuegos']); $i++) {
            if ($datos['videojuegos'][$i]['id'] === $id_videojuego) {
                $datos['videojuegos'][$i]['stock'] -= $cantidad;
                if ($datos['videojuegos'][$i]['stock'] < 0) {
                    $datos['videojuegos'][$i]['stock'] = 0;
                }
                break;
            }
        }
    }
    return $nuevo['id'];
}
