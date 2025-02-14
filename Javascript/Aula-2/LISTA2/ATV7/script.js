function verificarTriangulo() {
    let lado1 = parseFloat(document.getElementById('lado1').value);
    let lado2 = parseFloat(document.getElementById('lado2').value);
    let lado3 = parseFloat(document.getElementById('lado3').value);
    let resultado = document.getElementById('resultado');

    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3) || lado1 <= 0 || lado2 <= 0 || lado3 <= 0) {
        resultado.textContent = "insira valores válidos para os lados do triângulo.";
        return;
    }

    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
        if (lado1 === lado2 && lado2 === lado3) {
            resultado.textContent = "É um triângulo equilátero.";
        } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
            resultado.textContent = "É um triângulo isósceles.";
        } else {
            resultado.textContent = "É um triângulo escaleno.";
        }
    } else {
        resultado.textContent = "Os valores inseridos não formam um triângulo válido.";
    }
}