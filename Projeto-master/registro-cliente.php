<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de Cliente</title>
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
    
    <header>
      <div class="center">
        <h1>Cadastro Cliente</h1>
        <a href="index.php" target="_blank" class="btn btn-light">Inicio</a>
      </div>
    </header>
    <section id="registroCliente">
        <div class="center">
          <?php require_once('controller/registroCliente.php');?>
        </div>
    </section>
  </body>
</html>