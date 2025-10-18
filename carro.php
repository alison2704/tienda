<?php
// Aquí se inicia la sesión
session_start();
// Aquí se valida si la sesión está iniciada
if( !isset($_SESSION['nombre']) && !isset($_SESSION['clave'])){
    header("Location:index.php");
}
?>

<html>
    <head>
    </head>
    <body>
        <h1>Carrito de Compra</h1>
        <h3>Usuario logeado: <?php echo $_SESSION["nombre"] ?></h3> <!-- Muestro el nombre de usuario almacenado en la sesión -->
        <p><a href="panel.php">Ir a Mi Panel</a></p> <!-- Enlace a la página panel.php -->
        <br>
        <!-- Se debe utilizar un if para verificar si el usuario escogio la lista en español o ingles, utilizar la cookie de preferencia de idioma-->
        <!-- ESPAÑOL -->
        <h3>Lista de Productos Seleccionados en la Sesión: <?php echo $_SESSION["nombre"] ?></h3>
        <!-- Aquí poner la lista de los productos en español almacenados en la sesion -->
        <hr>
        <p><a href="cerrarsesion.php">Cerrar Sesión</a></p> <!-- Enlace a la página cerrarsesion.php -->
        <br>
        <a href="borrarcookies.php?borrar=1">Borrar cookies y regresar</a> <!-- Enlace para borrar cookies y regresar -->
        <br>
        <a href="borrarcookies.php?borrar=0">Regresar</a> <!-- Enlace para regresar sin borrar cookies -->

        <!-- INGLES -->
        <h3>List of Products Selected in the Session: <?php echo $_SESSION["nombre"] ?></h3>
        <!-- Aquí poner la lista de los productos en español almacenados en la sesion -->
        <hr>
        <p><a href="cerrarsesion.php">Close Session</a></p> <!-- Enlace a la página cerrarsesion.php -->
        <br>
        <a href="borrarcookies.php?borrar=1">Delete cookies and return</a> <!-- Enlace para borrar cookies y regresar -->
        <br>
        <a href="borrarcookies.php?borrar=0">Return</a> <!-- Enlace para regresar sin borrar cookies -->
    </body>
</html>