<?php

require_once("../model/Usuario.php");

class triangulo {
    public static function verTriangulo ($usuario){
        $msg
        
        if($ladoA == $ladoB && $ladoB == $ladoC && $ladoA == $ladoC) {
            echo("equilátero");
            $msg =  'equilátero'
    
        } else if ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC ) {
            echo("isósceles");
            console.log("isósceles")
            $msg = ' isósceles'
        } else if ($ladoA != $ladoB && $ladoA != $ladoC && $ladoC != $ladoB) {
            echo("escaleno");
            $msg = 'escaleno'
        }else{
            echo("os lados não formam um triângulo");
            $msg = 'os lados não formam um triângulo'
        }
        


          return $msg
    }

}

?>