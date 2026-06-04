<?php

function editarVideojuego(&$datos)
{
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR VIDEOJUEGO");

    $id = (int) readline("ID del videojuego: ");
    $titulo = readline("Nuevo titulo: ");
    $genero = readline("Nuevo genero: ");
    $precio = (float) readline("Nuevo precio: ");
    $stock = (int) readline("Nuevo stock: ");

    actualizarVideojuego(
        $datos,
        $id,
        $titulo,
        $genero,
        $precio,
        $stock
    );

    echo "\nVideojuego actualizado.\n";
    esperarEnter();
}