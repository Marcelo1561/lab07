<?php

include('ConexionBD.php');

//obtenemos los valores del formulario
$nombres = $_POST['nombres'];
$ape_paterno =$_POST['ape_paterno'];
$ape_materno =$_POST['ape_materno'];

//abrimos la conexion de la base de datos

$conexion = Conectar();

//consultar a la base de datos
$query = $conexion->prepare("INSERT INTO autor (nombres, ape_paterno, ape_materno) VALUES (?, ?, ?)");
$query ->bind_param('sss', $nombres, $ape_paterno, $ape_materno);
$msg = '';
if ($query ->execute()){
    header("location: index.php");
    $msg = 'autor registrado';
}
else{
    $msg= 'No se pudo registrar al autor';
}
//cerramos la conexion a la base de datos
Desconectar($conexion)
?>

