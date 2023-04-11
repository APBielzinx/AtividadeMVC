<?php

class Usuario {
    private $ladoA;
    private $ladoB;
    private $ladoC;


    public function getLadoA() {
        return $this->ladoA;
    }
    public function setLadoA($ladoA) {
        $this->ladoA = $ladoA;
    }

    public function getLadoB() {
        return $this->ladoB;
    }
    public function setLadoB($ladoB) {
        $this->ladoB = $ladoB;
    }

    public function getLadoC() {
        return $this->ladoC;
    }
    public function setLadoC($ladoC) {
        $this->ladoC = $ladoC;
    }


    public function VerTriangulo($usuario){
        $msg;
        
        if($usuario->getLadoA() == $usuario->getLadoB() && $usuario->getLadoB() == $usuario->getLadoC() && $usuario->getLadoA() == $usuario->getLadoC()) {
            echo("equilátero");
            $msg =  'equilátero';
    
        } else if ($usuario->getLadoA() == $usuario->getLadoB() || $usuario->getLadoA() == $usuario->getLadoC() || $usuario->getLadoB() == $usuario->getLadoC() ) {
            echo("isósceles");
          
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