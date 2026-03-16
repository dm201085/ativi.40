<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
Algoritmo "Valor_Venda_Produto"
Var
   custo, percentual, venda : real
Inicio
  
   Escreva("Digite o preço de custo do produto: R$ ")
   Leia(custo)
   Escreva("Digite o percentual de acréscimo (ex: 25 para 25%): ")
   Leia(percentual)

   venda <- custo + (custo * (percentual / 100))

 
   Escreval("O valor de venda do produto é: R$ ", venda)
?>

</body>
</html>