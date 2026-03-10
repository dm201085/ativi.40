<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Primeiro número</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Segundo número</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" value="Enviar">
</form>

<?php
Algoritmo "Troca_Valores"
Var
   A, B, Aux : real
Inicio
   Escreva("Digite o valor de A: ")
   Leia(A)
   Escreva("Digite o valor de B: ")
   Leia(B)

 
   Aux <- A  
   A <- B    
   B <- Aux  

  
   Escreval("Agora A vale: ", A)
   Escreval("Agora B vale: ", B)
?>


</body>
</html>