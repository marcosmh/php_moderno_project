<?php

require_once __DIR__ . '/autoload.php';

use app\bussines\Get;
use app\bussines\Add;
use app\bussines\Update;
use app\bussines\Delete;
use app\data\Repository;
use app\validators\Validator;
use app\exceptions\ValidationException;
use app\exceptions\DataException;


$repository = new Repository();
$validator = new Validator();

try {

    switch($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $body = json_encode(file_get_contents('php://input'),true);
            $add = $repository->Add($repository, $validator);
            $add->add($body);
            break;
        case 'PUT':
            $body = json_encode(file_get_contents('php://input'),true);
            $update = $repository->Update($repository, $validator);
            $update->update($body);
            break;
        case 'DELETE':
            $id = $_GET['id'];
            $delete = new Delete($repository);
            $delete->delete($repository);
            break;
        case 'GET':
            $get = new Get($repository);
            echo json_encode($get->get());
            break;
        default:
            http_response_code(405);
    }

} catch(ValidationException $v) {
    http_response_code(400);
    echo json_encode(['error' => $v->getMessage()]);
} catch(DataException $d) {
    http_response_code(404);
    echo json_encode(['error' => $d->getMessage()]);
} catch(\Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}