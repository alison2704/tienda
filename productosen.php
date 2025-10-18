<?php
class Productosen {
    private $productoenId;
    private $productoenNombre;
    private $productoenDescripcion;
    private $productoenPrecio;

    // En PHP no se pueden tener dos constructores, se usa uno solo
    function __construct($productoenId, $productoenNombre, $productoenDescripcion, $productoenPrecio) {
        $this->productoenId = $productoenId;
        $this->productoenNombre = $productoenNombre;
        $this->productoenDescripcion = $productoenDescripcion;
        $this->productoenPrecio = $productoenPrecio;
    }

    public function getProductoenId() {
        return $this->productoenId;
    }

    public function getProductoenNombre() {
        return $this->productoenNombre;
    }

    public function getProductoenDencripcion() {
        return $this->productoenDescripcion;
    }

    public function getProductoenPrecio() {
        return $this->productoenPrecio;
    }

    public function setProductoenId($productoenId) {
        $this->productoenId = $productoenId;
    }

    public function setProductoenNombre($productoenNombre) {
        $this->productoenNombre = $productoenNombre;
    }

    public function setProductoenDencripcion($productoenDescripcion) {
        $this->productoenDescripcion = $productoenDescripcion;
    }

    public function setProductoenPrecio($productoenPrecio) {
        $this->productoenPrecio = $productoenPrecio;
    }
}
?>
