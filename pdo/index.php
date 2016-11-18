<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biblioteca</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <section id="formulario"  class="container">
    	<form class="form-horizontal" action="livroController.php" method="get">
    	<h1>Cadastrar Livros</h1>
  <div class="form-group">
    <label for="titulo" class="col-sm-2 control-label">Titulo do livros</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do Livro">
    </div>
  </div>
  <div class="form-group">
    <label for="descricao" class="col-sm-2 control-label">Descrição</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>