<?php

class Soporte {
    const IVA = 0.23;

    function __construct(
        public string $titulo,
        protected int $numero,
        private float $precio
    ){}

    public function getPrecio() {
        return $this->precio;
    }
    public function getPrecioConIva() {
        return $this->precio * self::IVA;
    }
    public function getNumero() {
        return $this->numero;
    }

    public function muestraResumen() {
        return "Esto sería el resumen."
    }
}

?>