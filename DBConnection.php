<?php
include_once 'productoses.php';
include_once 'productosen.php';

class DBConnection {
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "tienda";
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db)
        or die($this->conexion->connect_errno);
    }

    // Devuelve la conexión abierta
    public function getConexion() {
        return $this->conexion;
    }

    // Cierra la conexión
    public function cerrarConexion() {
        $this->conexion->close();
    }
}
?>
