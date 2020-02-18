<?php
	include 'conexao_bd.php';
	session_start();

	if(isset($_POST['btn_editar'])){
		$id = $mysqli -> escape_string($_POST['id']);
		$nome = $mysqli -> escape_string($_POST['nome']);
		$sobrenome = $mysqli -> escape_string($_POST['sobrenome']);
		$email = $mysqli -> escape_string($_POST['email']);
		$idade = $mysqli -> escape_string($_POST['idade']);

		$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', idade = '$idade', email = '$email' WHERE id = '$id';";

		if(!$mysqli -> query($sql)){
			$_SESSION['mensagem'] = "Erro ao atualizar!";
			header('Location: ../../index.php');
		}else{
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
			header('Location: ../../index.php');
		}
	}
?>