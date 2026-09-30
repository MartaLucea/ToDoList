<?php
$ruta = $_GET['ruta'] ?? '';

switch ($ruta) {
    case 'tasques':
        require 'tasques.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(["error" => "Ruta no trobada"]);
        break;
}