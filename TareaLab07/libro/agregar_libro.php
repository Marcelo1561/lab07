<?php

include('ConexionBD.php');

//obtenemos los valores del formulario
$año = $_POST['año'];
$autor =$_POST['autor'];
$titulo =$_POST['titulo'];
$URLubi =$_POST['URLubi'];
$especialidad =$_POST['especialidad'];
$editorial =$_POST['editorial'];

//abrimos la conexion de la base de datos

$conexion = Conectar();

//consultar a la base de datos
$query = $conexion->prepare("INSERT INTO libro (año, autor, titulo, URLubi, especialidad, editorial) VALUES (?, ?, ?, ?, ?,?)");
$query ->bind_param('ssssss', $año, $autor, $titulo,$URLubi,$especialidad, $editorial);
$msg = '';
if ($query ->execute()){
    header("location: index.php");
    $msg = 'libro registrado';
}
else{
    $msg= 'No se pudo registrar al libro';
}
//cerramos la conexion a la base de datos
Desconectar($conexion)
?>

