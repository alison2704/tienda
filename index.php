<?php
$nombre = $clave = $sexo = "";
$preferencias = $esHombre = $esMujer = false;

if (isset($_COOKIE["c_recordarme"]) && $_COOKIE["c_recordarme"]) {
    $preferencias = true;
    $nombre = $_COOKIE["c_nombre"];
    $clave = $_COOKIE["c_clave"];
    $sexp = $_COOKIE["c_sexo"];

    if ($sexo = 'h') {
        $esHombre = true;
    } else {
        $esMujer = true;
    }
    $esHombre = ($sexo == "h") ? true : false;
    $esMujer = ($sexo == "m") ? true : false;
}
?>

<html>

<head></head>

<body>
    <h1>Formulario de ingreso</h1>

    <form action="panel.php" method="POST">
        <fieldset>
            Usuario*:<br>
            <input type="text" name="nombre" value="<?php echo $nombre ?>" id="" required><br>
            Clave*:<br>
            <input type="password" name="clave" value="<?php echo $clave ?>" id="" required><br>

            <br>

            <input type="checkbox" name="chkRecordarme" checked>Recordarme
            <br>
            <br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>