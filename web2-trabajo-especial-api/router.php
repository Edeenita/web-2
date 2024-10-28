<?php
require_once './libs/ConfigRouter.php';
require_once './app/controllers/ReservationsApiController.php';
require_once './app/controllers/RoomsApiController.php';
require_once './app/controllers/UsersApiController.php';


$router = new Router();


/*
$router->addRoute(URL, VERB, CONTROLLER, METHOD)
$router: Variable del ConfigRouter que gestiona las rutas.
addRoute: Función principal para añadir rutas.
URL: La URL a la que se accede.
VERB: El verbo HTTP para la función (GET, POST, PUT, DELETE, etc.).
CONTROLLER: Nombre del controlador a llamar.
METHOD: Nombre de la función del controlador que ejecutará la tarea.
*/

// Rutas para el controlador de habitaciones (rooms)
// Endpoint para obtener todas las habitaciones
$router->addRoute('rooms', 'GET', 'RoomsApiController', 'getRooms');
// Endpoint para obtener una habitación por ID
$router->addRoute('rooms/:id', 'GET', 'RoomsApiController', 'getRoomById');
// Endpoint para crear una nueva habitación
$router->addRoute('rooms', 'POST', 'RoomsApiController', 'addRoom');
// Endpoint para eliminar una habitación por ID
$router->addRoute('rooms/:id', 'DELETE', 'RoomsApiController', 'deleteRoom');
// Endpoint para actualizar una habitación por ID
$router->addRoute('rooms/:id', 'PUT', 'RoomsApiController', 'updateRoom');

// Rutas para el controlador de reservas (reservations)
// Endpoint para obtener todas las reservas
$router->addRoute('reservations', 'GET', 'ReservationsApiController', 'showReservations');
// Endpoint para obtener una reserva por ID
$router->addRoute('reservations/:id', 'GET', 'ReservationsApiController', 'getReservationById'); // no funciona
// Endpoint para crear una nueva reserva
$router->addRoute('reservations', 'POST', 'ReservationsApiController', 'addReservation');
// Endpoint para eliminar una reserva por ID
$router->addRoute('reservations/:id', 'DELETE', 'ReservationsApiController', 'deleteReservation');
// Endpoint para actualizar una reserva por ID
$router->addRoute('reservations/:id', 'PUT', 'ReservationsApiController', 'updateReservation');

// Rutas para el controlador de usuarios (users) (Funcionan todos los campos)
// Endpoint para obtener todos los usuarios
$router->addRoute('users', 'GET', 'UsersApiController', 'showUsers');
// Endpoint para obtener un usuario por ID
$router->addRoute('users/:id', 'GET', 'UsersApiController', 'getUserById');
// Endpoint para crear un nuevo usuario
$router->addRoute('users', 'POST', 'UsersApiController', 'addUser');
// Endpoint para eliminar un usuario por ID
$router->addRoute('users/:id', 'DELETE', 'UsersApiController', 'deleteUser');
// Endpoint para actualizar un usuario por ID
$router->addRoute('users/:id', 'PUT', 'UsersApiController', 'updateUser');

// Ejecutar la ruta solicitada
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
