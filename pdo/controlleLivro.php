<?php
  include 'connection.php';
  header('Content-Type: text/html; charset=utf-8');
  $action = $_POST['action'];
  if($action == 'add'){


    try{

      echo $titulo = $_POST['titulo'];
      echo $descricao = $_POST['descricao'];

      $stmt = $dbh->prepare('INSERT INTO livros (titulo,descricao) VALUES (:titulo, :descricao)');
      // $titulo = "A casa blaca";
      // $descricao = "Sobre a casa blanca";
      $stmt->bindParam(':titulo', $titulo);
      $stmt->bindParam(':descricao', $descricao);
      $stmt->execute();

      echo "dados inseridos com sucesso ";

    }catch(Exception $e){
      echo "<br> error : ";
      echo $e->getMessage();



    }
  }else if($action == 'delete'){
    $id = $_POST['id'];
    try{
      $stmt->dbh->prepare('DELETE FROM `livros` WHERE `livros`.`id` = :id');

      $stmt->bindParam(':id',$id);
      $stmt->execute();

      echo "Dado removido com sucesso";
    }catch(Exception $e){
      echo "<br> error : ";
      echo $e->getMessage();

    }

  }else{
    echo "página não encontrada";
  }
 ?>
