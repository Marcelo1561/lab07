<?php
function Conectar(){
    $xc = mysqli_connect("localhost","root","","autor");
    return $xc;
    die();
}

function Desconectar($xc){
    mysqli_close($xc);
}
?>