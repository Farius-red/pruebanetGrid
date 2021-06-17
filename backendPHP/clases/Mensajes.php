<?php

require_once "conexion/conexion.php";
require_once "Respuestas.php";

class Mensajes extends Conexion
{
    private $table = "mensajes";

    public function listaMensajes($pagina = 1)
    {
        $cantidad = 100;
        if ($pagina > 1) {
            $inicio = ($cantidad * ($pagina - 1)) + 1;
            $cantidad = $cantidad * $pagina;
        }
        $query = "SELECT mensajesId, usuarioId ,mensaje FROM " . $this->table . " limit $inicio,$cantidad";
        $datos = parent::obtenerDatos($query);
        return ($datos);
    }
}