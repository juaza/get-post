<?php
/*$nombre = $_GET["nombre"];
$email = $_GET["email"];
$telefono = $_GET["telefono"];
$web = $_GET["web"];
$asunto = $_GET["asunto"];
$mensaje = $_GET["mensaje"];*/


$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$web = $_POST["web"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

echo $nombre."".$email."".$telefono."".$web."".$asunto.""$mensaje;

?>