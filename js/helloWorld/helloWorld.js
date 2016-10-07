// //
// //     // alert('Hello World');
// //     // Nova informação
// //     /*
// //
// //     nome = 1
// //     nome = "gelton"
// //     console.log('Hello World javascript')
// //     console.log(nome)
// //     alert('Ponto e virgula')
// //     */
// //
// //     var aluno = {
// //       nome  : 'Gelton',
// //       sobrenome : 'Cruz',
// //       contas : [
// //         {
// //         banco : 0001,
// //         nome  : 'Bradesco'
// //       },
// //       {
// //       banco : 0002,
// //       nome  : 'Caixa',
// //       sacar : function(){
// //         alert('sacar 10 reais');
// //       }
// //     }
// //
// //     ]
// //     };
// //
// //     var sacar = function(){
// //       alert('Saquei');
// //     }
// //
// //     // sacar();
// //     // console.log(typeof(aluno))
// //     // console.log(aluno.nome);
// //     // console.log(aluno.sobrenome);
// //     // console.log('Contas :' +aluno.contas[0].banco);
// //     // console.log('Contas :' +aluno.contas[0].nome);
// //     // console.log('Conta 002 : '+aluno.contas[1].sacar())
// //     // console.log(aluno.nome +' '+aluno.sobrenome)
// //
// //     // var n1 = 1; //number
// //     // var n2 = 1; //string
// //     // console.log(n1+n2);
// //     // if(n1===n2){
// //     //     console.log('identicos');
// //     // }else if(n1==n2){
// //     //   console.log('iguais');
// //     // }else{
// //     //   console.log('diferentes');
// //     // }
// //     //
// //     //
// //
// //     var bomDia = function(){
// //       alert('Bom dia pessoal');
// //     }
// //
// //
// //     // var data = new Date();
// //     // console.log(data);
// //     // document.write(data);
// //     // document.write("\n\r data");
// //
// //     // var n1 = 5;
// //     // ++n1 // 6
// //     // n1++ //7
// //     //
// //     // n1--
// //     // --n1
// //
// //     ?// texto
// //     // console.log(a);
// //     // texto;
// //
// //
// //     //array
// //     // var frutas = ['maca','pera','uva','manga'];
// //     // // i = frutas.length
// //     // for(i=0;i<frutas.length;++i){
// //     //   document.write('<h1> posicao : '+i+'Fruta :'+frutas[i]+'</h1>');
// //     // }
// //     //
// //     // var numero = [1,2,4];
// //     // console.log(numero.indexOf(2));
// //     // numero.push(8);
// //     // frutas.push('cajanara');
// //     // console.log(numero);
// //
// //
// //
// // Condicional e expressões
//
// var n = 14;
//
// if(n != 13){
//   document.write('Valor menor e identico ');
// }
//
// n > 15 ? console.log('Maior') : console.log('nao maior');
//
// //expressao ?  true : falso
//
// n > 20 ? document.write("verdadeiro") : document.write("falso");
// ////
//
//
//   switch (n) {
//     case 1:
//         console.log('acertou 1');
//       break;
//     case 2:
//         console.log('acertou 2')
//         break;
//     case 14:
//       console.log('acertou 14');
//       break;
//     default:
//       console.log('nenhum encontrado');
//
//   }
//
//   var fx = function(x){
//       i = x;
//       console.log(x);
//
//   }
//
//   fx(3);
//
//   function fx(x){
//
//   }
//
// (function(){
//   alert('hi');
// })();
//
//
var curso = {
  nome : "gelton",
  idade: 31,
  inscricao: function(this.nome){
    console.log(this.nome);
  }
};
//

curso.capacidade = 40;
curso.vagas = 30;

curso.titulo = "Dominando javascript";
console.log(curso);
//
//
//
//
//
//
//
//
// //
