<?php

require_once ("../model/Usuario.php");
require_once("../model/UsuarioFunctions.php");
require_once("../controller/aliquota.php");




$usuario = new Usuario();

$usuario->setNome($_POST['txtnome']);
$usuario->setCpf($_POST['txtcpf']);
$usuario->setRendimento($_POST['txtrendimento']);



echo (Aliquota::calcular($usuario));


/*<form name="formAliquota" action="controller/controlador.php" method="POST">

<div class="area-input">
    <input type="text" name="txtnome" id="txtnome"  placeholder="Nome">
</div>

<div class="area-input">
   
    <input type="text" name="txtcpf" id="txtcpf" placeholder="CPF">
</div>

<div class="area-input">
    
    <input type="text" name="txtrendimento" id="txtrendimento" placeholder="rendimento anual">
   
</div>
<button type="submit">Enviar</button>

</form>*/

?>



