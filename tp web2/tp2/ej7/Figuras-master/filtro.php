<?php
require_once 'lib/Figuras.php';
require_once 'lib/AreaFilter.php';

// instancio la clase Figuras para trabajar con las figuras del sistema
$figuras = new Figuras();

$area = $_GET['area'];

echo "Las figuras con area menor a $area son:<ul>";
foreach($figuras->getBy(new AreaFilter($area)) as $figura) {
    echo "<li>" . 
            $figura->ToString() . 
            " | <a href='verFigura.php?id=". $figura->getId() . "'>VER </a>" .
        "</li>";
}
echo "
    </ul>
    <a href='./'>Volver</a>";
