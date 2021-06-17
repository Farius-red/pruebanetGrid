<?php

require_once 'clases/Auth.php';
require_once 'clases/Respuestas.php';

$_auth = new Auth;
$_respuestas = new Respuestas;


if ($_SERVER['REQUEST_METHOD'] ==  "POST") {

    $postBody  = file_get_contents("php://input");
    $datosArray = $_auth->login($postBody);
    print_r(json_encode($datosArray));
} else {
    echo "metodo no permitido";
}