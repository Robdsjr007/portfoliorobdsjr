//Salva no Navegador
const email = document.getElementById("email");
const senha = document.getElementById("senha");
const btn = document.getElementById("btn");
senhaInterna = "123";
loginInterno = "trabalhos@gmail.com";
var token= "continuar";
var token2= "falhar";


btn.addEventListener('click', function(e){
    e.preventDefault()
    if (senhaInterna == senha.value && loginInterno == email.value){
        alert("Logado");
        sessionStorage.logado = token;
        window.location.href= "home.html";
    } else {
        alert("Não logado");
        window.location.href= "erro.html";
        
    }
})

    if(token == sessionStorage.logado){
        alert("Você já está logado");
        window.location.href = "home.html"
    }
