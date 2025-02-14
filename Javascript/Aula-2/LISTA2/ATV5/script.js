function par_ou_impar(){
    var numero = document.getElementById("nume").value
    var numero = Number.parseInt(numero)

    console.log(numero)//estava verificando a var

    result = numero % 2

    console.log(result)

    if (result == 0){
        document.getElementById("par-impar").innerHTML = "par"
    }
    else{
        document.getElementById("par-impar").innerHTML = "impar"
    }
}