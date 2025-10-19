<?php

$nombre = $_POST['nombre'] ?? ($_COOKIE['c_nombre'] ?? '');
$clave = $_POST['clave'] ?? ($_COOKIE['c_clave'] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recordarme = isset($_POST['chkRecordarme']);

    if ($recordarme) {
        setcookie("c_nombre", $nombre, 0);
        setcookie('c_clave', $clave, 0);
        setcookie('c_recordarme', $recordarme, 0);
    } else {
        if (isset($_COOKIE)) {
            foreach ($_COOKIE as $name => $value) {
                setcookie($name, '', 1);
            }
        }
    }
} else {
    $recordarme = isset($_COOKIE['c_recordarme']) && $_COOKIE['c_recordarme'];
}

$idioma = 'es';

if ($recordarme && isset($_COOKIE['c_idioma'])) {
    $idioma = $_COOKIE['c_idioma'];
}

if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];
    if ($recordarme) {
        setcookie("c_idioma", $idioma, 0);
    }
}

include('cnn.php');
$tabla = ($idioma == 'en') ? 'productosen' : 'productoses';
//$sql = "SELECT nombre FROM $tabla";
$sql = "SELECT id, nombre FROM $tabla";
$resultado = $conexion->query($sql);

$titulo = ($idioma == 'en') ? 'Product List' : 'Lista de productos';
?>


<html>

<head></head>

<body>
    <h1>Panel Principal</h1>
    <h1>Bienvenido usuario: <?php echo $nombre ?></h1>

    <a href="?idioma=es">ES (Español)</a>|
    <a href="?idioma=en">EN (English)</a><br>

    <h2><?php echo $titulo ?></h2>

    <?php
    if (!$resultado) {
        echo "Error al obtener los productos";
    } elseif ($resultado->num_rows === 0) {
        echo "No hay registros";
    } else {
        while ($fila = $resultado->fetch_assoc()) {
            $id = $fila['id'];
            $nom = $fila['nombre'];
            echo "<a href='producto.php?id=$id'>$nom</a><br>";
        }
    }

    $conexion->close();
    ?>


    <a href="carro.php">Carrito de productos</a><br>
    <a href="cerrarsesion.php">Cerrar sesión</a><br>


</body>

</html>