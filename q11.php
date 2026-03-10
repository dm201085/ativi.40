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
   // Passo 1: Entrada de dados
   Escreva("Digite o preço de custo do produto: R$ ")
   Leia(custo)
   Escreva("Digite o percentual de acréscimo (ex: 25 para 25%): ")
   Leia(percentual)

   // Passo 2: Cálculo do valor de venda
   // O cálculo é: Custo + (Custo * Percentual / 100)
   venda <- custo + (custo * (percentual / 100))

   // Passo 3: Exibição do resultado
   Escreval("O valor de venda do produto é: R$ ", venda)
?>

</body>
</html>