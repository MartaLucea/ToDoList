<?php
$ruta = $_GET['ruta'] ?? '';

switch ($ruta) {
    case 'productos':
        require 'productos.php';
        break;
    case 'usuarios':
        require 'usuarios.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(["error" => "Ruta no trobada"]);
        break;
}