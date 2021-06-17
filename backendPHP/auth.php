<?php

require_once 'clases/Auth.php';
require_once 'clases/Respuestas.php';

$_auth = new Auth;
$_respuestas = new Respuestas;


if ($_SERVER['REQUEST_METHOD'] ==  "POST") {

    $postBody  = file_get_contents("php://input");

    $datosArray = $_auth->login($postBody);

    // respuesta 
    header('Content Type: application/json');
    if (isset($datosArray["result"]["error_id"])) {
        $reponseCode = $datosArray["result"]["error_id"];
        http_response_code($reponseCode);
    } else {
        echo json_encode($datosArray);
    }

    echo (json_encode($datosArray));
} else {

    header('Content-Type: application/json');
    $datosArray = $_respuestas->error_405();
    echo  json_encode($datosArray);
}