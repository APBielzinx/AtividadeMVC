import { aliquota } from "./aliquota.js";
import { elementos } from "./elementos.js";

export function Dados(){

    const urlParams = new URLSearchParams(window.location.search);
    

    var nome = urlParams.get("nome")
    var cpf = urlParams.get("cpf")
    var rendimento = urlParams.get("rendimento")
    
    
var dados = [
            nome,
            cpf,
            rendimento
           ]


return dados

}

aliquota()
elementos()



