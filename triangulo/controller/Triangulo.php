<?php

require_once("../model/Usuario.php");

class Triangulo {
    public static function VerTriangulo ($usuario){
        $msg;
        
        if($usuario->getLadoA() == $usuario->getLadoB() && $usuario->getLadoB() == $usuario->getLadoC() && $usuario->getLadoA() == $usuario->getLadoC()) {
            echo("equilátero");
            $msg =  'equilátero';
    
        } else if ($usuario->getLadoA() == $usuario->getLadoB()|| $usuario->getLadoA() == $usuario->getLadoC() || $usuario->getLadoB() == $usuario->getLadoC() ) {
            echo("isósceles");
            console.log("isósceles");
            $msg = ' isósceles';
        } else if ($usuario->getLadoA() != $usuario->getLadoB() && $usuario->getLadoA() != $usuario->getLadoC() && $usuario->getLadoC() != $usuario->getLadoB()) {
            echo("escaleno");
            $msg = 'escaleno';
        }else{
            echo("os lados não formam um triângulo");
            $msg = 'os lados não formam um triângulo';
        }
        


       
    }

}

?>