<?php
//HACEMOS LA CONEXION A LA BASE DE DATOS
$cadena_conexion = 'mysql:dbname=grupo_5;host=132.226.219.27';
$usuario = 'grupo_5';
$clave = 'afa_8175';
$bd = new PDO($cadena_conexion, $usuario, $clave);

//SELECCIONAMOS TODOS LOS DATOS DE LA TABLA
$sql = "SELECT * FROM users";
$users = $bd->query($sql);