const data = new Date().getHours();
const frase = document.getElementById("time");

function serEducado(data) {
    if (data == 13 && data < 18) {
        frase.innerText = "Boa tarde!";
    } else if (data < 13){
        frase.innerText = "Bom dia!";
    } else {
        innerText = "Boa noite";
    }
}

serEducado(data);