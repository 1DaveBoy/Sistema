<?php
function connn(){

    $servidor = "localhost";
    $usuario = "root";
    $password = "root";
    $db = "SistemaITP";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    return $conexion;
    

}
?>