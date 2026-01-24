<?php

header('Content-Type: application/json');

$arr = [
  [
      "id" => 1,
      "name" => "Anakin"
  ],
  [
      "id" => 2,
      "name" => "Luke"
  ]
];


if($_SERVER["REQUEST_METHOD"] == 'DELETE') {
    
    extract($_GET);
    
    if(isset($id)) {
        $index = get($id, $arr);
        
        if($index >= 0) {
            unset($arr[$index]);
            $arr = array_values($arr);
            http_response_code(200);
            echo json_encode([
               "message" => "Datos eliminados en el servidor",
                "data" => json_encode($arr)
            ]);
            
        } else {
            http_response_code(404);
         echo json_encode(['error' => 'No existe el identificador: '.$id]);
        }
        
        
    } else {
         http_response_code(400);
         echo json_encode(['error' => 'Informacion erronea']);
    }
    
    
} else {
    http_response_code(405);
    echo json_encode(['error' => 'La solicitud no es del tipo DELETE']);
}


function get(int $id, array $arr) {
    for( $i=0; $i < count($arr ); $i++) {
        if($arr[$i]['id'] === $id) {
            return $id;
        }
    }
    return -1;
}