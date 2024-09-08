<?php
    require_once("Figura.php");

    class Triangulo extends Figura
    {
        public function __construct($base, $altura)
        {
            $this->base = $base;
            $this->altura = $altura;
        }

        public function getName()
        {
            return "Triangulo";
        }

        public function getArea()
        {
            return $this->base * $this->altura / 2;
        }

        public function getPerimetro()
        {
            return $this->base + 2 * sqrt($this->base/2 * $this->base/2 + $this->altura * $this->altura);
        }
    }

?>