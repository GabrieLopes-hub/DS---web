function porcen(){
    var numero = document.getElementById("nume").value
    var numero = Number.parseInt(numero)

    var porcent = document.getElementById("porcent").value
    var porcent = Number.parseInt(porcent)

    var respo = (numero / 100) * porcent

    document.getElementById("porcen").innerHTML = respo
}