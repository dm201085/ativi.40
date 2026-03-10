<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
Algoritmo "Loja_Mamao_Com_Acucar"
Var
   valor_compra, valor_prestacao : real
Inicio
   // Passo 1: Entrada do valor total
   Escreva("Digite o valor total da compra: R$ ")
   Leia(valor_compra)

   // Passo 2: Cálculo da prestação (divisão simples por 5)
   valor_prestacao <- valor_compra / 5

   // Passo 3: Exibição do resultado
   Escreval("O valor de cada prestação (em 5x sem juros) é: R$ ", valor_prestacao)
?>

</body>
</html>