<?php
//Se selecciona la clase que se necesita 
require('usuario.class.php');

session_start();

$identificador = "";
$usuario = "";

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['usuario'] == "CheGuebara200"){
    $identificador = "1";
}else if($_SESSION['usuario'] == "PaolitaFresa254"){
    $identificador = "2";
}else if($_SESSION['usuario'] == "MarFigue145"){
    $identificador = "3";
}
echo "Bienvenido " . $_SESSION['usuario'] . "a su aplicacion de eventos importantes";

?>