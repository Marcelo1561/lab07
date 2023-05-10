<?php
include("ConexionBD.php");

$conexion = Conectar();

$A = $_REQUEST['id'];
$sql = "DELETE FROM autor WHERE autor_id='$A'";
$query = mysqli_query($conexion,$sql);

if ($query){
    header("location: index.php");
}
?>