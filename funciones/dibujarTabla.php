<?php
// dibujarTabla($filas, $columnas)
//
// $filas    — array de arrays asociativos con los datos
// $columnas — array que describe cada columna:
//             [
//               ['titulo' => 'ID',     'clave' => 'id',     'ancho' => 4],
//               ['titulo' => 'Nombre', 'clave' => 'nombre', 'ancho' => 30],
//             ]

function dibujarTabla($filas, $columnas)
{
    $separador = '';
    for ($i = 0; $i < count($columnas); $i++) {
        $separador .= '+' . str_repeat('-', $columnas[$i]['ancho'] + 2);
    }
    $separador .= '+';

    echo $separador . "\n";

    $lineaHeader = '';
    for ($i = 0; $i < count($columnas); $i++) {
        $texto = mb_substr($columnas[$i]['titulo'], 0, $columnas[$i]['ancho'], 'UTF-8');
        $lineaHeader .= '| ' . mb_str_pad($texto, $columnas[$i]['ancho'], ' ', STR_PAD_RIGHT) . ' ';
    }
    $lineaHeader .= '|';
    echo $lineaHeader . "\n";

    echo $separador . "\n";

    if (empty($filas)) {
        $anchoTotal = mb_strlen($separador, 'UTF-8') - 2;
        echo '| ' . centrar('(sin registros)', $anchoTotal) . ' |' . "\n";
    } else {
        for ($i = 0; $i < count($filas); $i++) {
            $fila = $filas[$i];
            $lineaFila = '';
            for ($j = 0; $j < count($columnas); $j++) {
                $col = $columnas[$j];
                $valor = isset($fila[$col['clave']]) ? (string)$fila[$col['clave']] : '';
                $valor = mb_substr($valor, 0, $col['ancho'], 'UTF-8');
                $lineaFila .= '| ' . mb_str_pad($valor, $col['ancho'], ' ', STR_PAD_RIGHT) . ' ';
            }
            $lineaFila .= '|';
            echo $lineaFila . "\n";
        }
    }

    echo $separador . "\n";
}
