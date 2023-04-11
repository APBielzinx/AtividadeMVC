<?php

require_once("../model/Usuario.php");


$usuario = new Usuario();

$usuario->setLadoA($_POST['ladoA']);

$usuario->setLadoB($_POST['ladoB']);

$usuario->setLadoC($_POST['ladoC']);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>o Triângulo é:⠀ </h1>

<h1><?php

echo($usuario->VerTriangulo($usuario));



?></h1> 

</body>
</html>