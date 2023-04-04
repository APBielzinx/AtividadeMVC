<?php
 
 require_once("../model/Usuario.php");
 
 class aliquota{

    public static function calcular($usuario){

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

      }



    echo("Nome: ".$usuario->getNome());
    echo("<br>CPF: ".$usuario->getCpf());
    echo("<br>Rendimento: ".$usuario->getRendimento());
    echo("<br>Aliquota: ".number_format($aliquota, 2, ',', ' '));
    echo("<br>Valor a pagar: ".number_format($valorPagar, 2, ',', ' '));


 }
}
 
 ?>