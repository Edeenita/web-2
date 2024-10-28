<?php
    require_once("Figura.php");

    class Cuadrado extends Figura
    {
        public function __construct($lado)
        {
            $this->lado = $lado;
        }

        public function getName()
        {
            return "Cuadrado";
        }

        public function getArea()
        {
            return $this->lado * $this->lado;
        }

        public function getPerimetro()
        {
            return 4 * $this->lado;
        }
    }

?>