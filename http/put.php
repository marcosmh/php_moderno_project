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


if($_SERVER["REQUEST_METHOD"] == 'PUT') {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    extract( (array) $data );
    
    if($data != null && isset($id) && isset($name)) {
        $index = get($id, $arr);
        
        if($index >= 0) {
            $arr[$index]["name"] = $name;
            http_response_code(200);
            echo json_encode([
               "message" => "Datos actualizados en servidor",
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
    echo json_encode(['error' => 'La solicitud no es del tipo PUT']);
}


function get(int $id, array $arr) {
    
    for( $i=0; $i < count($arr ); $i++) {
        if($arr[$i]['id'] === $id) {
            return $id;
        }
    }
    
    return -1;
}