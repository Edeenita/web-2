<?php
require_once "noticias.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//**
//    TABLA DE RUTEO
//    Action        Funcion
//    home          showNoticias()
//    noticia/:id   showNoticia($id) 
//    about         showAbout()
//    about/:dev    showAbout($dev)

if (!empty($_GET["action"])){
    $action = $_GET["action"];
} else {
    $action = "home";
}
// noticia/3 = ["noticia","3"];
$params = explode("/",$action);

switch ($params[0]) {
    case "home":
        showNoticias();
        break;
    case "noticia":
        if(isset($params[1])){
            showNoticiaById($params[1]);
        }else{
            showNoticias();
        }
        break;
    case "about":
        echo "En construcción";
        break;
    default:
        echo "Error 404";
        break;
}

