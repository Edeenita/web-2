<?php 

require_once './app/models/rooms.model.php';
require_once './app/controllers/ApiController.php';

class RoomsApiController extends ApiController {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->model = new RoomsModel();
    }

    // Obtener todas las habitaciones con ordenamientos
    public function getRooms() {
        $orderBy = isset($_GET['order_by']) ? $_GET['order_by'] : 'id_habitacion'; // Por defecto
        $direction = isset($_GET['direction']) && strtoupper($_GET['direction']) === 'DESC' ? 'DESC' : 'ASC'; 

        // Validar si el campo de ordenamiento es válido
        $validFyelds = ['id_habitacion', 'Nombre', 'Tipo', 'Capacidad', 'Precio'];
        if (!in_array($orderBy, $validFyelds)) {
            $this->view->response(['error' => 'Campo de ordenamiento no válido.'], 400); 
            return;
        }

        $rooms = $this->model->getRooms($orderBy, $direction);
        if ($rooms) {
            $this->view->response($rooms, 200); 
        } else {
            $this->view->response(['error' => 'No se han encontrado habitaciones.'], 404); 
        }
    }


    // Obtener habitación por ID
    public function getRoomById($request) {
        $id_habitacion = $request->params->id;
        if (!is_numeric($id_habitacion) || $id_habitacion <= 0) {
            $this->view->response(['error' => 'ID inválido'], 400); // Bad Request
            return;
        }
        $room = $this->model->getRoomById($id_habitacion);
        if ($room) {
            $this->view->response($room, 200);
        } else {
            $this->view->response(['error' => 'Habitación no encontrada'], 404);
        }
    }

    // Agregar nueva habitación
    public function addRoom() {
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input || empty($input['nombre']) || empty($input['tipo']) || empty($input['capacidad']) || empty($input['precio'])) {
            $this->view->response(['error' => 'Faltan datos'], 400); 
            return;
        }

        $roomData = [
            'nombre' => $input['nombre'],
            'tipo' => $input['tipo'],
            'capacidad' => $input['capacidad'],
            'precio' => $input['precio'],
            'foto_habitacion' => isset($input['foto_habitacion']) ? $input['foto_habitacion'] : null
        ];

        if ($this->model->addRoom($roomData)) {
            $this->view->response(['success' => 'Habitación agregada'], 201); 
        } else {
            $this->view->response(['error' => 'Error al agregar la habitación'], 500); 
        }
    }

    // Eliminar habitación
    public function deleteRoom($id_habitacion) {
        if ($this->model->deleteRoom($id_habitacion)) {
            $this->view->response(['success' => 'Habitación eliminada']);
        } else {
            $this->view->response(['error' => 'Habitación no encontrada'], 404); 
        }
    }

    // Actualizar habitación
    public function updateRoom($request) {
        $id_habitacion = $request->params->id;
        $input = json_decode(file_get_contents('php://input'), true);
        if (!$input || empty($input['Nombre']) || empty($input['Tipo']) || empty($input['Capacidad']) || empty($input['Precio'])) {
            $this->view->response(['error' => 'Faltan datos'], 400);
            return;
        }
    
        $roomData = [
            'Nombre' => $input['Nombre'],
            'Tipo' => $input['Tipo'],
            'Capacidad' => $input['Capacidad'],
            'Precio' => $input['Precio'],
            'foto_habitacion' => isset($input['foto_habitacion']) ? $input['foto_habitacion'] : null
        ];
    
        // Convertir id_habitacion a entero antes de pasarlo al modelo
        if ($this->model->updateRoom((int)$id_habitacion, $roomData)) {
            $this->view->response(['success' => 'Habitación actualizada'], 200);
        } else {
            $this->view->response(['error' => 'Habitación no encontrada'], 404); 
        }
    }
    
    
}
