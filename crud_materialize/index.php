<?php
	include 'assets/php/conexao_bd.php';
	include 'includes/header.php';
	include 'includes/mensagem.php';
?>
	</script>
	<div class="row">
		<div class="col s12 m6 push-m3">
			<center><h3 class="ligth">Clientes</h3></center>
			<table class="striped">
				<thead>
					<tr>
						<th>Nome:</th>
						<th>Sobrenome:</th>
						<th>Email:</th>
						<th>Idade:</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM clientes";
						$sql_exec = $mysqli -> query($sql) or die($mysqli -> error);
						$dados = $sql_exec -> fetch_assoc();
						if($sql_exec -> num_rows > 0){
							do{
					?>
					<tr>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['sobrenome']; ?></td>
						<td><?php echo $dados['email']; ?></td>
						<td><?php echo $dados['idade']; ?></td>
						<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
						<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						<div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					    	<h4>Atenção!</h4>
					    	<p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">
					    	<form action="assets/php/apagar.php" method="POST">
					    		<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					    		<button type="submit" name="btn_deletar" class="btn red">Sim</button>
					    		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
					    	</form>
					    </div>
					</tr>
				  </div>
					<?php
							}while($dados = $sql_exec -> fetch_assoc());
						}else{	
					?>
					<td colspan="4"><center><h5>Não há clientes cadastrados!</h5></center></td>
					<?php
						}
					?>
				</tbody>
			</table>
			<br>
			<a href="adicionar.php" class="btn">Adicionar cliente</a>
		</div> 	
	</div>
<?php
	include 'includes/footer.php';
?>