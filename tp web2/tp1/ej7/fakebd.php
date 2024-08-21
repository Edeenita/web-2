<?php
/**
 * Archivo php para simular una colección de desarrolladores con más información.
 * 
 * Este archivo se comparte con las otras páginas para que puedan acceder al arreglo indexado $desarrolladores.
 */

$d1 = new stdClass();
$d1->nombre = "Edena";
$d1->descripcion = "Fullstack developer";
$d1->imagen = "./imagenes/vt1.png";
$d1->info = "Edena tiene experiencia en desarrollo web fullstack, trabajando tanto en frontend como en backend.";
$d1->biografia = "Edena comenzó su carrera con NODE.JS y rápidamente se interesó en el desarrollo backend. Tiene una sólida experiencia en el manejo de bases de datos y en la implementación de soluciones completas. Ha trabajado en proyectos de diversa índole, desde aplicaciones web hasta sistemas complejos y demás cosas que ya no se en que tirarme flores.";
$d1->proyectos = [
    "Compilar a la primera",
    "Subir a esmeralda en el lol",
    "Cerebro de IA (bueeeeeeeeeeee)"
];
$d1->habilidades = [
    "JavaScript",
    "PHP",
    "MySQL",
    "Node.js",
    "ODIAR JAVA"
];
$d1->enlaces = [
    "GitHub" => "https://github.com/Edeenita"
];

$d2 = new stdClass();
$d2->nombre = "ChatGPT";
$d2->descripcion = "QA engineer";
$d2->imagen = "./imagenes/chatgpt.png";
$d2->info = "ChatGPT es un ingeniero de calidad especializado en pruebas automatizadas y aseguramiento de calidad.";
$d2->biografia = "Con años de experiencia en la industria, ChatGPT se especializa en pruebas automatizadas y en la implementación de estrategias para garantizar la calidad del software. Tiene experiencia en la creación de suites de pruebas y en el análisis de resultados para mejorar los productos.";
$d2->proyectos = [
    "Sistema de pruebas automatizadas para ecommerce",
    "Framework de pruebas de integración",
    "Análisis y mejora de procesos de QA",
];
$d2->habilidades = [
    "Selenium",
    "JUnit",
    "TestNG",
    "Cypress",
    "JIRA",
    "Se genero a si mismo la informacion aqui precente xD"
];
$d2->enlaces = [
    "LinkedIn" => "https://www.linkedin.com/in/chatgpt",
    "GitHub" => "https://github.com/chatgpt"
];

$d3 = new stdClass();
$d3->nombre = "Ishtar";
$d3->descripcion = "Psicología";
$d3->imagen = "./imagenes/ishtar.jpg";
$d3->info = "Ishtar es una psicóloga con experiencia en el análisis del comportamiento de los usuarios.";
$d3->biografia = "Ishtar trabaja en la intersección de la psicología y la tecnología. Su experiencia incluye estudios sobre la interacción de los usuarios con aplicaciones y cómo el diseño puede afectar el comportamiento. Tiene un interés particular en la usabilidad y la experiencia del usuario.";
$d3->proyectos = [
    "Estudio de usabilidad de aplicaciones móviles",
    "Investigación sobre comportamiento en plataformas de redes sociales",
    "Análisis de la experiencia de usuario en sitios web educativos"
];
$d3->habilidades = [
    "Psicología del usuario",
    "Investigación de usabilidad",
    "Análisis de datos",
    "Metodología UX"
];
$d3->enlaces = [
    "LinkedIn" => "https://www.linkedin.com/in/ishtar",
    "GitHub" => "https://github.com/ishtar"
];

$d4 = new stdClass();
$d4->nombre = "XAMPP";
$d4->descripcion = "Support by APACHE";
$d4->imagen = "./imagenes/xampp.png";
$d4->info = "XAMPP proporciona soporte y herramientas para la administración de servidores web.";
$d4->biografia = "XAMPP es conocido por su facilidad de uso para desarrollar aplicaciones web localmente. Es una herramienta clave para desarrolladores que necesitan un entorno de servidor local para probar sus aplicaciones antes de implementarlas en producción.";
$d4->proyectos = [
    "Desarrollo de herramientas de administración de servidores",
    "Implementación de soluciones de desarrollo local",
    "Soporte técnico y documentación para usuarios de XAMPP"
];
$d4->habilidades = [
    "Configuración de servidores",
    "Desarrollo local",
    "Documentación técnica",
    "Soporte técnico"
];
$d4->enlaces = [
    "Sitio Web" => "https://www.apachefriends.org/index.html"
];

$desarrolladores = [$d1, $d2, $d3, $d4];
