<?php
    require_once("Figura.php");

    abstract class Filter
    {
        public abstract function match($figura);
    }

?>