<?php

class Articulo {
    private $nombre;
    private $coste;
    private $precio;
    private $contador;
    private $ventas;

    public function __construct($nombre, $coste, $precio, $contador) {
        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->contador = $contador;
        $this->ventas = 0;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCoste() {
        return $this->coste;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getContador() {
        return $this->contador;
    }

    public function getVentas() {
        return $this->ventas;
    }

    public function calcularBeneficio() {
        return $this->ventas * ($this->precio - $this->coste);
    }

    public function incrementarVentas($cantidad = 1) {
        $this->ventas += $cantidad;
    }
}

?>
