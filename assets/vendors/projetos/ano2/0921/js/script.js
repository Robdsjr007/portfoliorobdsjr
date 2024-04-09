//Mundando o titulo
titulo.textContent="Requisição Assincrona com API-Fetch";

// Selecionar elementos HTML
var input = selecionarTags('#cep')
var divRes = selecionarTags('.resultado')
var btn = selecionarTags('.btn')
var div = document.querySelector(".resultado");
var resultado = " "



function buscarCep(){

 var cep = input.value;
 var url = `https://viacep.com.br/ws/${cep}/json/`

 fetch(url)
 .then(function(response){
  response.json()
  .then(function(data) {
    console.log(data); 
    mostrarDados(data)})
  })
  .catch(function(){
    alert("CEP inválido, por favor digite novamente");
  })


 function mostrarDados(dados){
    var p = document.createElement("p")
        div.appendChild(p)
    let resultado = document.querySelector(".resultado");

    resultado.innerHTML = `
                    <table>
                    <tr>
                      <th>Cep</th>
                      <th>Logradouro</th>
                      <th>Bairro</th>
                      <th>Localidade</th>
                      <th>Uf</th>
                      <th>DDD</th>
                    </tr>
                      <td>${dados.cep}</td>
                      <td>${dados.logradouro}</td>
                      <td>${dados.bairro}</td>
                      <td>${dados.localidade}</td>
                      <td>${dados.uf}</td>
                      <td>${dados.ddd}</td>
                    </table>`
 }
}

btn.onclick = buscarCep

function selecionarTags(tag){
    var selecao = document.querySelector(tag)
    return selecao
}
