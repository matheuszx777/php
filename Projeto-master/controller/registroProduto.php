<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de Produto</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
  </head>

  <body>
    <form role="form" method="POST" action="controller/insereProduto.php">
      <div>
          <label for="inputCategoria" class="col-sm-2 col-form-label">Categoria</label>
          <div class="col-sm-10">
            <input class="form-control" list="categorias" name="categoria" id="categoria">
            <datalist id="categorias">
              <?php 
                include 'conexao.php';

                $sqlInstruction = "SELECT `DESCRICAO` FROM `categoria`";
                $response = $mysqli->query($sqlInstruction);
                $response = mysqli_fetch_all($response);

                foreach ($response as $categoria) {
                  echo '<option> '. $categoria[0]. '</option>';
                }
              ?>
            </datalist>
          </div>
      </div>
      <div>
          <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
          <div class="col-sm-10">
            <input class="form-control" list="marcas" name="marca" id="marca">
            <datalist id="marcas">
              <?php 
                include 'conexao.php';

                $sqlInstruction = "SELECT `DESCRICAO` FROM `marca`";
                $response = $mysqli->query($sqlInstruction);
                $response = mysqli_fetch_all($response);

                foreach ($response as $marca) {
                  echo '<option> '. $marca[0]. '</option>';
                }
              ?>
            </datalist>
          </div>
      </div>
      <div>
          <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="nomeProduto" placeholder="Coca-Cola" required>
          </div>
      </div>
      <div>
          <label for="inputDescricao" class="col-sm-2 col-form-label">Descrição</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="descricaoProduto" placeholder="Refrigerante" required>
          </div>
      </div>
      <div>
          <label for="inputEstoque" class="col-sm-2 col-form-label">Estoque</label>
          <div class="col-sm-10">
              <input type="number" class="form-control" name="estoqueProduto" placeholder="999" required>
          </div>
      </div>
      <div>
          <label for="inputPreco" class="col-sm-2 col-form-label">Preço</label>
          <div class="col-sm-10">
              <input type="number" min="1" step="any" class="form-control" name="precoProduto" placeholder="R$20.81" required>
          </div>
      </div>
      <div>
          <div class="col-sm-10" style="display: flex; justify-content: center; margin-top: 15px;">
              <input type="submit" value="Registrar-se" name="submit" class="btn btn-primary"/>
          </div>
      </div>
    </form>
  </body>
</html>