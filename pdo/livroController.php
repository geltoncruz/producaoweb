<?php

	include 'kint/Kint.class.php';

	$user = "root";
	$pass = "";

	try{
	
		$dbh = new PDO('mysql:host=localhost;dbname=biblioteca',$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//d($dbh);
		$titulo = $_GET['titulo'];
		$descricao = $_GET['descricao'];
		$sql = "INSERT INTO livro (titulo,descricao) VALUES ('$titulo','$descricao')";

		$dbh->exec($sql);

		echo "Livro $titulo cadastrado com sucesso!";


	} catch (PDOException $e){

		echo $e->getMessage();

		

	}



	
 ?>