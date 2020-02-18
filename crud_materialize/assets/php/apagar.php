<?php
	include 'conexao_bd.php';
	session_start();

	if(isset($_POST['btn_deletar'])){
		$id = $mysqli -> escape_string($_POST['id']);

		$sql = "DELETE FROM clientes WHERE id = $id";
		$sql_exec = $mysqli -> query($sql) or die($mysqli -> error);

		$_SESSION['mensagem'] = "Apagado com sucesso!";
		header('Location: ../../index.php');
	}
?>