<?php

$servername = 'host.docker.internal';
$username = "root";
$password = "root";
$dbname = 'santaelenap';
$port = 3306;
//    set the PDO error mode to exception
$conexion = mysqli_connect($servername, $username, $password, $dbname, $port);
// $conexion = new mysqli($servername, $username, $password, $dbname);
if (!$conexion) {
     die("Error de conexión: " . mysqli_connect_errno() . mysqli_connect_error());
}
