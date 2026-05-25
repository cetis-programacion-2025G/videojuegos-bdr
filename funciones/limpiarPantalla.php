<?php
function limpiarPantalla() {
    $comando = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? 'cls' : 'clear';
    if (@system($comando) === false) echo str_repeat("\n", 40);
    echo "\033[2J\033[;H";
}
