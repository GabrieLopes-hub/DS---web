var N1 = Number.parseInt (prompt("digite um número"));
var N2 = Number.parseInt (prompt("digite um número"));

var conta = prompt ("+  ||  -  ||  *  ||  /");

if (conta == "+") 
    resul = N1+N2
if (conta == "-") 
    resul = N1-N2
if (conta == "*") 
    resul = N1*N2
if (conta == "/") 
    if (N2 == 0) alert("Não é possivel dividir por 0") 
    else resul =  N1/N2
alert (resul)