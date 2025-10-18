<?php
include_once 'DBConnection.php';
include_once 'gestorproductos.php';

$db = new DBConnection();                    // Se abre la conexión
$gestor = new GestorProductos($db->getConexion()); // Se pasa la conexión existente

$productosES = $gestor->obtenerProductoses();
$productosEN = $gestor->obtenerProductosen();

foreach ($productosES as $p) {
    echo $p->getProductoesNombre() . " - " . $p->getProductoesPrecio() . "<br>";
}

foreach ($productosEN as $p) {
    echo $p->getProductoenNombre() . " - " . $p->getProductoenPrecio() . "<br>";
}

$db->cerrarConexion(); // Se cierra la conexión una sola vez
?>