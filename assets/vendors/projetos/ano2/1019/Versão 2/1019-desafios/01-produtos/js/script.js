function resultado() {
      
        var input = document.querySelector("#produto");
        var produto = input.value.toLowerCase();
        var resposta = document.querySelector(".resposta");

        document.getElementById('resposta').innerHTML = '';

        console.log(produto)

        if (produto){
            switch (produto) {
                case 'bateria':
                    document.getElementById('resposta').innerHTML = `Bateria<br>`;
                    var texto = document.createTextNode("R$1.600,00");
                    resposta.appendChild(texto);
                    break;
                                    
                 case 'guitarra':
                    document.getElementById('resposta').innerHTML = `Guitarra<br>`;
                    var texto = document.createTextNode("R$845,00");
                    resposta.appendChild(texto);
                    break;
                        
                case 'saxofone':
                    document.getElementById('resposta').innerHTML = `Saxofone<br>`;
                    var texto = document.createTextNode("R$2.900,00");
                    resposta.appendChild(texto);
                    break; 
                        
                case 'piano':
                    document.getElementById('resposta').innerHTML = `Piano<br>`;
                    var texto = document.createTextNode("R$2.689,00");
                    resposta.appendChild(texto);
                    break
                                        
                case 'violão':
                    document.getElementById('resposta').innerHTML = `Violão<br>`;
                    var texto = document.createTextNode("R$400,00");
                    resposta.appendChild(texto);
                    break
                        
                default:
                    alert("ERRO! Verifique as Informações!");
                    break;
                        }
                }
    }


    