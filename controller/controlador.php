<?php

require_once ("../model/Usuario.php");


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rendimento = $_POST['rendimento'];

$usuario = new Usuario();

$usuario->setNome($nome);
$usuario->setCpf($cpf);
$usuario->setRendimento($rendimento);

$usuario->apresenta()

?>