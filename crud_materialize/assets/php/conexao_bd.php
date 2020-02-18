<?php
	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$base = "crud_basico";

	$mysqli = new mysqli($local, $usuario, $senha, $base);
	$mysqli -> set_charset("utf8");
	
	if($mysqli -> connect_errno)
		echo "<script> window.alert('Erro na conexão!'); </script>";
?>