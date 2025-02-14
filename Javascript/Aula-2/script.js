//window.document.write(window.document.URL)

var p1 = window.document.getElementsByTagName('p')[0]
document.getElementById("terceiro-paragrafo").innerHTML = p1.innerText

document.getElementById("teste").innerHTML = "Hello World";

var classes = document.getElementsByClassName("exemplo")[0].innerHTML = "Hello World";
classes[0].innerHTML = "Hello World";

var paragrafo = document.querySelector("p.teste2").style
document.querySelector("p#teste2").style.backgroundColor = "blue"

paragrafo.backgroundColor = "red"
paragrafo.color= "white"

function alertadeclique(){
    alert("Você clicou")
}

function calculo(){
    var num1 = document.getElementById("nume1").value
    var num2 = document.getElementById("nume2").value
    //tipeof
    var num1 = Number.parseInt(num1)
    var num2 = Number.parseInt(num2)

    var result = num1 + num2 
    document.getElementById("resultado").innerHTML = "resultado: "+result
}