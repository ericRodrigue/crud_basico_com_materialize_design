<?php
	include 'assets/php/conexao_bd.php';
	include 'includes/header.php';

	if(isset($_GET['id'])){
		$id = $mysqli -> escape_string($_GET['id']);

		$sql = "SELECT * FROM clientes WHERE id = $id";
		$sql_exec = $mysqli -> query($sql) or die($mysqli -> error);
		$dados = $sql_exec -> fetch_assoc();
	}
?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			<center><h3 class="ligth">Adicionar novo cliente</h3></center>
			<form action="assets/php/atualizar.php" method="POST">
				<div class="input-field col s12">
					<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>" required>
					<label for="sobrenome">Sobrenome</label>
				</div>
				<div class="input-field col s12">
					<input type="email" name="email" id="sobrenemailome" value="<?php echo $dados['email']; ?>" required>
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input type="number" name="idade" id="idade" value="<?php echo $dados['idade']; ?>" required>
					<label for="idade">Idade</label>
				</div>
				<button type="submit" name="btn_editar" class="btn">Atualizar cliente</button>
				<a href="index.php" class="btn blue">Voltar a lista</a>
			</form>
		</div> 	
	</div>
<?php
	include 'includes/footer.php';
?>