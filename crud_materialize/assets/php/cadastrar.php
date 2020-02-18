<?php
	include 'conexao_bd.php';
	session_start();

	function limpar($valor){
		global $mysqli;

		$retorno = $mysqli -> escape_string($valor);
		$retorno = htmlspecialchars($retorno);

		return $retorno;
	}

	if(isset($_POST['btn_cadastrar'])){
		$nome = limpar($_POST['nome']);
		$sobrenome = limpar($_POST['sobrenome']);
		$email = limpar($_POST['email']);
		$idade = limpar($_POST['idade']);

		$sql = "INSERT INTO clientes (nome, sobrenome, idade, email) VALUES ('$nome', '$sobrenome', '$idade', '$email');";

		if(!$mysqli -> query($sql)){
			$_SESSION['mensagem'] = "Erro ao cadastrar!";
			header('Location: ../../index.php');
		}else{
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../../index.php');
		}
	}
?>