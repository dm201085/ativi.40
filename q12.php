<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
Algoritmo "Custo_Carro_Novo"
Var
   custo_fabrica, custo_com_imposto, custo_final : real
Inicio
   // Passo 1: Entrada do custo inicial
   Escreva("Digite o custo de fábrica do veículo: R$ ")
   Leia(custo_fabrica)

   // Passo 2: Aplicar 45% de impostos sobre o custo de fábrica
   custo_com_imposto <- custo_fabrica * 1.45

   // Passo 3: Aplicar 28% do distribuidor sobre o valor já com imposto
   custo_final <- custo_com_imposto * 1.28

   // Passo 4: Exibir o resultado
   Escreval("O custo final ao consumidor é: R$ ", custo_final)
?>

</body>
</html>