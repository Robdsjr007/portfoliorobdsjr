//Recupera o código do controle.js
var token = sessionStorage.logado;

if (token){
    var corpo = document.querySelector("body");
    corpo.classList.remove("invisivel");
} else {
    alert("Você não está logado");
    window.location.href= "erro.html";
}

function encerrar(){
    sessionStorage.clear();
    location.href = "index.html"
}