<?php

require_once './app/models/hostel.model.php';

class RoomsModel extends HostelModel {

    // Obtener todas las habitaciones
// Obtener todas las habitaciones con ordenamiento
    function getRooms($orderBy, $direction) {
        $query = $this->db->prepare("SELECT * FROM habitaciones ORDER BY $orderBy $direction");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
}


    // Obtener habitaciones por ID
    function getRoomById($id_habitacion) {
        $query = $this->db->prepare('SELECT * FROM habitaciones WHERE id_habitacion = :id');
        $query->bindParam(':id', $id_habitacion);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    // Agregar habitación
    function addRoom($roomData) {
        $query = $this->db->prepare("INSERT INTO habitaciones (Nombre, Tipo, Capacidad, Precio, foto_habitacion) VALUES (?, ?, ?, ?, ?)");
        return $query->execute([$roomData['nombre'], $roomData['tipo'], $roomData['capacidad'], $roomData['precio'], $roomData['foto_habitacion']]);
    }

    // Eliminar habitación
    function deleteRoom($roomId) {
        $query = "DELETE FROM habitaciones WHERE id_habitacion = :id_habitacion";
        $query = $this->db->prepare($query);
        $query->bindParam(':id_habitacion', $roomId, PDO::PARAM_INT);
        return $query->execute();
    }

    // Actualizar habitación
    public function updateRoom($id_habitacion, $roomData) {
        $query = $this->db->prepare("UPDATE habitaciones SET Nombre = :nombre, Tipo = :tipo, Capacidad = :capacidad, Precio = :precio, foto_habitacion = :foto_habitacion WHERE id_habitacion = :id");
    
        $query->bindValue(':nombre', $roomData['Nombre']);
        $query->bindValue(':tipo', $roomData['Tipo']);
        $query->bindValue(':capacidad', $roomData['Capacidad']);
        $query->bindValue(':precio', $roomData['Precio']);
        $query->bindValue(':foto_habitacion', $roomData['foto_habitacion']);
        $query->bindValue(':id', $id_habitacion, PDO::PARAM_INT);
    
        return $query->execute();
    }
    
    // Obtener categorías
    function showListCategory() {
        $query = $this->db->prepare("SELECT DISTINCT Tipo FROM habitaciones");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener habitaciones por tipo
    function getHabitacionesPorTipo($tipo) {
        $query = $this->db->prepare("SELECT * FROM habitaciones WHERE Tipo = ?");
        $query->execute([$tipo]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
