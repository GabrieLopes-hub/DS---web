function verificacao(){
    var usuario = document.getElementById("user").value
    var senha = document.getElementById("senha").value

    var senha = Number.parseInt(senha)

    if(usuario == "admin" && senha == 1234){
        document.getElementById("veri").innerHTML = "Seja bem vindo " + usuario
    }else{
        document.getElementById("veri").innerHTML = "Usuário ou senha incorretos"
    }
}