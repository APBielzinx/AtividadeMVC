<?php

require_once ("Usuario.php");

class UsuarioFunctions{

    public static function apresenta($usuario){

    
        echo(" seu nome é: ".$usuario->getNome()." seu cpf é: ".$usuario->getCpf()." seu rendimento é "
        .$usuario->getRendimento());
    }
}



?>


