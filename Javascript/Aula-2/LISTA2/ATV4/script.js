function calculo(){
    var num1 = document.getElementById("nume1").value
    var num2 = document.getElementById("nume2").value
    //tipeof
    var num1 = Number.parseInt(num1)
    var num2 = Number.parseInt(num2)

    var result = num1 + num2 
    document.getElementById("resultado").innerHTML = "resultado: "+result
}