import { Dados } from "./index.js";


var dados = Dados();

var nome = dados[0]
var cpf = dados[1]
var rendimento = dados[2]

export function aliquota(){

    
    let aliquota, valorPagar;

    console.log(aliquota)

    if (rendimento <= 22847.76) {
        aliquota = 0;
        valorPagar = 0;
        alert("Você está livre desse imposto :)")
      } else if (rendimento  >= 22847.77 && rendimento < 33919.80) {

        aliquota = 7.5;
        valorPagar = rendimento * 0.075;

      } else if (rendimento  >= 33919.81 && rendimento < 45012.60) {

        aliquota = 15;
        valorPagar = rendimento * 0.15 

      } else if (rendimento  >= 45012.61 && rendimento < 55976.16) {

        aliquota = 22.5;
        valorPagar = rendimento * 0.225

      }else if(rendimento > 55976.16 ){

        aliquota = 27.5;
        valorPagar = rendimento * 0.275

      } 

      /*console.log(`Nome: ${nome}`)
      console.log(`CPF: ${cpf}`);
      console.log(`Rendimento anual: R$ ${rendimento}`);
      console.log(`Alíquota do imposto de renda: ${aliquota}%`);
      console.log(`Valor a pagar: R$ ${valorPagar.toFixed(2)}`);
*/
      var variaveis = [nome,cpf,rendimento,aliquota,valorPagar]

      return variaveis

}