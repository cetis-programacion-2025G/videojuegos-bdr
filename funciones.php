<?php
// ============================================================
//  funciones.php — Carga todos los modulos del sistema
//  Cada carpeta = un tema, cada archivo = una funcion
// ============================================================

// --- Utilidades ---
require_once 'funciones/centrar.php';
require_once 'funciones/titulo.php';
require_once 'funciones/limpiarPantalla.php';
require_once 'funciones/esperarEnter.php';
require_once 'funciones/pedirEntero.php';
require_once 'funciones/dibujarTabla.php';
require_once 'funciones/datos.php';
require_once 'funciones/conexion.php';

// --- DB: Videojuegos ---
require_once 'db/videojuegos/obtenerVideojuegos.php';
require_once 'db/videojuegos/buscarVideojuego.php';
require_once 'db/videojuegos/insertarVideojuego.php';

// --- DB: Ventas ---
require_once 'db/ventas/obtenerVentas.php';
require_once 'db/ventas/insertarVenta.php';

// --- Pantallas: Videojuegos ---
require_once 'pantallas/videojuegos/listarVideojuegos.php';
require_once 'pantallas/videojuegos/agregarVideojuego.php';
require_once 'pantallas/videojuegos/menuVideojuegos.php';

// --- Pantallas: Ventas ---
require_once 'pantallas/ventas/listarVentas.php';
require_once 'pantallas/ventas/registrarVenta.php';
require_once 'pantallas/ventas/menuVentas.php';
