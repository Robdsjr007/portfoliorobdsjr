

document.querySelector(".btn-hero").addEventListener('click', function frete(e) {
        e.preventDefault();
        var input = document.querySelector("#pontos");
        var pontos = input.value;

        const select = document.getElementById('origem');
        const opcao = select.options[select.selectedIndex].value;

        var resposta = document.querySelector(".resposta");

        document.getElementById('resposta').innerHTML = '';

        if(pontos<=119) {    
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
                    alert("ERRO! Verifique as Informações");
                    break;
                                }
        }  else if (pontos<=149) {

            switch (opcao) {

                case 'Sul':   
                case 'Sudeste':
                    var texto = document.createTextNode("R$7,74");
                    resposta.appendChild(texto);
                    break;
                        
                case 'Centro-Oeste':
                case 'Norte':    
                case 'Nordeste':
                    var texto = document.createTextNode("R$10,74");
                    resposta.appendChild(texto);
                    break;
                        
                default:
                    alert("ERRO! Verifique as Informações");
                    break;
                }

        } else {
            alert("ERRO! Verifique as Informações");
        }
    });  