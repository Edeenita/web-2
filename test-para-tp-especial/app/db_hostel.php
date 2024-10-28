<?php

function getConnection() {
    return new PDO('mysql:host=localhost;dbname=hostel_web2;charset=utf8', 'root', '');
}

function getHabitaciones() {
    $db = getConnection();
    $query = $db->prepare('SELECT * FROM habitaciones');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function getHabitacion($id) {
    $db = getConnection();
    $query = $db->prepare('SELECT * FROM habitaciones WHERE id_habitacion = ?');
    $query->execute([$id]);
    return $query->fetch(PDO::FETCH_OBJ);
}

function insertReserva($id_habitacion, $check_in, $check_out, $nombre_cliente) {
    $db = getConnection();
    $query = $db->prepare('INSERT INTO reservas(id_habitacion, Check_in, Check_out, nombre_cliente) VALUES (?, ?, ?, ?)');
    $query->execute([$id_habitacion, $check_in, $check_out, $nombre_cliente]);
    return $db->lastInsertId();
}

function eraseReserva($id) {
    $db = getConnection();
    $query = $db->prepare('DELETE FROM reservas WHERE id_reserva = ?');
    $query->execute([$id]);
}

function updateReserva($id) {
    $db = getConnection();
    $query = $db->prepare('UPDATE reservas SET nombre_cliente = ? WHERE id_reserva = ?');
    $query->execute(['Nuevo Nombre', $id]);
}

function getReservas() {
    $db = getConnection();
    $query = $db->prepare('SELECT * FROM reservas');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}
