<?php

require_once 'clases/Respuestas.php';
require_once 'clases/Mensajes.php';

$_respuestas = new Respuestas;
$_mensajes = new Mensajes;



if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET["page"])) {
        $pagina = $_GET["page"];
        $listaUsuarios = $_mensajes->listaMensajes($pagina);
        header("Content-Type: application/json");
        echo json_encode($listaUsuarios);
        http_response_code(200);
    }
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") {
} else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
}