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

	<section id="listaLivros" class="container">
	<h1>Livros catalogados</h1>
		<table class="table">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Titulo</th>
					<td>Descricao</td>
					<td>Opções</td>
				</tr>	
			</thead>
<?php

	include 'kint/Kint.class.php';

	$user = "root";
	$pass = "";

	try{
	
		$dbh = new PDO('mysql:host=localhost;dbname=biblioteca',$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $dbh->prepare("SELECT * FROM livro");
		$stmt->execute();
?>		
<tfoot></tfoot>	
			<tbody>
<?php
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>      		 
				<tr>
	    			<td><?=$row['id']; ?></td>
	    			<td><?=$row['titulo']; ?></td>
	    			<td><?=$row['descricao']; ?></td>
	    			<td><a href="livroController.php?pg=del&codigo=<?=$row['id']; ?>">Deletar</a></td>
    			</tr>
<?php
}
 ?>
			</tbody>
		</table>
	</section>
<?php		
	}catch (PDOException $e){

		echo $e->getMessage();
		//$dbh->rollback();
		

		

	}
?>			
			

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./js/bootstrap.min.js"></script>
	</body>
	</html>