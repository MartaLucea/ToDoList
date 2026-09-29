<?php
$dbPath = __DIR__ . '/../bbdd.db';
$db = new SQLite3($dbPath, SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);

?>