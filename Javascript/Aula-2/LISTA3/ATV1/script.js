
var a = window.document.getElementById('area')
a.addEventListener('mouseenter', entrar)
a.addEventListener('mouseout', sair)
function entrar(){
    a.style.width = "300px"
    a.style.height = "300px"
    a.style.background = 'red'
}
function sair(){
    a.style.width = "200px"
    a.style.height = "200px"
    a.style.background = 'blue'
}