<?php

function sessionAuthMiddleware($res) {
    session_start();
    if (isset($_SESSION['id_user'])) {
        $res->user = new stdClass();
        $res->user->id = $_SESSION['id_user'];
        $res->user->email = $_SESSION['email'];
        return;
    } else {
        header('Content-Type: application/json');
        http_response_code(401); // Unauthorized
        echo json_encode(['status' => 'error', 'message' => 'No autenticado']);
        exit;
    }
}
