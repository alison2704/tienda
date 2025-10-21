<?php
// Aquí se inicia la sesión
session_start();
// Aquí se valida si la sesión está iniciada
if (!isset($_SESSION['usuario']) && !isset($_SESSION['clave'])) {
    header("Location:index.php");
}

$idioma = (isset($_COOKIE['c_idioma']) && $_COOKIE['c_idioma'] === 'en') ? 'en' : 'es'; // Determina el idioma basado en la cookie
$titulo = ($idioma == 'en') ? 'Shopping Cart' : 'Carrito de Compra';
$bienvenido = ($idioma == 'en') ? 'Welcome' : 'Bienvenido';
$instrucciones = ($idioma == 'en') ? 'List of products added to your cart during the session:' : 'Lista de productos agregados a su carrito durante la sesión:';
$irpanel = ($idioma == 'en') ? 'Main Panel' : 'Panel Principal';
$cerrarsesion = ($idioma == 'en') ? 'Close Session' : 'Cerrar Sesión';

?>

<html>

<head>
</head>

<body>
    <h1><?php echo $titulo ?></h1>
    <h3><?php echo $bienvenido . " " . $_SESSION["usuario"] ?></h3>
    <!-- Muestro el nombre de usuario almacenado en la sesión -->
    <p><a href="panel.php"><?php echo $irpanel; ?></a></p> <!-- Enlace a la página panel.php -->
    <br>
    <h3> <?php echo $instrucciones; ?></h3>

    <?php
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) { // Verificar si el carrito existe y tiene productos
        $carrito = $_SESSION['carrito']; // Obtener el carrito de la sesión
        $total = 0;
        foreach ($carrito as $producto) { // Iterar sobre los productos en el carrito
            echo $producto['nombre'] . " (Cantidad: " . $producto['cantidad'] . ")<br>";
            $total += $producto['precio'] * $producto['cantidad'];
        }
        echo "Total: $" . $total;
    } else {
        echo ($idioma == 'en') ? 'Your cart is empty.' : 'Su carrito está vacío.';
    }
    ?>
    <!-- Botones finales -->
    <hr>
    <p><a href="cerrarsesion.php"><?php echo $cerrarsesion; ?></a></p> <!-- Enlace a la página cerrarsesion.php -->

</body>

</html>