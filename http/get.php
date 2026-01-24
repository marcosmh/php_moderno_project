<?php

if($_SERVER["REQUEST_METHOD"] == 'GET') {
    echo json_encode($_GET);
    echo $_GET["name"];
} else {
    echo json_encode(['error' => 'La solicitud no es del tipo GET']);
}