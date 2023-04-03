import { aliquota } from "./aliquota.js";

var dados = aliquota()

var nome = dados[0]
var cpf = dados[1]
var rendimento = dados[2]
var aliquotares = dados[3]
var valorPagar = dados[4]

export function elementos(){
      // cria um novo elemento div
     // e dá à ele conteúdo

     

  var divNova = document.createElement("div");
  var conteudoNovo = document.createTextNode(`Nome: ${nome}\n
                                              CPF: ${cpf}\n
                                              Rendimento anual: R$ ${rendimento}\n 
                                              Alíquota do imposto de renda: ${aliquotares.toLocaleString('pt-BR')}%\n 
                                              Valor a pagar: R$ ${valorPagar.toLocaleString('pt-BR')}`);

  divNova.appendChild(conteudoNovo); //adiciona o nó de texto à nova div criada

  // adiciona o novo elemento criado e seu conteúdo ao DOM
  var divAtual = document.getElementById("div1");
  document.body.insertBefore(divNova, divAtual);
}