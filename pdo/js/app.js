var app = function(){
  //Inicio;
  var livros = [];
  var btnAddLivro = document.querySelector(".btnAddLivro");
  var btnDeleteLivro = document.querySelector(".delete");

//adcionar livro
  var cadastrarLivro = function(e){
    e.preventDefault();
    console.log('cadastrado');

    var titulo = document.querySelector("#titulo").value;

    // var titulo = $("#titulo").val():

    var descricao = document.querySelector("#descricao").value;

    var livro = {
        'titulo' : titulo,
        'descricao' : descricao
    }

    livros.push(livro);
    //console.log(livros);

    // var data = JSON.stringify(livro);
    var data = 'titulo='+document.querySelector("#titulo").value+'&descricao='+document.querySelector("#descricao").value;
    
    console.log(data);

    $.ajax({
      type : 'POST',
      url : 'controlleLivro.php',
      data : data,
      success : function(){
      alert('cadastrado com Sucesso');
      },
      error : function(){
        alert('error');
      }
    });

  }

  //deletar livro
  var deletarLivro = function(){


    $.ajax({
      type : 'POST',
      url : 'controlleLivro.php',
      data : 'action=delete&id=18',
      success : function resposta(plainObject, textStatus, jqXHR){
        alert('ok' +this.data);
      alert('cadastrado com Sucesso');
      },
      error : function(){
        alert('error');
        alert('ok' +this.data);
      }
    });

  }

  btnDeleteLivro.addEventListener('click',deletarLivro)
  btnAddLivro.addEventListener('click',cadastrarLivro);


}
app();
