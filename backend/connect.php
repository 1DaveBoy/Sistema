<?php
include_once("db.php");
	$Notrab = $_POST['Notrab'];
	$Nombre = $_POST['Nombre'];
	$Cargo = $_POST['Cargo'];
	$RFC = $_POST['RFC'];
	$Plaza = $_POST['Plaza'];
	$Curp = $_POST['Curp'];
    $Centro = $_POST['Centro'];
    $No_depto = $_POST['No_depto'];
    $Area = $_POST['Area'];


$conexion=coon();
    $sql="INSERT INTO Trabajadores(Notrab,Nombre,Cargo,RFC,Plaza,Curp,Centro,No_depto,Area) VALUES 
    ('$Notrab','$Nombre', '$Cargo', '$RFC ','$Plaza', '$Curp','$Centro' ,'$No_depto','$Area')";
    $result=mysqli_query($conexion,$sql)or trigger_error("Querry Failed SQL- Error".mysqli_error($conexion), E_USER_ERROR);
    header("Location: index.html");
    echo "$sql";