<?php
require_once 'lib/Figuras.php';

// instancia la clase Figuras para acceder a las figuras
$figuras = new Figuras();

// obtiene la figura según el ID pasado como parámetro
$id = $_GET['id'];
$figura = $figuras->get($id);

// imprime el detalle de la figura
echo 
    "<ul>
        <li><strong>ID: </strong>" . $figura->getId() . "</li>
        <li><strong>Tipo: </strong>" . $figura->getName() . "</li>
        <li><strong>Perímetro: </strong>" . $figura->getPerimetro() . "</li>
        <li><strong>Área: </strong>" . $figura->getArea() . "</li>
    </ul>";