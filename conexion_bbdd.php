<?php
$cadena_conexion = 'mysql:dbname=grupo_5;host=132.226.219.27';
$usuario = 'grupo_5';
$clave = 'afa_8175';
$bd = new PDO($cadena_conexion, $usuario, $clave);

// $sql = "SELECT * FROM peliculas";
// $peliculas = $bd->query($sql);