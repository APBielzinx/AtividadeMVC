<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body onload="informacao()">
    
      
            <h1>Calcule sua alíquota</h1>
           

           
  
    
        <form action="../controller/controlador.php" method="post">
       <div class="area-input">
       <input type="text" name="txtnome" id="txtnome"  placeholder="Nome" required>
       </div>
       <div class="area-input">
       <input type="text" name="txtcpf" id="txtcpf" placeholder="CPF" required>
       </div>
       <div class="area-input">
       <input type="text" name="txtrendimento" id="txtrendimento" placeholder="rendimento anual"  required>
       </div>
       


   
        <button  onclick="valida()" type="submit">Enviar</button>

    </form>
   
        <script src="../js/validaCpf.js"></script>
        <script>

function informacao(){
    alert("Utilize um ponto para marcar os centavos mesmo que seja 0")
}

document.getElementById("txtnome").onkeypress = function(e) {
         var chr = String.fromCharCode(e.which);
         if ("qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0)
           console.log("a")
         return false;
       };

</script>


</body>
</html>