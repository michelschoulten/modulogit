//O que escrever na janela que abrir com prompt vai substituir pelo texto!!

function trocarDiv(){
var area = document.getElementById("area");
var texto = prompt("Qual seu nome?");

area.innerHTML = texto;

}