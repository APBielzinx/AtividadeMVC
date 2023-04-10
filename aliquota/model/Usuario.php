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


}



?>