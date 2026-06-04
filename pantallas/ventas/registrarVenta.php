<?php
function registrarVenta(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("REGISTRAR VENTA", 53);

    $cliente = readline("  Nombre del cliente: ");
    $videojuegos = obtenerVideojuegos($datos);

    $items = [];
    $reserva = [];
    $seguir = true;

    while ($seguir) {

        limpiarPantalla();
        echo "\n";
        titulo("REGISTRAR VENTA", 53);
        echo "  Cliente: $cliente\n\n";

        $filas = [];

        for ($i = 0; $i < count($videojuegos); $i++) {

            $v = $videojuegos[$i];

            $stockActual =
                (int)$v['stock']
                - ($reserva[$v['id']] ?? 0);

            $fila = [
                'id' => $v['id'],
                'titulo' => $v['titulo'],
                'precio' => $v['precio']
            ];

            $fila['stock'] =
                $stockActual <= 0
                ? 'Agotado'
                : $stockActual;

            $filas[] = $fila;
        }

        dibujarTabla($filas, [
            ['titulo' => 'ID',     'clave' => 'id',     'ancho' => 4],
            ['titulo' => 'Titulo', 'clave' => 'titulo', 'ancho' => 26],
            ['titulo' => 'Precio', 'clave' => 'precio', 'ancho' => 7],
            ['titulo' => 'Stock',  'clave' => 'stock',  'ancho' => 5],
        ]);

        $idsDisponibles = [];

        for ($i = 0; $i < count($videojuegos); $i++) {

            $v = $videojuegos[$i];

            $stockActual =
                (int)$v['stock']
                - ($reserva[$v['id']] ?? 0);

            if ($stockActual > 0) {
                $idsDisponibles[] = (int)$v['id'];
            }
        }

        if (empty($idsDisponibles)) {
            echo "\n  No hay mas videojuegos disponibles.\n";
            break;
        }

        echo "  (0 para terminar)\n";

        $id_videojuego = pedirEntero(
            "  ID Videojuego",
            array_merge($idsDisponibles, [0])
        );

        if ($id_videojuego === 0) {
            $seguir = false;
            continue;
        }

        $stockDisponible = 0;

        for ($i = 0; $i < count($videojuegos); $i++) {

            if ((int)$videojuegos[$i]['id'] === $id_videojuego) {

                $stockDisponible =
                    (int)$videojuegos[$i]['stock']
                    - ($reserva[$id_videojuego] ?? 0);

                break;
            }
        }

        if ($stockDisponible <= 0) {
            echo "\n  No hay stock disponible.\n";
            esperarEnter();
            continue;
        }

        $cantidad = pedirEntero(
            "  Cantidad (1-$stockDisponible)",
            range(1, $stockDisponible)
        );

        $encontrado = false;

        for ($i = 0; $i < count($items); $i++) {

            if ($items[$i]['id_videojuego'] === $id_videojuego) {

                $items[$i]['cantidad'] += $cantidad;
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {

            $items[] = [
                'id_videojuego' => $id_videojuego,
                'cantidad' => $cantidad
            ];
        }

        $reserva[$id_videojuego] =
            ($reserva[$id_videojuego] ?? 0)
            + $cantidad;

        $resp = readline("  Agregar otro juego? (s/n): ");

        if (strtolower(trim($resp)) !== 's') {
            $seguir = false;
        }
    }

    if (empty($items)) {
        return;
    }

    $cliente_id = obtenerOCrearCliente($cliente);

    $id = insertarVenta(
        $datos,
        $cliente_id,
        $items
    );

    echo "\n  Venta registrada con ID $id.\n";

    esperarEnter();
}