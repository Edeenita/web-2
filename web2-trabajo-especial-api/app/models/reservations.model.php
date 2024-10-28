<?php

require_once './app/models/hostel.model.php';

class ReservationsModel extends HostelModel {
    // Obtener todas las reservas
    public function showReservations() {
        $query = $this->db->prepare("SELECT * FROM reservas");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }

    // Obtener reserva por ID
    public function getReservationById($id_reserva) {
        $query = $this->db->prepare('SELECT * FROM reservas WHERE id_reserva = :id');
        $query->bindParam(':id', $id_reserva);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ); 
    }

    // Agregar nueva reserva
    public function addReservation($reservationData) {
        $query = $this->db->prepare("INSERT INTO reservas (id_habitacion, id_usuario, Check_in, Check_out, nombre_cliente) VALUES (?, ?, ?, ?, ?)");
        return $query->execute([$reservationData['id_habitacion'], $reservationData['id_usuario'], $reservationData['Check_in'], $reservationData['Check_out'], $reservationData['nombre_cliente']]);
    }
    

    // Eliminar reserva
    public function deleteReservation($id_reserva) {
        $query = $this->db->prepare("DELETE FROM reservas WHERE id_reserva = ?");
        return $query->execute([$id_reserva]); 
    }

    // Actualizar reserva
    public function updateReservation($id_reserva, $id_habitacion, $nombre_cliente, $check_in, $check_out) {
        $query = $this->db->prepare('UPDATE reservas SET id_habitacion = ?, nombre_cliente = ?, Check_in = ?, Check_out = ? WHERE id_reserva = ?');
        return $query->execute([$id_habitacion, $nombre_cliente, $check_in, $check_out, $id_reserva]); 
    }
}
