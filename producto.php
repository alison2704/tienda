<?php
session_start();
require_once 'cnn.php';

$idioma = (isset($_COOKIE['c_idioma']) && $_COOKIE['c_idioma'] === 'en') ? 'en' : 'es';
$tabla = ($idioma === 'en') ? 'productosen' : 'productoses';

$id = $_GET['id'];

// Consultar producto por id
$sql = "SELECT id, nombre, descripcion, precio FROM $tabla WHERE id = $id";
$resultado = $conexion->query($sql);
$producto = $resultado->fetch_assoc();
$conexion->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar_carro'])) {
    // Crear carrito si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
    $id_producto = $producto['id'];
    // Agregar producto al carrito
    if (!isset($_SESSION['carrito'][$id_producto])) {
        $_SESSION['carrito'][$id_producto] = [
            'id' => $producto['id'],
            'nombre' => $producto['nombre'],
            'precio' => $producto['precio'],
            'cantidad' => 1
        ];
    } else {
        $_SESSION['carrito'][$id_producto]['cantidad']++;
    }
}
?>

<html>
<head>
    <title>Producto</title>
</head>
<body>

<h1><?php echo ($idioma === 'en') ? 'Product Details:' : 'Detalles del Producto:'; ?></h1>

<h2><?php echo $producto['nombre']; ?></h2>
<p><strong>ID:</strong> <?php echo $producto['id']; ?></p>
<p><strong><?php echo ($idioma === 'en') ? 'Description:' : 'Descripción:'; ?></strong> <?php echo $producto['descripcion']; ?></p>
<p><strong><?php echo ($idioma === 'en') ? 'Price:' : 'Precio:'; ?></strong> $<?php echo $producto['precio']; ?></p>

<form method="POST">
    <button type="submit" name="agregar_carro">Agregar al carrito</button>
</form>

<a href="panel.php">Volver al Panel Principal</a><br>
<a href="carro.php">Ir al carrito</a>
</body>
</html>
