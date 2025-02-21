var teclado = document.createElement("input")
teclado.type = "text"
document.body.appendChild(teclado)

var escreve = document.createElement("p")
escreve.id = "escreve";
document.body.appendChild(escreve)

function escrever (){

    document.getElementById("escreve").innerText = teclado.value
}

document.addEventListener("input", escrever)
