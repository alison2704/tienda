<?php
if ($_GET["borrar"] == 1 && isset($_COOKIE)) {
    //borro las cookies y navega hacia el index.php
    foreach ($_COOKIE as $name => $value) {
        setcookie($name, '', 1);//va a morir el 1 de enero de 1970 00:00:1
    }
    //INSERTAR CABECERAS EN EL METODO HTTP
}
//navego al index.php
header("location:index.php");

?>