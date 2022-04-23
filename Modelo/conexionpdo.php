<?php
$usuario='root';
$contraseña='';
$host='localhost:33065';
$base='technology_dunk';

try {
		$conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	}
	catch (PDOException $e)
	{
		print "!Error¡: " . $e->getMessage() . "<br/>";
		die();
	}
?>
