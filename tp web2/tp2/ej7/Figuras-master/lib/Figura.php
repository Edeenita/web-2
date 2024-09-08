
<?php
    abstract class Figura
    {
        protected $id;

        public function getId() 
        {
            return $this->id;
        }

        public function setId($id) 
        {
            $this->id = $id;
        }
        
        public abstract function getName();

        public abstract function getArea();

        public abstract function getPerimetro();

        public function ToString()
        {
            return $this->getName() . " Area: " . $this->getArea() . " Perimetro: " . $this->getPerimetro();
        }
    }

?>