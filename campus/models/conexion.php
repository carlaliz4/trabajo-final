<?php

$host = 'localhost';
$bd = 'colegio';
$user = 'root';
$pass = '';

$con = mysqli_connect($host, $user, $pass, $bd);

if (!$con) {
    echo 'Error al conectarse a la base de datos';
}

?>