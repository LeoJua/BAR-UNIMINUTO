<?php
  //conectamos con el servidor
	 $mysql=new MySQLi("localhost:33065","root","","technology_dunk");
	 if ($mysql->connect_error)
	 die("Problemas con la conexión a la base de datos");
?>
