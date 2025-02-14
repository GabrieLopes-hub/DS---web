function chama(){
    var nume = document.getElementById("num").value
    var nume = Number.parseInt(nume)

    if(nume == 0){
        document.getElementById("P-N-Z").innerHTML = "Este número é zero"
    }
    if(nume > 0){
        document.getElementById("P-N-Z").innerHTML = "Este número é positivo"
    }
    if(nume < 0){
        document.getElementById("P-N-Z").innerHTML = "Este número é negativo"
    }
}