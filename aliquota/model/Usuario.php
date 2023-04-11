<?php

class Usuario{

private $nome;
private $cpf;
private $rendimento;
private $aliquota;
private $valorPagar;

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

public function getAliquota() {
    return $this->aliquota;
}
public function setAliquota($aliquota) {
    $this->aliquota = $aliquota;
}

public function getValorPagar() {
    return $this->valorPagar;
}
public function setValorPagar($valorPagar) {
    $this->valorPagar = $valorPagar;
}

public function CalculaRendimento($usuario){
  
    $aliquota;
    $valorPagar;



        if($usuario->getRendimento() <= 22847.76){
           
           $usuario->setAliquota(0);
           $usuario->setValorPagar(0);

            echo(" <script>
            
            alert('Você está livre desse imposto :)')

            </script>");

        }else if ($usuario->getRendimento()  >= 22847.77 && $usuario->getRendimento() < 33919.80) {

            $usuario->setAliquota(7.5) ;
            $usuario->setValorPagar($usuario->getRendimento())  * 0.075;

       
}else if ($usuario->getRendimento()  >= 33919.81 && $usuario->getRendimento() < 45012.60) {

    $usuario->setAliquota(15) ;
    $usuario->setValorPagar($usuario->getRendimento())* 0.15; 

  } else if ($usuario->getRendimento() >= 45012.61 && $usuario->getRendimento() < 55976.16) {

    $usuario->setAliquota(22.5);
    $usuario->setValorPagar($usuario->getRendimento()) * 0.225;

  }else if($usuario->getRendimento() > 55976.16 ){

    $usuario->setAliquota(27.5);
    $usuario->setValorPagar($usuario->getRendimento()) * 0.275;

  } 






}

}





?>