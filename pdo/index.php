<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aluno</title>
    <link href="./bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <section class="container container-fluid">
      <div class="alert alert-danger" role="alert" >
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Cadastro não realizado
    </div>
    <div class="alert alert-success" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Done:</span>
      <span class="glyphicon glyphicon-user"></span>
      Cadastro  realizado com sucesso!
    </div>

      <article class="cadastrarLivro">
        <h1>Cadastrar Livro</h1>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="titulo" class="col-sm-2 control-label">Titulo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
            </div>
          </div>
          <div class="form-group">
            <label for="descricao" class="col-sm-2 control-label">Descricao</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button class="btn btn-primary btnAddLivro">
                <span class="glyphicon glyphicon-floppy-disk"></span>
              </button>
            </div>
          </div>
        </form>
      </article>
      <article class="listaLivros">
        <h1>Lista de livros</h1>
        <table class="table">
          <thead>
            <tr>
              <th>
                <a href="#" title="Organizar por código">#Código</a>
              </th>
              <th>
                <a href="#" title="Organizar por título">Título</a>
              </th>
              <th>
                <a href="#" title="Organizar por Descrição">Descricao</a>
              </th>
              <th>
                Opçõess
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                001
              </td>
              <td>
                Dom Quixote
              </td>
              <td>
                O cavaleiro andante
              </td>
              <td>
                <button class="btn btn-primary">
                  <span class="glyphicon glyphicon-pencil"></span>
                </button>
                <button class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              </td>
            </tr>
            <tr>
              <td>
                001
              </td>
              <td>
                Dom Quixote
              </td>
              <td>
                O cavaleiro andante
              </td>
              <td>
                <button class="btn btn-primary">
                  <span class="glyphicon glyphicon-pencil"></span>
                </button>
                <button class="btn btn-danger delete">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </article>

    </section>
  </body>
  <script src="./js/app.js"></script>
</html>
<?php
/*
include 'kint-master/Kint.class.php';
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=progweb', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "INSERT INTO aluk no (nome,email) values ('gelton','gelton@midiaplural.com.br')";
    // $sql = "DELETE FROM aluno where id = 0";
    // $dbh->beginTransation();
    // $dbh->exec($sql);
    // $dbh->commit();

    //Prepare to INSERT


    // $stmt = $dbh->prepare("INSERT INTO aluno (id,nome,email) values (:id,:nome,:email)");
    $stmt = $dbh->prepare("SELECT * FROM aluno where nome like :nome ");

    // $stmt->bindParam(':id',$id);
    $stmt->bindParam(':nome',$nome);
    // $stmt->bindParam(':email',$email);


    // $id   = 3;
    $nome = "Ana";
    // $email = "ana@maria.com.br";

    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetch() ) {
      echo $row["id"]." ".$row["nome"]."<br>";
      # code...
    }

    // d($stmt->execute());
    // echo "$nome cadastrado com sucesso";
    //
    // $id = 4;
    // $nome = "Mariana";
    // $email = "Mariana@dionisio.com.br";
    // $stmt->execute();
    //
    // echo "$nome cadastrado com sucesso";



    $dbh = null;
} catch (PDOException $e) {


    print "Error!: " . $e->getMessage() . "<br/>";
    $dbh->rollback();
    die();
}


 ?>
