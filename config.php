<?php

$conexion = new PDO(
    "mysql:host=localhost;dbname=tienda_videojuegos",
    "root",
    ""
);

$conexion->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);

echo "Conexión exitosa";