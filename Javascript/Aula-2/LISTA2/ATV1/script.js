function chama(){
    var idade = document.getElementById("idade").value
    var idade = Number.parseInt(idade)

    if(idade < 18){
        document.getElementById("pessoa").innerHTML = "Você é menor de idade"
    }else{
        document.getElementById("pessoa").innerHTML = "Você é maior de idade"
    }
}