<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
Algoritmo "Troca_Valores"
Var
   A, B, Aux : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite o valor de A: ")
   Leia(A)
   Escreva("Digite o valor de B: ")
   Leia(B)

   // Passo 2: A "Dança das Cadeiras"
   Aux <- A  // O Auxiliar guarda o valor de A
   A <- B    // A recebe o valor de B (o valor antigo de A sumiria aqui se não estivesse no Aux)
   B <- Aux  // B recebe o valor que estava guardado no Auxiliar

   // Passo 3: Resultado
   Escreval("Agora A vale: ", A)
   Escreval("Agora B vale: ", B)
?>


</body>
</html>