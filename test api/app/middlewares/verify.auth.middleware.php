<?php

function verifyAuthMiddleware($res) {
    if (!$res->user) {
        header('Content-Type: application/json');
        http_response_code(403); // Forbidden
        echo json_encode(['status' => 'error', 'message' => 'Acceso denegado']);
        exit;
    }
}
