<?php
	include 'includes/header.php';
?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			<center><h3 class="ligth">Adicionar novo cliente</h3></center>
			<form action="assets/php/cadastrar.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" required>
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="sobrenome" id="sobrenome" required>
					<label for="sobrenome">Sobrenome</label>
				</div>
				<div class="input-field col s12">
					<input type="email" name="email" id="sobrenemailome" required>
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input type="number" name="idade" id="idade" required>
					<label for="idade">Idade</label>
				</div>
				<button type="submit" name="btn_cadastrar" class="btn">Cadastrar cliente</button>
				<a href="index.php" class="btn blue">Lista de clientes</a>
			</form>
		</div> 	
	</div>
<?php
	include 'includes/footer.php';
?>