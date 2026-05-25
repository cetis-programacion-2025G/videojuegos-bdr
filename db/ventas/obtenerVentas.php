<?php
function obtenerVentas(&$datos) {
    $resultado = [];
    for ($i = 0; $i < count($datos['ventas']); $i++) {
        $v = $datos['ventas'][$i];
        $juego = null;
        for ($j = 0; $j < count($datos['videojuegos']); $j++) {
            if ($datos['videojuegos'][$j]['id'] === $v['id_videojuego']) { $juego = $datos['videojuegos'][$j]; break; }
        }
        $resultado[] = [
            'id'      => $v['id'],
            'cliente' => $v['cliente'],
            'fecha'   => $v['fecha'],
            'titulo'  => $juego ? $juego['titulo'] : '(desconocido)',
            'precio'  => $juego ? $juego['precio'] : 0,
        ];
    }
    return $resultado;
}
