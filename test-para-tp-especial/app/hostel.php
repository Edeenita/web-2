<?php
require_once 'db_hostel.php'; // Asegúrate de que este sea el archivo correcto

function showHabitaciones() {
    require './templates/header.php';
    require './templates/form_reserva.php'; // Incluye el formulario de reserva

    $habitaciones = getHabitaciones();
    ?>

    <h2 class="my-4 text-center">Habitaciones Disponibles</h2>
    <div class="row">
        <?php foreach($habitaciones as $habitacion) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $habitacion->Nombre ?></h5>
                        <p class="card-text">
                            <strong>Tipo:</strong> <?= $habitacion->Tipo ?><br>
                            <strong>Capacidad:</strong> <?= $habitacion->Capacidad ?><br>
                            <strong>Precio:</strong> $<?= $habitacion->Precio ?>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-primary" href="reservar/<?= $habitacion->id_habitacion ?>">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php
    require './templates/footer.php';
}

function addReserva() {
    if (empty($_POST['id_habitacion']) || empty($_POST['check_in']) || empty($_POST['check_out']) || empty($_POST['nombre_cliente'])) {
        echo "<h1>Error: faltan completar campos obligatorios</h1>";
        return;
    }

    $id_habitacion = $_POST['id_habitacion'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $nombre_cliente = $_POST['nombre_cliente'];

    insertReserva($id_habitacion, $check_in, $check_out, $nombre_cliente);
    header('Location: ' . BASE_URL);
}

function getReserva($id) {
    $db = getConnection();
    $query = $db->prepare('SELECT * FROM reservas WHERE id_reserva = ?');
    $query->execute([$id]);
    return $query->fetch(PDO::FETCH_OBJ);
}

function deleteReserva($id) {
    $reserva = getReserva($id);
    if (!$reserva) {
        echo "<h1>No existe la reserva con el id=$id</h1>";
        return;
    }
    eraseReserva($id);
    header('Location: ' . BASE_URL);
}

function finishReserva($id) {
    $reserva = getReserva($id);
    if (!$reserva) {
        echo "<h1>No existe la reserva con el id=$id</h1>";
        return;
    }
    // Aquí puedes implementar la lógica de actualización si es necesario
    header('Location: ' . BASE_URL);
}

function showReservas() {
    require './templates/header.php';

    $reservas = getReservas();
    ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Reservaciones</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Reserva</th>
                    <th>Nombre Cliente</th>
                    <th>ID Habitación</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($reservas as $reserva) { ?>
                <tr>
                    <td><?= $reserva->id_reserva ?></td>
                    <td><?= htmlspecialchars($reserva->nombre_cliente) ?></td>
                    <td><?= $reserva->id_habitacion ?></td>
                    <td><?= htmlspecialchars($reserva->Check_in) ?></td>
                    <td><?= htmlspecialchars($reserva->Check_out) ?></td>
                    <td>
                        <a href="finalizar/<?= $reserva->id_reserva ?>" class="btn btn-outline-success">Finalizar</a>
                        <a href="eliminar/<?= $reserva->id_reserva ?>" class="btn btn-outline-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
    require './templates/footer.php';
}

