<?php
	if(array_key_exists("submit", $_POST)) {
		include 'conexao.php';

		$marca = $_POST['marca'];
        $categoria = $_POST['categoria'];
        $nomeProduto = $_POST['nomeProduto'];
        $descricaoProduto = $_POST['descricaoProduto'];
        $estoqueProduto = $_POST['estoqueProduto'];
        $precoProduto = $_POST['precoProduto'];

        $marcas = $mysqli->query("SELECT `DESCRICAO`, IDMARCA FROM `marca`");
        $categorias = $mysqli->query("SELECT `DESCRICAO`, `IDCATEGORIA` FROM `categoria`");

        $marcas = mysqli_fetch_all($marcas);
        $categorias = mysqli_fetch_all($categorias);

        $marcaExistente = false;
        $categoriaExistente = false;

        foreach($categorias as $categoriaResponse) {
            if($categoria == $categoriaResponse[0]) {
                $categoriaExistente = true;
                $idCategoria = $categoriaResponse[1];
            }
        }

        foreach($marcas as $marcaResponse) {
            if($marca == $marcaResponse[0]) {
                $marcaExistente = true;
                $idMarca = $marcaResponse[1];
            }
        }

        if (!$categoriaExistente) {
            $mysqli->query("INSERT INTO `categoria`(`DESCRICAO`) VALUES ('$categoria')");
        }

        if (!$marcaExistente) {
            $mysqli->query("INSERT INTO `marca`(`DESCRICAO`) VALUES ('$marca')");
        }

        $marcas = $mysqli->query("SELECT `DESCRICAO`, IDMARCA FROM `marca`");
        $categorias = $mysqli->query("SELECT `DESCRICAO`, `IDCATEGORIA` FROM `categoria`");

        $marcas = mysqli_fetch_all($marcas);
        $categorias = mysqli_fetch_all($categorias);

        foreach($categorias as $categoriaResponse) {
            if($categoria == $categoriaResponse[0]) {
                $categoriaExistente = true;
                $idCategoria = $categoriaResponse[1];
            }
        }

        foreach($marcas as $marcaResponse) {
            if($marca == $marcaResponse[0]) {
                $marcaExistente = true;
                $idMarca = $marcaResponse[1];
            }
        }

        if ($mysqli->query("INSERT INTO produtos(IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$idCategoria', '$idMarca', '$nomeProduto', '$descricaoProduto', '$estoqueProduto', '$precoProduto')")) {
            echo '<h1 style="display:flex; justify-content:center; align-items:center; text-align:center;"><b>Produto '. $nomeProduto.  ' inserido com sucesso!<h1>'; 
        } else {
            echo '<h1 style="display:flex; justify-content:center; align-items:center"><b>Produto '. $nomeProduto.  ' não foi inserido com sucesso!<h1>';
        }

        echo '<a href="../index.php" class="btn btn-light"  style="font-size:24px; border:2px solid #000; border-radius:10px;color:#000; padding:5px; margin-right:15px;">Inicio</a>';


		$mysqli->close();
	}
?>

