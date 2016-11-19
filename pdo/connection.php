<?php
	try{

		$user = "root";
		$pass = "";
		$dbh = new PDO('mysql:host=localhost;dbname=biblioteca',$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){

		$e->getMessage();
		$dbh = null; 

	}
 ?>