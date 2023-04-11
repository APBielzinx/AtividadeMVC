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

    <form method ="POST" action ="../controller/controlador.php">
        <h1>Descubra qual triângulo é</h1>
        <div  class="area-input"> 
            <input type =" text " name ="ladoA" placeholder="Lado 1" required>
        </div>
        <div class="area-input">
            <input type = " text " name ="ladoB" placeholder="Lado 2" required>
        </div>
       <div class="area-input">
        <input input  type =" text " name ="ladoC" placeholder="Lado 3" required> 
       </div>
        
        <button  type ="submit" > Ver </button >

    </form>

</body>
</html>