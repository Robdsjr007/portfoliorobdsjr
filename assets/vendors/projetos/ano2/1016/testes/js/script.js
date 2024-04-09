//Mundando o titulo
titulo.textContent="Verificando Preços de Produtos, sugestão digite 'micro ondas'";

// Selecionar elementos HTML
var input = selecionarTags('#produto');
var divRes = selecionarTags('.resultado');
var btn = selecionarTags('.btn');
var tbody = "";

  
btn.onclick = mostrar;

function mostrar(){
var produto = input.value;

if(produto == `micro ondas`){
    console.log("broxa");
    produto = divRes;
    divRes.innerHTML = `<h1> 300,00 </h1>`
} else{
    console.log("não");
    divRes.innerHTML = ' '
  }
}




function selecionarTags(tag){
    var selecao = document.querySelector(tag)
    return selecao
}

