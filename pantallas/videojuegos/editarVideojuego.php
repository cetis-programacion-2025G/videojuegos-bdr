<?php

function editarVideojuego(&$datos)
{
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR VIDEOJUEGO");

    // Mostrar lista
    listarVideojuegos($datos);

    echo "\n0. Cancelar\n";

    $id = (int) readline("ID del videojuego: ");

    if ($id === 0) {
        return;
    }

    $titulo = readline("Nuevo titulo: ");
    $genero = readline("Nuevo genero: ");
    $precio = (float) readline("Nuevo precio: ");
    $stock  = (int) readline("Nuevo stock: ");

    actualizarVideojuego($id, $titulo, $genero, $precio, $stock);
    
    echo "\nVideojuego actualizado.\n";
    esperarEnter();
}