<?php
    require_once("Figura.php");
    require_once("Cuadrado.php");
    require_once("Circulo.php");
    require_once("Triangulo.php");

    class Figuras
    {
        public function __construct()
        {
            session_start(); 
            if(!isset($_SESSION['figuras'])) {
                $this->clear();
                $this->loadDummyData();
            }
        }

        public function clear()
        {
            $_SESSION['figuras'] = []; 
        }
        

        public function getBy($filter)
        {
            $match = [];
            foreach($_SESSION['figuras'] as $figura)
                if($filter->match($figura))
                    $match[] = $figura;
            return $match;
        }

        public function get($id)
        {
            return $_SESSION['figuras'][$id];
        }

        public function getAll()
        {
            return $_SESSION['figuras'];
        }

        public function insert($figura)
        {
            
            $figura->setId(uniqid("", true));
            $_SESSION['figuras'][$figura->getId()] = $figura;
        }

        public function size()
        {
            return count($_SESSION['figuras']);
        }

        private function loadDummyData() {
            $this->insert(new Cuadrado(3.0));
            $this->insert(new Cuadrado(6.3));
            $this->insert(new Cuadrado(8.0));
            $this->insert(new Cuadrado(9.0));
            $this->insert(new Triangulo(1.1,3.5));
            $this->insert(new Triangulo(9.0,0.1));
            $this->insert(new Triangulo(4.0,5.0));
            $this->insert(new Triangulo(5.0,5.0));
            $this->insert(new Circulo(1.5));
            $this->insert(new Circulo(2.1));
            $this->insert(new Circulo(3.0));
            $this->insert(new Circulo(4.4));
        }
    }

?>