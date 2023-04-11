<?php

require_once ("../model/Usuario.php");





$usuario = new Usuario();

$usuario->setNome($_POST['txtnome']);
$usuario->setCpf($_POST['txtcpf']);

if(strpos($_POST['txtrendimento'], '.')){

    $usuario->setRendimento($_POST['txtrendimento']);
    echo ($usuario->CalculaRendimento($usuario));

}else{

   echo("<script>
    
   var resultado = confirm('é necessario inserir o ponto dos centavos');

   if(resultado == true){
      

    window.location.href = 'http://localhost/AtividadeMVC/aliquota/index.php';

      
   }else{
   

    window.location.href = 'http://localhost/AtividadeMVC/index.php';

   
   }

    </script>");

 

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alíquota</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
   <h1>
       <?php
       
       echo("Nome: ".$usuario->getNome());
       echo("<br>CPF: ".$usuario->getCpf());
       echo("<br>Rendimento: ".$usuario->getRendimento());
        echo("<br>Aliquota: ".number_format($usuario->getAliquota(), 2, ',', ' '));
        echo("<br>Valor a pagar: ".number_format($usuario->getValorPagar(), 2, ',', ' '));
       ?>
   </h1>   


        
</body>
</html>



