<?php
    require_once("Filter.php");

    class AreaFilter extends Filter
    {
        public function __construct($area)
        {
            $this->area = $area;
        }

        public function match($figura)
        {
            if($figura->getArea() < $this->area)
                return true;
            return false;
        }
    }

?>