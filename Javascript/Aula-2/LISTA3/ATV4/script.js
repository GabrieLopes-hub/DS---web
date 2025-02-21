var texto = document.createElement("h1")
document.body.appendChild(texto)

function escrever (){
    texto.textContent = "Seja bem vindo(a)!"
}
document.addEventListener("DOMContentLoaded", escrever)