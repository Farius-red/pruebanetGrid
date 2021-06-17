<?php

require_once "clases/conexion/Conexion.php";

$conexion = new Conexion;

$query = "select * from usuarios";

print_r($conexion->obtenerDatos($query));