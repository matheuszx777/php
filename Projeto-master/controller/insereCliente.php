<?php
	if(array_key_exists("submit", $_POST)) {
		include 'conexao.php';

		$nome      = $_POST['name'];
		$usuario   = $_POST['user'];
		$senha     = $_POST['password'];
		$dataNasc  = $_POST['date'];
		$endereco  = $_POST['adress'];
		$genero    = $_POST['gender'];
		$cpf       = $_POST['cpf'];
		$rg        = $_POST['rg'];
		$telefone  = $_POST['telefone'];
		$celular   = $_POST['celular'];

		$sql = "INSERT INTO cliente (nome, login, senha, dtnasc, endereco, sexo, cpf, rg, telefone, celular) VALUES";
		$sql .="('$nome','$usuario','$senha','$dataNasc','$endereco', '$genero', '$cpf', '$rg', '$telefone', '$celular')";

		

		if($mysqli->query($sql) == TRUE) {
			echo "<h1 > Cliente inserido com sucesso !!!</h1>";
		} else {
			echo "<h2 > Erro ao inserir o Cliente!!!</h2>";

		}

		echo '<a href="index.php" class="btn btn-light" style="font-size:24px; border:2px solid #000; border-radius:10px;color:#000; padding:5px; margin-right:15px;">Inicio</a>';

		echo '<form style="display:none;" role="form" method="POST">';

		$mysqli->close();
	}
?>