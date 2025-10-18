<?php
class Productoses {
    private $productoesId;
    private $productoesNombre;
    private $productoesDescripcion;
    private $productoesPrecio;

    // En PHP no se pueden tener dos constructores, se usa uno solo
    function __construct($productoesId, $productoesNombre, $productoesDescripcion, $productoesPrecio) {
        $this->productoesId = $productoesId;
        $this->productoesNombre = $productoesNombre;
        $this->productoesDescripcion = $productoesDescripcion;
        $this->productoesPrecio = $productoesPrecio;
    }

    public function getProductoesId() {
        return $this->productoesId;
    }

    public function getProductoesNombre() {
        return $this->productoesNombre;
    }

    public function getProductoesDescripcion() {
        return $this->productoesDescripcion;
    }

    public function getProductoesPrecio() {
        return $this->productoesPrecio;
    }

    public function setProductoesId($productoesId) {
        $this->productoesId = $productoesId;
    }

    public function setProductoesNombre($productoesNombre) {
        $this->productoesNombre = $productoesNombre;
    }

    public function setProductoesDescripcion($productoesDescripcion) {
        $this->productoesDescripcion = $productoesDescripcion;
    }

    public function setProductoesPrecio($productoesPrecio) {
        $this->productoesPrecio = $productoesPrecio;
    }
}
?>