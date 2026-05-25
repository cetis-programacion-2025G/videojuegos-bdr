<?php
function obtenerVentas(&$datos) {
    $resultado = [];
    for ($i = 0; $i < count($datos['ventas']); $i++) {
        $v = $datos['ventas'][$i];
        for ($j = 0; $j < count($v['items']); $j++) {
            $item  = $v['items'][$j];
            $juego = null;
            for ($k = 0; $k < count($datos['videojuegos']); $k++) {
                if ($datos['videojuegos'][$k]['id'] === $item['id_videojuego']) {
                    $juego = $datos['videojuegos'][$k];
                    break;
                }
            }
            if ($juego) {
                $titulo = $juego['titulo'];
                $precio = $juego['precio'];
            } else {
                $titulo = '(desconocido)';
                $precio = 0;
            }
            $resultado[] = [
                'id'      => $v['id'],
                'cliente' => $v['cliente'],
                'fecha'   => $v['fecha'],
                'titulo'  => $titulo,
                'precio'  => $precio,
                'cant'    => $item['cantidad'],
            ];
        }
    }
    return $resultado;
}
