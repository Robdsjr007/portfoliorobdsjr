function resultado() {
      
    var input = document.querySelector("#financa");
    var financa = input.value;

    const select = document.getElementById('origem');
    const opcao = select.options[select.selectedIndex].value;

    var resposta = document.querySelector(".resposta");

    document.getElementById('resposta').innerHTML = '';

    if(financa<='1000') {    
        switch (opcao) {
            case 'Sul':            
            case 'Sudeste':
                var texto = document.createTextNode("R$12,90");
                resposta.appendChild(texto);
                break;
                    
            case 'Centro-Oeste':
            case 'Norte':       
            case 'Nordeste':
                var texto = document.createTextNode("R$17,90");
                resposta.appendChild(texto);
                break;
                    
            default:
                alert("ERRO! Valor minímo permitido para financiar é de R$ 1.000,00");
                break;
                            }

    } else {
        alert("ERRO! Verifique as Informações");
    }
}  