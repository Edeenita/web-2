<?php

require_once './app/models/reservations.model.php';
require_once './app/controllers/ApiController.php';

class ReservationsApiController extends ApiController {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->model = new ReservationsModel();
    }

    // Obtener todas las reservas
    public function showReservations() {
        $reservations = $this->model->showReservations();
        $this->view->response($reservations); 
    }

    // Obtener reservas por Id
    public function getReservationById($request) {
        $id_reserva = $request->params->id;
        $reservation = $this->model->getReservationById($id_reserva);
        if ($reservation) {
            $this->view->response($reservation);
        } else {
            return $this->view->response(['error' => 'Reserva no encontrada.'], 404); 
        }
    }
    
    // Agregar nueva reserva
public function addReservation() {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!$input || empty($input['id_habitacion']) || empty($input['nombre_cliente']) || empty($input['Check_in']) || empty($input['Check_out'])) {
        $this->view->response(['error' => 'Faltan datos'], 400); 
        return;
    }

    if (strtotime($input['Check_out']) < strtotime($input['Check_in'])) {
        $this->view->response(['error' => 'La fecha de Check-out debe ser posterior o igual a la de Check-in'], 400);
        return;
    }

    $id_usuario = $_SESSION['id_user'] ?? null;
    if (!$id_usuario) {
        $this->view->response(['error' => 'El usuario no está logueado.'], 401);
        return;
    }

    $reservationData = [
        'id_habitacion' => $input['id_habitacion'],
        'id_usuario' => $id_usuario,
        'nombre_cliente' => $input['nombre_cliente'],
        'Check_in' => $input['Check_in'],
        'Check_out' => $input['Check_out']
    ];

    if ($this->model->addReservation($reservationData)) {
        $this->view->response(['success' => 'Reserva agregada exitosamente'], 201); 
    } else {
        $this->view->response(['error' => 'Error al agregar la reserva'], 500); 
    }
}


    // Eliminar reserva
    public function deleteReservation() {
        $data = $this->getData();
        
        if (empty($data['id_reserva'])) {
            return $this->view->response(['error' => 'ID de reserva no especificado.'], 400);
        }

        $id_reserva = $data['id_reserva'];
        if ($this->model->deleteReservation($id_reserva)) {
            $this->view->response(['status' => 'success', 'message' => 'Reserva eliminada exitosamente']);
        } else {
            return $this->view->response(['error' => 'Error al eliminar la reserva.'], 500);
        }
    }

    // Editar reserva
    public function editReservation($id_reserva) {
        $reservation = $this->model->getReservationById($id_reserva);
        if ($reservation) {
            $this->view->response($reservation);
        } else {
            return $this->view->response(['error' => 'Reserva no encontrada.'], 404);
        }
    }

    // Actualizar reserva
    public function updateReservation() {
        $data = $this->getData();

        if (empty($data['id_reserva'])) {
            return $this->view->response(['error' => 'Falta el ID de la reserva.'], 400);
        }

        $id_reserva = $data['id_reserva'];
        $id_habitacion = $data['id_habitacion'] ?? null;
        $nombre_cliente = $data['nombre_cliente'] ?? null;
        $check_in = $data['Check_in'] ?? null;
        $check_out = $data['Check_out'] ?? null;

        if ($id_habitacion && $nombre_cliente && $check_in && $check_out) {
            if ($this->model->updateReservation($id_reserva, $id_habitacion, $nombre_cliente, $check_in, $check_out)) {
                $this->view->response(['status' => 'success', 'message' => 'Reserva actualizada exitosamente']);
            } else {
                return $this->view->response(['error' => 'Error al editar reserva.'], 500);
            }
        } else {
            return $this->view->response(['error' => 'Completar todos los campos.'], 400);
        }
    }
}
