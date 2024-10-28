<?php

require_once './app/models/hostel.model.php';

class UserAuth_model extends HostelModel {

    // Método para obtener un usuario a partir del email
    public function getUserFromEmail($email) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
        $query->bindParam(':email', $email);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    // Método para obtener todos los usuarios
    public function getAllUsers($orderBy = 'id_usuario', $direction = 'ASC') {
        // Validar los campos permitidos para evitar inyecciones SQL
        $validFyelds = ['id_usuario', 'email']; // Agrega otros campos que quieras permitir
        if (!in_array($orderBy, $validFyelds)) {
            $orderBy = 'id_usuario'; // Valor por defecto
        }
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $query = $this->db->prepare("SELECT * FROM usuarios ORDER BY $orderBy $direction");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    

    // Método para obtener un usuario por su ID
    public function getUserById($id) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    // Método para crear un nuevo usuario
    public function addUser($email, $password) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $query->execute([$email]);
        if ($query->fetch(PDO::FETCH_OBJ)) {
            return false; // El email ya está en uso
        }
    
        // Hashea la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Insertar nuevo usuario
        $query = $this->db->prepare("INSERT INTO usuarios (email, password) VALUES (?, ?)");
        return $query->execute([$email, $hashed_password]);
    }
    

    // Método para eliminar un usuario por su ID
    public function deleteUser($id) {
        $query = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario = :id");
        $query->bindParam(':id', $id);
        return $query->execute(); // Retorna true si se eliminó correctamente
    }
    // Método para editar un usuario

    public function updateUser($id, $email, $hashed_password) {
        $query = $this->db->prepare("UPDATE usuarios SET email = :email, password = :password WHERE id_usuario = :id");

        $query->bindValue(':email', $email);
        $query->bindValue(':password', $hashed_password);
        $query->bindValue(':id', $id, PDO::PARAM_INT); 

        return $query->execute(); 
    }

}
