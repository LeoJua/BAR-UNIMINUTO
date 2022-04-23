
<?php

include 'class.usuario.php';

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$doc= $_POST['documento'];
$pass = $_POST['password'];
$fech = $_POST['fecha'];
$gen = $_POST['genero'];
$tel = $_POST['telefono'];

$usuario = new Usuario($nom, $ape, $doc, $pass, $fech, $gen, $tel,"",2);

$usuario->insertar();
?>
