var frutas = []; // Vetor para armazenar as frutas

function adicionarFruta() {

    var frutaInput = document.getElementById("frutaInput");

    var fruta = frutaInput.value.trim(); //Remove espaços em branco no início e no fim

    if (fruta !== "") {
    frutas.push(fruta); // Adiciona a fruta ao vetor

    frutaInput.value = ""; // Limpa a caixa de texto

    // Atualiza a lista de frutas na página
    atualizarListaDeFrutas();
    }
}

function atualizarListaDeFrutas() {

    var frutasLista = document.getElementById("frutasLista");

    frutasLista.innerHTML = ""; // Limpa a lista antes de atualizar

    // Itera sobre o vetor de frutas e cria elementos de lista para cada uma
    for (var i = 0; i < frutas.length; i++) {
        var li = document.createElement("li");
        li.textContent = frutas[i];
        frutasLista.appendChild(li);
    }
}