<?php
include("ConexionBD.php");

$conexion = Conectar();

$B = $_REQUEST['id'];
$sql = "DELETE FROM libro WHERE libro_id='$B'";
$query = mysqli_query($conexion,$sql);

if ($query){
    header("location: index.php");
}
?>