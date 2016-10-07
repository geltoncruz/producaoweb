var nome,email,clsName;
clsName = document.getElementsByClassName("nome");
nome = document.getElementById("nome");
email = document.getElementById('email');

// console.log(nome);
// console.log(email);
// email.value = "gelton@smidiaplural.com.br";
// if(email.value == "gelton@midiaplural.com.br"){
//   alert("igual");
// }else{
//   alert("diferente");
// }

var button = document.querySelector("#calc");
var txt = document.querySelector("span");
var calcular = function(e){
    e.preventDefault();
    var n1 = parseInt(document.querySelector("#n1").value);
    var op = document.querySelector("#op");
    var n2 = parseInt(document.querySelector("#n2").value);
    console.log(op.value);
    var res;
    switch (op.value) {
      case "sum":
        txt.innerHTML = n1+n2;
        break;
      case  "sub":
        txt.innerHTML = n1-n2;
        break;
        case  "mult":
          txt.innerHTML = n1*n2;
          break;
          case  "div":
            txt.innerHTML = n1/n2;
            break;
      default:

        txt.innerHTML = "Valores não definidos";

    }


}

button.addEventListener('click',calcular);
