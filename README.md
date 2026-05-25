# Proyecto Final BDR – Tienda de Videojuegos con MySQL

## 1. Historia del problema

Una tienda de videojuegos necesita organizar su inventario y registrar ventas. Actualmente no sabe con precisión qué juegos tiene disponibles, cuáles se han vendido y qué clientes han comprado.

La organización necesita una solución sencilla en terminal que permita guardar la información de forma permanente usando una base de datos relacional.

---

## 2. Objetivo del proyecto

Crear un sistema CLI que permita administrar videojuegos, clientes y ventas sencillas.

El sistema base será entregado por el docente funcionando con arreglos en memoria.  
El equipo deberá refactorizarlo para que funcione con **PHP-CLI + MySQL**.

---

## 3. Situación inicial

El programa ya funciona, pero guarda los datos en arreglos.

Eso significa que:

- Al cerrar el programa, los datos se pierden.
- No existe una base de datos real.
- No hay tablas, llaves primarias ni relaciones persistentes.

---

## 4. Misión del equipo

Modificar el sistema para que los datos se almacenen en MySQL.

El equipo debe conservar el flujo principal del programa y reemplazar el uso de arreglos por operaciones con base de datos.

---

## 5. Entidades mínimas sugeridas

- `videojuegos`
- `clientes`
- `ventas`
- `detalle_venta`

El equipo puede agregar campos adicionales, pero no debe aumentar demasiado el alcance.

---

## 6. Funciones mínimas del sistema

- Registrar videojuegos
- Registrar clientes
- Registrar ventas
- Agregar videojuegos a una venta
- Consultar ventas por cliente

---

## 7. Consulta o reporte obligatorio

Reporte de ventas: mostrar cliente, fecha, videojuegos comprados y total.

Esta consulta debe obtener información relacionada desde más de una tabla.

---

## 8. Requisitos de base de datos

El proyecto debe incluir:

- Creación de tablas con `CREATE TABLE`.
- Llaves primarias.
- Al menos una llave foránea.
- Operaciones `INSERT`, `SELECT`, `UPDATE` y/o `DELETE` según aplique.
- Al menos una consulta con relación entre tablas.

---

## 9. Alcance limitado

Para que el proyecto sea posible en dos semanas, **no se pide**:

- No se requiere facturación real
- No se requiere manejo avanzado de inventario por sucursal
- No se requiere sistema de pagos

---

## 10. Reglas importantes

- No se debe cambiar el objetivo principal del sistema.
- No se deben usar arreglos como almacenamiento final.
- Los datos deben permanecer guardados después de cerrar y volver a abrir el programa.
- La evaluación se enfoca en la integración con MySQL, no en rediseñar toda la aplicación.

---

## 11. Entregable esperado

El equipo debe entregar:

- Código PHP-CLI funcionando.
- Script SQL con la estructura de tablas y datos iniciales.
- Evidencia de pruebas.
- Breve explicación del modelo de datos.
