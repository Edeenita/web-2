<?php
    require_once("Figura.php");

    class Circulo extends Figura
    {
        public function __construct($radio)
        {
            $this->radio = $radio;
        }

        public function getName()
        {
            return "Circulo";
        }

        public function getArea()
        {
            return pi() *  $this->radio * $this->radio;
        }

        public function getPerimetro()
        {
            return pi() * 2 * $this->radio;
        }
    }

?>