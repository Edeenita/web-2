<?php
require_once './app/hostel.php'; // Asegúrate de que este sea el archivo correcto

// base_url para redirecciones y base tag
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'index'; // acción por defecto si no se envía ninguna
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la acción para separar acción real de parámetros
$params = explode('/', $action);

switch ($params[0]) {
    case 'index':
        showHabitaciones(); // Mostrar lista de habitaciones
        break;
    case 'nueva_reserva':
        addReserva(); // Agregar nueva reserva
        break;
    case 'eliminar':
        deleteReserva($params[1]); // Eliminar reserva
        break;
    case 'finalizar':
        finishReserva($params[1]); // Finalizar reserva (ajusta si es necesario)
        break; 
    case 'showReservas':
            showReservas(); // Mostrar reservas
        break;
    default: 
        echo "404 Page Not Found"; // Manejo de 404
        break;
}
