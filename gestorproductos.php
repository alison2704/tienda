<?php
include_once 'DBConnection.php';
include_once 'productoses.php';
include_once 'productosen.php';

class GestorProductos {
    private $conexion; // Atributo para almacenar la conexión a la base de datos

    // Recibe la conexión como parámetro
    public function __construct($conexionExistente) {
        $this->conexion = $conexionExistente;
    }

    // Método para obtener todos los productos en español
    public function obtenerProductoses() {
        $sql = "SELECT * FROM productoses"; // Consulta SQL para obtener todos los productos en español
        $resultado = $this->conexion->query($sql); // Ejecutar la consulta y almacenar el resultado
        $lista = array(); // Inicializar una lista vacía

        if ($resultado && $resultado->num_rows > 0) { // Si el resultado es true y tiene filas
            while ($fila = $resultado->fetch_assoc()) { // Se itera sobre cada fila del resultado
            // fetch_assoc() obtiene una fila como un array asociativo
                $producto = new Productoses( // Se crea un nuevo objeto Productoses con los datos de la fila
                    $fila['id'],
                    $fila['nombre'],
                    $fila['descripcion'],
                    $fila['precio']
                );
                array_push($lista, $producto); // Agregar el objeto a la lista
            }
        }
        return $lista;
    }

    // Método para obtener todos los productos en inglés
    public function obtenerProductosen() {
        $sql = "SELECT * FROM productosen"; // Consulta SQL para obtener todos los productos en inglés
        $resultado = $this->conexion->query($sql); // Ejecutar la consulta y almacenar el resultado
        $lista = array(); // Inicializar una lista vacía

        if ($resultado && $resultado->num_rows > 0) { // Si el resultado es true y tiene filas
            while ($fila = $resultado->fetch_assoc()) { // Se itera sobre cada fila del resultado
            // fetch_assoc() obtiene una fila como un array asociativo
                $producto = new Productosen( // Se crea un nuevo objeto Productosen con los datos de la fila
                    $fila['id'],
                    $fila['nombre'],
                    $fila['descripcion'],
                    $fila['precio']
                );
                array_push($lista, $producto); // Agregar el objeto a la lista
            }
        }
        return $lista;
    }
}
?>
