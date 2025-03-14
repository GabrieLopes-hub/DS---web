
function ADlista(){
    var nomeInput = document.getelementByid("nomeInput")
    var descricaoInput = document.getelementByid("descricaoInput")
    var novadiv = document.createElement("div")
    var novop = document.createElement("p")
    

        novop.textContent = nomeInput
        novadiv.appendChild(novop)
        document.body.appendChild(novadiv)

}
