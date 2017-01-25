var app = function(){

  $('document').ready(function(){

    var pessoas = [{'nome':'Gelton','sobrenome':'Cruz'},{'nome':'Levi','sobrenome':'Cruz'},{'nome':'Levitico','sobrenome':'Cruz'}];
    // console.log(pessoas[1].nome);

    var mostarPessoas = function(arr){
      var lista = $('#lista');
      lista.html('');

      arr.forEach(function(pes){
        lista.append('<div>'+pes.nome+'</div>')
      })
    }

    $('#nome').on('change',function(){
      var busca  = this.value;
      // console.log(busca);

      var filtrados = pessoas.filter(function(pes){
        // pes.nome.indexOf(busca) != -1;
        // console.log(pes.nome.toLowerCase().indexOf(busca) != -1);
        return pes.nome.toLowerCase().indexOf(busca) != -1
      })
      mostarPessoas(filtrados);
    })




  })

}
app();
