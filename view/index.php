<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body  bgcolor="#001E5A">
    
        <form action="/controller/controlador.php" method="POST">
            <h1>Calcule sua alíquota</h1>
            <div class="area-input">
               
                <input type="text" name="nome"  placeholder="Nome">
            </div>
         
            <div class="area-input">
               
                <input type="text" name="cpf" placeholder="CPF">
            </div>
  
            <div class="area-input">
                
                <input type="text" name="rendimento" placeholder="rendimento anual">
               
            </div>
            <button type="submit">Enviar</button>

        </form>
  
    
    
</body>
</html>