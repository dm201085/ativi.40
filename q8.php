<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
Algoritmo "Conversor_Moeda"
Var
   cotacao, qtd_dolar, valor_real : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite a cotação do dólar hoje: ")
   Leia(cotacao)
   Escreva("Quantos dólares você tem (US$): ")
   Leia(qtd_dolar)

   // Passo 2: Cálculo da conversão
   valor_real <- qtd_dolar * cotacao

   // Passo 3: Exibição do resultado
   Escreval("O valor em moeda brasileira é: R$ ", valor_real)
?>

</body>
</html>