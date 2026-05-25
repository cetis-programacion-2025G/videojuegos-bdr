<?php
function titulo($texto, $ancho = 44) {
    $textoCentrado = centrar($texto, $ancho);
    echo "╔" . str_repeat("═", $ancho) . "╗\n";
    echo "║" . $textoCentrado . "║\n";
    echo "╚" . str_repeat("═", $ancho) . "╝\n";
}
