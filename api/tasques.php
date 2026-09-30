<?php
require '../config/dbOpen.php';

header('Content-Type: application/json');

switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        $result = $db->query("SELECT * FROM tareas ORDER BY id");
            $items = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $items[] = $row;
            }
            echo json_encode($items);
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        // ... consulta INSERT
        break;

    case 'DELETE':
        // ... consulta DELETE
        break;
}