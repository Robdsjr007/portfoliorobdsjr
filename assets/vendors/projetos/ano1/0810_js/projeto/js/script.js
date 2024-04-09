const span = document.getElementById("valor");
const v1 = parseInt(prompt("Digite um valor"));
const v2 = parseInt(prompt("Digite outro valor"));

if (!v1) {
    alert("Você não digitou o primeiro valor corretamente!");
} else if (!v2) {
    alert("Você não digitou o segundo valor corretamente!");
} else {
    span.innerHTML =  v1 + v2;
};