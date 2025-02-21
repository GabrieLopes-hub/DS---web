var texto = document.createElement("p")
texto.textContent = "começe a clicar"
document.body.appendChild(texto)

var clicks = document.createElement("p")
clicks.id = "clicks"
document.body.appendChild(clicks)

var nume = 0

function quant (){
    nume++
    document.getElementById("clicks").innerHTML = "clikcs: "+ nume
}

document.addEventListener("click", quant)