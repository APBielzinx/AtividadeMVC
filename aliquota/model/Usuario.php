<?php

class Usuario{

private $nome;
private $cpf;
private $rendimento;

public function getNome() {
    return $this->nome;
}
public function setNome($nome) {
    $this->nome = $nome;
}

public function getCpf() {
    return $this->cpf;
}
public function setCpf($cpf) {
    $this->cpf = $cpf;
}

public function getRendimento() {
    return $this->rendimento;
}
public function setRendimento($rendimento) {
    $this->rendimento = $rendimento;
}

public function CalculaRendimento($usuario){
  
    $aliquota;
    $valorPagar;



        if($usuario->getRendimento() <= 22847.76){
           
            $aliquota = 0;
            $valorPagar = 0;

            echo(" <script>
            
            alert('Você está livre desse imposto :)')

            </script>");

        }else if ($usuario->getRendimento()  >= 22847.77 && $usuario->getRendimento() < 33919.80) {

            $aliquota = 7.5;
            $valorPagar = $usuario->getRendimento() * 0.075;

       
}else if ($usuario->getRendimento()  >= 33919.81 && $usuario->getRendimento() < 45012.60) {

    $aliquota = 15;
    $valorPagar = $usuario->getRendimento() * 0.15; 

  } else if ($usuario->getRendimento() >= 45012.61 && $usuario->getRendimento() < 55976.16) {

    $aliquota = 22.5;
    $valorPagar = $usuario->getRendimento() * 0.225;

  }else if($usuario->getRendimento() > 55976.16 ){

    $aliquota = 27.5;
    $valorPagar = $usuario->getRendimento() * 0.275;

  } 




echo("Nome: ".$usuario->getNome());
echo("<br>CPF: ".$usuario->getCpf());
echo("<br>Rendimento: ".$usuario->getRendimento());
echo("<br>Aliquota: ".number_format($aliquota, 2, ',', ' '));
echo("<br>Valor a pagar: ".number_format($valorPagar, 2, ',', ' '));


}

}





?>