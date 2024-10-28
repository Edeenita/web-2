<?php
require_once 'lib/Figuras.php';
require_once 'lib/AreaFilter.php';

function showHome() {
    include 'index.html';
}

function showLista() {
    $figuras = new Figuras();
    echo "<h1>Listado de figuras</h1><ul>";
    foreach ($figuras->getAll() as $figura) {
        echo "<li>" . $figura->ToString() . " | <a href='". BASE_URL . "ver/" . $figura->getId() . "'>VER </a></li>";
    }
    echo "</ul><a href='" . BASE_URL . "'>Volver</a>";
}

function showFiltro($area) {
    $figuras = new Figuras();
    echo "Las figuras con área menor a $area son:<ul>";
    foreach ($figuras->getBy(new AreaFilter($area)) as $figura) {
        echo "<li>" . $figura->ToString() . " | <a href='" . BASE_URL . "ver/" . $figura->getId() . "'>VER </a></li>";
    }
    echo "</ul><a href='" . BASE_URL . "'>Volver</a>";
}

function showFigura($id) {
    $figuras = new Figuras();
    $figura = $figuras->get($id);
    if ($figura) {
        echo "<ul>
                <li><strong>ID: </strong>" . $figura->getId() . "</li>
                <li><strong>Tipo: </strong>" . $figura->getName() . "</li>
                <li><strong>Perímetro: </strong>" . $figura->getPerimetro() . "</li>
                <li><strong>Área: </strong>" . $figura->getArea() . "</li>
            </ul>
            <a href='" . BASE_URL . "lista'>Volver</a>";
    } else {
        echo 'Error 404: Figura no encontrada';
    }
}
