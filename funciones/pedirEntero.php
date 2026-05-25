<?php
function pedirEntero($mensaje, $validos) {
    while (true) {
        echo $mensaje . ": ";
        $valor = (int)readline();
        if (in_array($valor, $validos)) return $valor;
        echo "Valor invalido (" . implode(", ", $validos) . "), intenta de nuevo.\n";
    }
    return 0;
}
