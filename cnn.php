<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$db = "tienda";

$conexion = new mysqli($host, $usuario, $clave, $db);

if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}


//$conexion->close(); //importante cerrar la conexion para que no te llene la memoria con procesos 

?>