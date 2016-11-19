<?php

	include 'kint/Kint.class.php';
	include 'connection.php';

	$user = "root";
	$pass = "";

	try{

		$pg = $_GET['pg'];
		$codigo = $_GET['codigo'];

		if(isset($pg) && isset($codigo)){
			
			if($pg == 'del'){

				$query = "DELETE FROM livro where id = :id";
				$stmt = $dbh->prepare($query);
				$stmt->bindParam(':id',$codigo);
				$stmt->execute();

				echo "Deletado com sucesso<br>";
				echo "Voltar para <a href='index.php?msg=deleteConfirm'>index</a>";
			}
			
		}else{


	/*()
		$dbh = new PDO('mysql:host=localhost;dbname=biblioteca',$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//d($dbh);

	*/
		
		$titulo = $_GET['titulo'];
		$descricao = $_GET['descricao'];
		//$sql = "INSERT INTO livro (titulo,descricao) VALUES ('$titulo','$descricao')";
		
		$stmt = $dbh->prepare("INSERT INTO livro (titulo,descricao) VALUES (:titulo, :descricao)");

		//$dbh->exec($sql);
		$stmt->bindParam(':titulo', $titulo);
		$stmt->bindParam(':descricao', $descricao);

		$stmt->execute();

		echo "Voltar para <a href='index.php'>index</a>";

}
		//echo "Livro $titulo cadastrado com sucesso!";


	} catch (PDOException $e){

		echo $e->getMessage();
		$dbh->rollback();
		echo "Voltar para <a href='index.php?msg=deleteNoConfirm'>index</a>";

		

	}

 ?>