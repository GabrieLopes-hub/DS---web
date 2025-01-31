var capital = Number.parseFloat (prompt("qual foi o capital"));
var taxa = Number.parseFloat (prompt("qual foi a taxa"));
var tempo = Number.parseFloat (prompt("qual foi o tempo"));

var montante = capital * (1+taxa/100)**tempo

alert (montante.toFixed(2))