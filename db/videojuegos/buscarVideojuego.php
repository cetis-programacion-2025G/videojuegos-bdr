<?php
function buscarVideojuego(&$datos, $id) {
    for ($i = 0; $i < count($datos['videojuegos']); $i++) {
        if ($datos['videojuegos'][$i]['id'] === $id) return $datos['videojuegos'][$i];
    }
    return null;
}
