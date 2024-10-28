<?php
require_once 'controllers.php';

define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;

    case 'lista':
        showLista();
        break;

    case 'filtro':
        if (isset($_GET['area'])) {
            showFiltro($_GET['area']);
        } else {
            showHome();
        }
        break;

    case 'ver':
        if (isset($params[1])) {
            showFigura($params[1]);
        } else {
            showHome();
        }
        break;

    default:
        echo 'Error 404';
        break;
}
