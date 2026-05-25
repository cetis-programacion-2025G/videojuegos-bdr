<?php
function centrar($texto, $ancho) {
    $largo = mb_strlen($texto, 'UTF-8');
    $espacios = $ancho - $largo;
    if ($espacios <= 0) return $texto;
    $izq = floor($espacios / 2);
    $der = $espacios - $izq;
    return str_repeat(" ", $izq) . $texto . str_repeat(" ", $der);
}
