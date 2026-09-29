<?php
require '../config/dbOpen.php';

header('Content-Type: application/json');

switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        // ... consulta SELECT
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        // ... consulta INSERT
        break;

    case 'DELETE':
        // ... consulta DELETE
        break;
}