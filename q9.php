<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
Algoritmo "Rendimento_Poupanca"
Var
   valor_deposito, valor_final : real
Inicio
   // Passo 1: Entrada de dados
   Escreva("Digite o valor depositado: R$ ")
   Leia(valor_deposito)

   // Passo 2: Cálculo do rendimento (0,70% é o mesmo que 0,007)
   // Valor Final = Valor Inicial + (Valor Inicial * 0.007)
   valor_final <- valor_deposito * 1.007

   // Passo 3: Exibição do resultado
   Escreval("Após um mês, o valor com rendimento é: R$ ", valor_final)
?>


</body>
</html>